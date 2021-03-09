# CodeIgniter Website

This is the official informational website for the CodeIgniter project.

The website has been open-sourced in the interest of transparency.
We welcome issues and pull requests, to handle corrections.  
We will be a bit more reserved with the content :-/

The project is governed by the CodeIgniter Foundation, and we have a working group
in place to handle the website content and design. 
Style and structure changes will be addressed by this group.

## Implementation

The site has been built with CodeIgniter 4, and is meant to be an example
of "good" programming style, although definitely not
the only way to do things. 

Some of the programming design decisions reflected:

-   The `public` folder is the intended document root for the webapp.
-   The architecture adheres more to the "model-view-adapter" convention,
    where the view is unaware of the source of data and the model is unaware of
    how any data might be presented. The controllers are go-betweens.
-   A "master template" lets each controller focus 
    only with building its part of a webpage.
-   A base controller takes care of assembling finished pages, using the 
    master template.
-   Using the template parser eliminates PHP code from
    the views, where possible.
-   Mock data for the recent news and most recently active threads, means
    that the website can be tested locally, without needing access to 
    the live forum database.
-   View fragments are used to style single "records" on their own,
    improving cohesion.

## Installation

Use these steps to create a local installation for development and testing.

1. Clone the repo: `git clone https://github.com/codeigniter4projects/website2`
2. Work in the repo directory: `cd website2`
3.  Make sure the **writable** folder is accessible: `chmod -R 777 writable`
4. Install dependencies: `composer install`
5. Create your **.env** file: `cp env .env`
6. Edit **.env** and set at least the following:
	* `CI_ENVIRONMENT = development`
	* `MOCK_MYBB = true`
	* `app.baseURL = 'http://localhost:8080/'`

At this point you should have a usable version of the current code! Try launching it locally:
1. From the repo directory start serving the website: `php spark serve`
2. In your web browser of choice navigate to the local URL: `http://localhost:8080`

> Note: The example commands above are for Linux-based systems. You may need to adjust for your operating system.

## Resources

-  [User Guide](https://codeigniter4.github.io/userguide/)
-  [Community Forums](https://forum.codeigniter.com/)
-  [Community Slack Channel](https://codeigniterchat.slack.com)

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the `HTTP\CURLRequest` library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
