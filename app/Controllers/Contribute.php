<?php
namespace App\Controllers;

/**
 * controllers/contribute.php
 *
 * Explain how to contribute
 *
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Contribute extends BaseController
{

	private $astar = '★';

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = 'Contribute to CodeIgniter';
		$gitter = new \App\Libraries\GithubAPI();

		// get the framework heros
		if ( ! $info = cache('fw_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'CodeIgniter');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('fw_heros', $info, $ttl);
		}
		$this->data['fw_heros'] = $this->hitparade($info);

		// get the translation heros
		if ( ! $info = cache('trans_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter3-translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('trans_heros', $info, $ttl);
		}
		$this->data['trans_heros'] = $this->hitparade($info);

		// get the CodeIgniter4 heros
		if ( ! $info = cache('ci4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'CodeIgniter4');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('ci4_heros', $info, $ttl);
		}
		$this->data['ci4_heros'] = $this->hitparade($info);

		// get the translation heros
		if ( ! $info = cache('trans4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('trans4_heros', $info, $ttl);
		}
		$this->data['trans4_heros'] = $this->hitparade($info);

		// get the website heros
		if ( ! $info = cache('web_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter-website');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('web_heros', $info, $ttl);
		}
		$this->data['web_heros'] = $this->hitparade($info);

		// and the new website heros
		if ( ! $info = cache('new_web_heros'))
		{
			$info = $gitter->getContributors('codeigniter4projects', 'website2');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			cache()->save('new_web_heros', $info, $ttl);
		}
		$this->data['new_web_heros'] = $this->hitparade($info);

		$this->render('contribute', $this->data);
	}

	// present our responsible disclosure page
	function responsible()
	{
		$this->data['title'] = lang('Disclosure.title');
		$this->data['pagebody'] = 'responsible';

		// localized page pieces
		$this->localize('Disclosure', 'heading');
		$this->localize('Disclosure', 'subheading');

		$original = $this->parsedown->line(lang('Disclosure.theText'));
		$this->data['theText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->render();
	}

	// build the hit parade for this group of contributors
	function hitparade($info)
	{
		$heros = [];
		if ( ! empty($info))
		{
			foreach ($info as $val)
			{
				$heros[] = [
					'avatar' => $val['avatar_url'],
					'name'	 => $val['login'],
					'url'	 => $val['html_url'],
					'stars'	 => $this->stars($val['contributions'])
				];
			}
			return view('theme/_heros', ['heros' => $heros]);
		}
		else
			return '';
	}

	// determine how many stars a contributor earns
	function stars($contributions)
	{
		$result = $this->astar;
		while ($contributions > 9)
		{
			$result .= $this->astar;
			$contributions /= 10;
		}
		return $result;
	}

}
