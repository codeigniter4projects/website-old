<?php namespace App\Controllers;

/**
 * controllers/help.php
 *
 * Provide help topics for the footer.
 * 
 * CodeIgniter website, template driven
 *
 */
class Help extends BaseController {

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "Policies";
		$this->data['pagebody'] = 'help';
		$this->render();
	}

	function about()
	{
		$this->data['title'] = "About CodeIgniter";
		$this->data['pagebody'] = 'about';

		$this->data['council'] = [
			['name' => 'Andrey Andreev', 'from' => 'Bulgaria',
				'avatar' => 'andrey.jpeg', 'roles' => 'CodeIgniter 3',
				'description' => '',
				'badges' => [
					array('badge' => 'twitter', 'handle' => 'narfbg'),
					array('badge' => 'github', 'handle' => 'narfbg')
				],
			],
			['name' => 'Ben Edmunds', 'from' => 'USA',
				'avatar' => 'ben.jpg', 'roles' => 'Security',
				'description' => 'CTO of an awesome company you\'ve never heard of. PHP Town Hall podcast co-host. Creator of Ion Auth.',
				'badges' => [
					array('badge' => 'twitter', 'handle' => 'benedmunds'),
					array('badge' => 'github', 'handle' => 'benedmunds')
				],
			],
			['name' => 'Jim Parry', 'from' => 'Canada',
				'avatar' => 'jlp.jpg', 'roles' => 'Project lead, director, fingers in everything',
				'description' => 'Educator, web developer, creator of five awesome kids',
				'badges' => [
					array('badge' => 'twitter', 'handle' => 'codeigniter'),
					array('badge' => 'github', 'handle' => 'jim-parry')
				],
			],
			['name' => 'Kevin Morssink', 'from' => 'Netherlands',
				'avatar' => 'kevin.jpg', 'roles' => 'Security',
				'description' => 'Security consultant',
				'badges' => [],
			],
			['name' => 'Lonnie Ezell', 'from' => 'USA',
				'avatar' => 'lonnie.jpg', 'roles' => 'CodeIgniter 4, director',
				'description' => 'Web Mechanic, Author, Musician, Creator of Bonfire.',
				'badges' => [
					array('badge' => 'github', 'handle' => 'lonnieezell'),
					array('badge' => 'patreon', 'handle' => 'lonnieezell')
				],
			],
			['name' => 'Paul Drewett', 'from' => 'UK',
				'avatar' => 'paul.jpg', 'roles' => 'Director',
				'description' => 'Developer',
				'badges' => [],
			],
		];

		$this->render();
	}

	function legal()
	{
		$this->data['title'] = "The Fine Print";
		$this->data['pagebody'] = 'legal';
		$this->render();
	}

}
