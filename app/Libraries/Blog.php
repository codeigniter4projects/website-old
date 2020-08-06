<?php namespace App\Libraries;

use App\Entities\Post;
use App\Exceptions\BlogException;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Blog as BlogConfig;
use League\CommonMark\CommonMarkConverter;

/**
 * Class Blog
 *
 * Handles reading and parsing content posts.
 * Posts are markdown files versioned with the
 * site repo, with a simple yaml header section
 * to define meta data.
 */
class Blog
{
    /**
     * @var BlogConfig
     */
    protected $config;

    public function __construct()
    {
        $this->config = config(BlogConfig::class);
    }

    /**
     * Gets the posts, sorted by most recent first.
     * If $category is present, will locate within a
     * subfolder of that name.
     *
     * @param int         $limit
     * @param int         $offset
     * @param string|null $category
     *
     * @throws BlogException
     */
    public function getRecentPosts(int $limit=5, int $offset=0, string $category = null)
    {
        $cacheKey = "blog_files_{$offset}_{$limit}_{$category}";

        if (! $posts = cache($cacheKey)) {
            helper('filesystem');

            if (! is_dir($this->config->contentPath)) {
                log_message('Blog Content Path is not a valid directory: '. $this->config->contentPath);
                throw BlogException::forInvalidContent();
            }

            $files = get_filenames($this->config->contentPath);

            if (! count($files)) {
                throw BlogException::forInvalidContent();
            }

            // Don't trust filesystem, order by date.
            asort($files);

            // Get the current page's worth.
            $files = array_splice($files, $offset, $limit);

            $posts = [];

            foreach ($files as $file) {
                $temp = $this->readPost($this->config->contentPath, $file);

                // Only collect from the correct category.
                if(! empty($category) && ! in_array($category, $temp->tags)) {
                    continue;
                }

                $posts[] = $temp;
            }

            cache()->save($cacheKey, $posts);
        }

        return $posts;
    }

    public function getPopularPosts(int $limit = 5)
    {

    }

    /**
     * Gets a single post
     *
     * @param string $slug
     */
    public function getPost(string $slug)
    {
        $cacheKey = "blog_post_{$slug}";

        if (! $post = cache($cacheKey)) {
            $files = glob("{$this->config->contentPath}*.{$slug}.md");

            if (! count($files)) {
                throw PageNotFoundException::forPageNotFound();
            }

            $post = $this->readPost($this->config->contentPath, basename($files[0]));

            cache()->save($cacheKey, $post);
        }

        return $post;
    }

    /**
     * Reads in a post from file and parses it
     * into a Post Entity.
     *
     * @param string $path
     */
    protected function readPost(string $folder, string $filename)
    {
        $contents = file($folder . $filename);

        if (empty($contents)) {
            return null;
        }

        $post = new Post();

        // Get slug and date
        preg_match('|^([\d-]+).(\S+).md$|i', $filename, $matches);

        if (! count($matches)) {
            return null;
        }

        $post->date = $matches[1];
        $post->slug = $matches[2];

        // Get the attributes from the front-matter of the file (between lines with ---)
        $inFrontMatter = false;
        $inBody = false;
        $body = [];
        foreach ($contents as $line) {
            if (trim($line) == '---') {
                $inFrontMatter = ! $inFrontMatter;
                if (! $inFrontMatter) {
                    $inBody = true;
                }
                continue;
            }

            if (! $inBody) {
                $key = substr($line, 0, strpos($line, ':'));
                $value = trim(substr($line, strpos($line, ':')+1));

                $post->$key = $value;

                continue;
            }

            $body[] = trim($line);
        }
        $post->body = implode("\n", $body);

        // Convert body using Markdown
        $markdown = new CommonMarkConverter();
        $post->html = $markdown->convertToHtml($post->body);

        return $post;
    }

    /**
     * Displays the HTML "widget" for the list of recent posts
     * in the sidebar.
     *
     * @param int $limit
     */
    public function recentPostWidget(int $limit): string
    {
        $posts = $this->getRecentPosts($limit);

        if (! count($posts)) {
            return '';
        }

        $html = '';

        foreach ($posts as $post) {
            $html .= "<li><a href='{$post->link()}'>{$post->title}</a></li>\n";
        }

        return "<h5>Recent Posts</h5>\n<ul>\n{$html}</ul>\n";
    }
}
