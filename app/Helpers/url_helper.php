<?php

if (! function_exists('url_is'))
{
    /**
     * Determines if current url path contains
     * the given path. It may contain a wildcard (*)
     * which will allow any valid character.
     *
     * Example:
     *   if (url_is('admin*)) ...
     *
     * @param string $path
     *
     * @return bool
     */
    function url_is(string $path): bool
    {
        // Setup our regex to allow wildcards
        $path = str_replace('*', '(\S)+', $path);
        $currentPath = service('request')->uri->getPath();

        return (bool)preg_match("|^{$path}$|", $currentPath,$matches);
    }
}
