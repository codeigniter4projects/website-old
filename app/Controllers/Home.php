<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{

	function index()
	{
		$this->mybb = new \App\Models\Mybb();


		$this->data['title'] = '';
		$this->data['pagetitle'] = lang('Home.pageTitle');
		$this->data['pagebody'] = 'welcome';

		$this->data['biglinks'] = array(
			array('icon'	 => 'download', 'link'	 => 'https://github.com/bcit-ci/CodeIgniter/archive/' . $this->config->stableVersion . '.zip',
				'label'	 => 'Download', 'text'	 => 'The latest is Version ' . $this->config->stableVersion),
			array('icon'	 => 'book', 'link'	 => '/user_guide/index.html',
				'label'	 => 'Read the Manual', 'text'	 => 'Clear documentation'),
			array('icon'	 => 'user', 'link'	 => 'http://forum.codeigniter.com',
				'label'	 => 'View the Forums', 'text'	 => 'Get Support & Discuss Things'),
			array('icon'	 => 'random', 'link'	 => 'https://github.com/bcit-ci/CodeIgniter',
				'label'	 => 'On GitHub', 'text'	 => 'Fix Bugs or Add Features'),
		);

		$this->data['features1'] = array(
			array('icon'	 => 'star-empty', 'label'	 => 'Framework with a small footprint',
				'text'	 => 'CodeIgniter 3 has a 2MB download, including the user guide. ' .
				'CodeIgniter 4 is a 100MB download, plus 6MB for the user guide.'),
			array('icon'	 => 'send', 'label'	 => 'Simple solutions over complexity',
				'text'	 => 'CodeIgniter encourages MVC, but does not force it on you.'),
			array('icon'	 => 'book', 'label'	 => 'Clear documentation',
				'text'	 => 'The User Guide contains an introduction, tutorial, a number of "how to" guides, ' .
				'and then reference documentation for the components that make up the framework.'),
		);

		$this->data['features2'] = array(
			array('icon'	 => 'dashboard', 'label'	 => 'Exceptional performance',
				'text'	 => 'CodeIgniter consistently outperfo'
				. 'rms most of its competitors.'),
			array('icon'	 => 'lock', 'label'	 => 'Strong Security',
				'text'	 => 'We take security seriously, with built-in protection against CSRF and XSS attacks. '.
				'Version 4 adds context-sensitive escaping and CSP'),
			array('icon'	 => 'list-alt', 'label'	 => 'Nearly zero configuration',
				'text'	 => ' Much of the CodeIgniter configuration is done by convention, for instance putting models in a "models" folder. There are still a number of configuration options available, through scripts in the "config" folder.'),
		);

		// Grab our forum information
		$this->data['news'] = $this->forum_news();
		$this->data['posts'] = $this->forum_posts();

		$gitter = new \App\Libraries\GithubAPI();
		$cache = \Config\Services::cache();

		// get the repo stats
		if ( ! $info = $cache->get('repo_info'))
		{
			$info = $gitter->getRepoInfo('bcit-ci', 'CodeIgniter');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$cache->save('repo_info', $info, $ttl);
		}

		// Fetch Github info
		if ( ! empty($info))
		{
			$parms = array(
				'html_url'			 => $info['html_url'],
				'stargazers_count'	 => number_format($info['stargazers_count']),
				'forks_count'		 => number_format($info['forks_count'])
			);
			$fragment = $this->parser->setData($parms)->render('theme/_github_widget');
		}
		else
		{
			$fragment = '';
		}
		$this->data['github_widget'] = $fragment;

		$this->render();
	}

	// Process the latest news from the forum
	function forum_news()
	{
		// get the forum news
		if ( ! $items = $this->cache->get('bb_news'))
		{
			$items = $this->mybb->getRecentNews(5);
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('bb_news', $items, $ttl);
		}

		if ( ! empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['dateline'] = date('Y.m.d', $item['dateline']);
				$item['mybb_forum_url'] = $this->config->mybbForumURL;
				// escape the subject
				$item['subject'] = htmlentities($item['subject']);
				$item['subject'] = strip_tags($item['subject']); // fix #79
			}
			return $this->parser->setData(['news' => $items], 'raw')->render('forum/_news');
		}
		else
			return view('forum/_drats');
	}

	// Process the latest posts from the forum
	function forum_posts()
	{
		// get the forum posts
		if ( ! $items = $this->cache->get('bb_posts'))
		{
			$items = $this->mybb->getRecentPosts(5);
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('bb_posts', $items, $ttl);
		}
		if ( ! empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['lastpost'] = date('Y.m.d', $item['lastpost']);
				$item['mybb_forum_url'] = $this->config->mybbForumURL;
				// escape the subject
				$item['subject'] = htmlentities($item['subject']);
				$item['subject'] = strip_tags($item['subject']); // fix #79
			}
			return $this->parser->setData(array('posts' => $items), 'raw')->render('forum/_posts');
		}
		else
			return view('forum/_drats');
	}

}
