<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    /**
     * Display the home page.
     */
	public function index()
	{
	    try
        {
            $this->data = $this->gitter->fillReleaseInfo($this->data);
        }
        catch(\Exception $e) {
            $this->data = [];
	    }

		$this->data['title'] = '';
		$this->data['pagetitle'] = lang('Home.pageTitle');
		$this->data['pagebody'] = 'welcome';

		// build the localized "biglinks"
		$this->data['biglinks'] = [
			['icon'	 => 'download',
				'link'	 => empty($this->data['v4name'])
					? 'https://github.com/codeigniter4/framework/releases/'
					: 'https://github.com/codeigniter4/framework/archive/' . $this->data['v4name'] . '.zip',
				'label'	 => lang('Home.block1Title'),
				'text'	 => lang('Home.block1Desc') . $this->data['v4name'] ?? ''],
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

		$gitter = new \App\Libraries\GithubAPI();

		// get the repo stats
		if ( ! $info = cache('repo_info'))
		{
			$info = $gitter->getRepoInfo('codeigniter4', 'CodeIgniter4');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('repo_info', $info, $ttl);
		}

		// Fetch Github info
		if ( ! empty($info))
		{
			$parms = array(
				'html_url'			 => $info['html_url'],
				'stargazers_count'	 => number_format($info['stargazers_count']),
				'forks_count'		 => number_format($info['forks_count'])
			);
			$fragment = view('theme/_github_widget', $parms);
		}
		else
		{
			$fragment = '';
		}
		$this->data['githubWidget'] = $fragment;

		$this->render('welcome');
	}

}
