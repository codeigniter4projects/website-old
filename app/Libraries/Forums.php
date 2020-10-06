<?php namespace App\Libraries;

use App\Models\Mybb;

/**
 * Provides View Cell functionality
 * for displaying recent posts from the forums.
 */
class Forums
{
    /**
     * @var Mybb
     */
    protected $mybb;

    protected $forumUrl;

    /**
     * Number of items to display by default.
     *
     * @var int
     */
    protected $limit = 5;

    public function __construct()
    {
        $this->mybb = new Mybb();
        $this->forumUrl = config('App')->mybbForumURL;
    }

    /**
     * Display the latest news from the forums based upon
     * approved staff.
     *
     * @param array $params
     *
     * @return string
     */
    public function news(array $params = [])
    {
        $limit = $params['limit'] ?? $this->limit;

        if ( ! $items = cache('bb_news'))
        {
            $items = $this->mybb->getRecentNews($limit);
            $ttl = 60 * 60 * 4; // time to live s/b 4 hours
            cache()->save('bb_news', $items, $ttl);
        }

        if ( ! empty($items) && is_array($items) && count($items))
        {
            // massage the date formats
            foreach ($items as &$item)
            {
                $item['dateline'] = date('Y.m.d', $item['dateline']);
                $item['mybb_forum_url'] = $this->forumUrl;
                $item['subject'] = strip_tags($item['subject']); // fix #79
            }
            return view('forum/_news', ['news' => $items]);
        }

        return view('forum/_drats');
    }

    // Process the latest posts from the forum
    public function posts($params = [])
    {
        $limit = $params['limit'] ?? $this->limit;

        // get the forum posts
        if ( ! $items = cache('bb_posts'))
        {
            $items = $this->mybb->getRecentPosts($limit);
            $ttl = 60 * 60 * 4; // time to live s/b 4 hours
            cache()->save('bb_posts', $items, $ttl);
        }
        if ( ! empty($items) && is_array($items) && count($items))
        {
            // massage the date formats
            foreach ($items as &$item)
            {
                $item['lastpost'] = date('Y.m.d', $item['lastpost']);
                $item['mybb_forum_url'] = $this->forumUrl;
                $item['subject'] = strip_tags($item['subject']); // fix #79
            }
            return view('forum/_posts', ['posts' => $items]);
        }
        else
            return view('forum/_drats');
    }
}
