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

		// localized jumbotron
		$this->localize('Home', 'jumboTitle');
		$this->localize('Home', 'jumboMessage');

		// localized subheadings
		$this->localize('Home', 'recent');
		$this->localize('Home', 'threads');
		$this->localize('Home', 'why');

		// build the localized "biglinks" 
		$this->data['biglinks'] = [
			['icon'	 => 'download',
				'link'	 => 'https://github.com/bcit-ci/CodeIgniter/archive/' . $this->data['v3name'] . '.zip',
				'label'	 => lang('Home.block1Title'),
				'text'	 => lang('Home.block1Desc') . $this->data['v3name']],
			['icon'	 => 'book',
				'link'	 => '/user_guide/index.html',
				'label'	 => lang('Home.block2Title'),
				'text'	 => lang('Home.block2Desc')],
			['icon'	 => 'user',
				'link'	 => 'http://forum.codeigniter.com',
				'label'	 => lang('Home.block3Title'),
				'text'	 => lang('Home.block3Desc')],
			['icon'	 => 'random',
				'link'	 => 'https://github.com/bcit-ci/CodeIgniter',
				'label'	 => lang('Home.block4Title'),
				'text'	 => lang('Home.block4Desc')],
		];

		// build the localized left-column of features
		$this->data['features1'] = [
			['icon'	 => 'star-empty',
				'label'	 => lang('Home.blurb1Title'),
				'text'	 => lang('Home.blurb1Desc')],
			['icon'	 => 'send',
				'label'	 => lang('Home.blurb2Title'),
				'text'	 => lang('Home.blurb2Desc')],
			['icon'	 => 'book',
				'label'	 => lang('Home.blurb3Title'),
				'text'	 => lang('Home.blurb4Desc')],
		];

		// build the localized right-column of features
		$this->data['features2'] = [
			['icon'	 => 'dashboard',
				'label'	 => lang('Home.blurb4Title'),
				'text'	 => lang('Home.blurb4Desc')],
			['icon'	 => 'lock',
				'label'	 => lang('Home.blurb5Title'),
				'text'	 => lang('Home.blurb5Desc')],
			['icon'	 => 'list-alt',
				'label'	 => lang('Home.blurb6Title'),
				'text'	 => lang('Home.blurb6Desc')],
		];

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
