<?php namespace App\Exceptions;

class BlogException extends \Exception
{
    public static function forInvalidContent()
    {
        return new static(lang('Blog.invalidContent'));
    }
}
