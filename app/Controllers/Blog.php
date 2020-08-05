<?php namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Blog as BlogConfig;
use App\Libraries\Blog as BlogLibrary;

class Blog extends BaseController
{
    /**
     * @var BlogConfig
     */
    protected $config;

    /**
     * @var BlogLibrary
     */
    protected $blog;

    public function __construct()
    {
        $this->config = config(BlogConfig::class);
        $this->blog = new BlogLibrary();
    }

    /**
     * Displays posts based on date (reverse chronological order)
     */
    public function index()
    {
        $this->data['posts'] = $this->blog->getRecentPosts($this->config->perPage);
        $this->data['title'] = 'News';

        echo $this->render('blog/list');
    }

    /**
     * Displays posts based on category.
     *
     * @param string $category
     */
    public function category(string $category)
    {
        $this->data['posts'] = $this->blog->getRecentPosts($this->config->perPage, 0, $category);
        $this->data['title'] = "News ({$category})";
        $this->data['category'] = $category;

        echo $this->render('blog/list');
    }

    /**
     * Displays a single post
     *
     * @param string $slug
     */
    public function post(string $slug)
    {
        $post = $this->blog->getPost($slug);

        if (empty($post)) {
            throw PageNotFoundException::forPageNotFound();
        }

        $this->data['posts'] = $this->blog->getPost($slug);
        $this->data['title'] = $post->title ?? 'Some Post';

        echo $this->render('blog/single');
    }

    /**
     * A View Cell to display the most
     * recent posts as a list of links.
     *
     * @param int $limit
     */
    public function recentPosts(int $limit = 5)
    {
        // Coming soon...
    }

    /**
     * A View Cell to display the most
     * visited posts as a list of links.
     *
     * @param int $limit
     */
    public function popularPosts(int $limit = 5)
    {
        // Coming soon...
    }
}
