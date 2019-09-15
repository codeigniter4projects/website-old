<?php
namespace App\Controllers;

/**
 * controllers/help.php
 *
 * Provide help topics for the footer.
 * 
 * CodeIgniter website, template driven
 *
 */
class Help extends BaseController
{

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = lang('Policies.title');
		$this->data['pagebody'] = 'help';

		$this->localize('Policies', 'termsTitle');
		$original = $this->parsedown->text(lang('Policies.termsText'));
		$this->data['termsText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Policies', 'privacyTitle');
		$original = $this->parsedown->text(lang('Policies.privacyText'));
		$this->data['privacyText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Policies', 'dataTitle');
		$original = $this->parsedown->text(lang('Policies.dataText'));
		$this->data['dataText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->render();
	}

	function about()
	{
		$this->data['title'] = lang('About.title');
		$this->data['pagebody'] = 'about';

		$this->localize('About', 'wiseTitle');
		$original = $this->parsedown->text(lang('About.wiseText'));
		$this->data['wiseText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('About', 'ackTitle');
		$original = $this->parsedown->text(lang('About.ackText'));
		$this->data['ackText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// The "wise men" data has not been localized ... unsure of best treatment yet
		$this->data['council'] = [
			['name'			 => 'Andrey Andreev', 'from'			 => 'Bulgaria',
				'avatar'		 => 'andrey.jpeg', 'roles'			 => 'CodeIgniter 3',
				'description'	 => '',
				'badges'		 => [
					array('badge' => 'twitter', 'handle' => 'narfbg'),
					array('badge' => 'github', 'handle' => 'narfbg')
				],
			],
			['name'			 => 'Ben Edmunds', 'from'			 => 'USA',
				'avatar'		 => 'ben.jpg', 'roles'			 => 'Security',
				'description'	 => 'CTO of an awesome company you\'ve never heard of. PHP Town Hall podcast co-host. Creator of Ion Auth.',
				'badges'		 => [
					array('badge' => 'twitter', 'handle' => 'benedmunds'),
					array('badge' => 'github', 'handle' => 'benedmunds')
				],
			],
			['name'			 => 'Jim Parry', 'from'			 => 'Canada',
				'avatar'		 => 'jlp.jpg', 'roles'			 => 'Project lead, director, fingers in everything',
				'description'	 => 'Educator, web developer, creator of five awesome kids',
				'badges'		 => [
					array('badge' => 'twitter', 'handle' => 'codeigniter'),
					array('badge' => 'github', 'handle' => 'jim-parry')
				],
			],
			['name'			 => 'Kevin Morssink', 'from'			 => 'Netherlands',
				'avatar'		 => 'kevin.jpg', 'roles'			 => 'Security',
				'description'	 => 'Security consultant',
				'badges'		 => [],
			],
			['name'			 => 'Lonnie Ezell', 'from'			 => 'USA',
				'avatar'		 => 'lonnie.jpg', 'roles'			 => 'CodeIgniter 4, director',
				'description'	 => 'Web Mechanic, Author, Musician, Creator of Bonfire.',
				'badges'		 => [
					array('badge' => 'github', 'handle' => 'lonnieezell'),
					array('badge' => 'patreon', 'handle' => 'lonnieezell')
				],
			],
			['name'			 => 'Paul Drewett', 'from'			 => 'UK',
				'avatar'		 => 'paul.jpg', 'roles'			 => 'Director',
				'description'	 => 'Developer',
				'badges'		 => [],
			],
		];

		$this->render();
	}

	function legal()
	{
		$this->data['title'] = lang('Legal.title');
		$this->data['pagebody'] = 'legal';

		// setup the asset links
		$original = $this->parsedown->line(lang('Legal.marksLink'));
		$this->data['marksLink'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		$original = $this->parsedown->line(lang('Legal.logoLink'));
		$this->data['logoLink'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Legal', 'marksTitle');
		$original = $this->parsedown->text(lang('Legal.marksText'));
		$this->data['marksText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Legal', 'logoTitle');
		$original = $this->parsedown->text(lang('Legal.logoText'));
		$this->data['logoText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Legal', 'thirdPartyTitle');
		$original = $this->parsedown->text(lang('Legal.thirdPartyText'));
		$this->data['thirdPartyText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->localize('Legal', 'externalLinksTitle');
		$original = $this->parsedown->text(lang('Legal.externalLinksText'));
		$this->data['externalLinksText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$original = $this->parsedown->text(lang('Legal.endText'));
		$this->data['endText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->render();
	}

}
