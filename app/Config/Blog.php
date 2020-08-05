<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Blog extends BaseConfig
{
    public $contentPath = ROOTPATH .'content/blog/';

    public $perPage = 10;
}
