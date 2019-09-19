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
		$this->data['title'] = lang('Contribute.title');
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

		// get the translation heros
		if ( ! $info = $this->cache->get('trans_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter3-translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('trans_heros', $info, $ttl);
		}
		$this->data['trans_heros'] = $this->hitparade($info);

		// get the CodeIgniter4 heros
		if ( ! $info = $this->cache->get('ci4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'CodeIgniter4');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('ci4_heros', $info, $ttl);
		}
		$this->data['ci4_heros'] = $this->hitparade($info);

		// get the translation heros
		if ( ! $info = $this->cache->get('trans4_heros'))
		{
			$info = $gitter->getContributors('codeigniter4', 'translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('trans4_heros', $info, $ttl);
		}
		$this->data['trans4_heros'] = $this->hitparade($info);

		// get the website heros
		if ( ! $info = $this->cache->get('web_heros'))
		{
			$info = $gitter->getContributors('bcit-ci', 'codeigniter-website');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('web_heros', $info, $ttl);
		}
		$this->data['web_heros'] = $this->hitparade($info);

		// and the new website heros
		if ( ! $info = $this->cache->get('new_web_heros'))
		{
			$info = $gitter->getContributors('codeigniter4projects', 'website2');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('new_web_heros', $info, $ttl);
		}
		$this->data['new_web_heros'] = $this->hitparade($info);

		// localized page pieces
		$this->localize('Contribute', 'heading');

		// Introduction block, with nested substitution
		$original = $this->parsedown->text(lang('Contribute.topText'));
		$this->data['topText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// CI4 block, with nested substitution
		$this->localize('Contribute', 'ci4Title');
		$original = $this->parsedown->text(lang('Contribute.ci4Text'));
		$this->data['ci4Text'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// Security block, with nested substitution
		$original = $this->parsedown->text(lang('Contribute.securityText'));
		$this->data['securityText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// not programmer help
		$this->localize('Contribute', 'notcoderSection');
		$original = $this->parsedown->text(lang('Contribute.testerText'));
		$this->data['testerText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->text(lang('Contribute.writerText'));
		$this->data['writerText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->text(lang('Contribute.evangelistText'));
		$this->data['evangelistText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->text(lang('Contribute.moderatorText'));
		$this->data['moderatorText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->text(lang('Contribute.designerText'));
		$this->data['designerText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// programmer help
		$this->localize('Contribute', 'coderSection');
		$original = $this->parsedown->text(lang('Contribute.coderText'));
		$this->data['coderText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->text(lang('Contribute.reviewerText'));
		$this->data['reviewerText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		
		// Acknowledgements
		$this->localize('Contribute', 'ackTitle');
		$this->localize('Contribute', 'ack1');
		$this->localize('Contribute', 'ack2');
		$this->localize('Contribute', 'ack3');
		$this->localize('Contribute', 'ack4');
		$this->localize('Contribute', 'ack5');
		$this->localize('Contribute', 'ack6');
		
		
		$this->render();
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
