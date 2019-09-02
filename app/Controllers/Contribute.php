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
		$this->data['title'] = "Contribute to CodeIgniter";
		$this->data['pagebody'] = 'contribute';
		$gitter = new \App\Libraries\GithubAPI();

		// get the framework heros
		if ( ! $info = $this->cache->get('fw_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'CodeIgniter');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('fw_heros', $info, $ttl);
		}
		$this->data['fw_heros'] = $this->hitparade($info);

		// get the CodeIgniter4 heros
		if ( ! $info = $this->cache->get('ci4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'CodeIgniter4');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('ci4_heros', $info, $ttl);
		}
		$this->data['ci4_heros'] = $this->hitparade($info);

		// get the website heros
		if ( ! $info = $this->cache->get('web_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter-website');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('web_heros', $info, $ttl);
		}
		$this->data['web_heros'] = $this->hitparade($info);

		// get the translation heros
		if ( ! $info = $this->cache->get('trans_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter3-translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('trans_heros', $info, $ttl);
		}
		$this->data['trans_heros'] = $this->hitparade($info);

		// get the translation heros
		if ( ! $info = $this->cache->get('trans4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('trans4_heros', $info, $ttl);
		}
		$this->data['trans4_heros'] = $this->hitparade($info);

		$this->render();
	}

	// present our responsible disclosure page
	function responsible()
	{
		$this->data['title'] = "Responsible Disclosure";
		$this->data['pagebody'] = 'responsible';

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
			return $this->parser->setData(['heros' => $heros], 'raw')->render('theme/_heros');
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
