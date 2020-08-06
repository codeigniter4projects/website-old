<?php namespace App\Entities;

use CodeIgniter\Entity;

/**
 * Class Post
 *
 * Represents a single blog post,
 * and provides utility methods to
 * simplify working with them in views.
 *
 * @package App\Entities
 */
class Post extends Entity
{
    /**
     * Returns the link to the page.
     */
    public function link()
    {
        return site_url('/news/'. $this->slug);
    }

    /**
     * Renders the page
     */
    public function html()
    {

    }

    /**
     * Returns all tags for this post.
     *
     * @return array|string[]
     */
    protected function getTags(): array
    {
        if (empty($this->attributes['tags'])) {
            return [];
        }

        $tags = explode(',', $this->attributes['tags']);
        $tags = array_map(function($item) {
            return trim($item);
        }, $tags);

        return $tags;
    }
}
