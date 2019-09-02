<?php
namespace App\Controllers;

/**
 * controllers/download.php
 *
 * Tell them how to get the framework
 * 
 * CodeIgniter website, template driven
 */
class Download extends BaseController
{

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "Download CodeIgniter";
		$this->data['pagebody'] = 'download';

		$gitter = new \App\Libraries\GithubAPI();

		$info4 = $gitter->getLatestRelease('codeigniter4', 'framework');
		$this->data['v4name'] = $info4['tag_name'];
		$this->data['v4link'] = $info4['zipball_url'];

		$info3 = $gitter->getLatestTag('bcit-ci', 'codeigniter');
		$this->data['v3name'] = $info3['name'];
		$this->data['v3link'] = $info3['zipball_url'];

		$this->render();
	}

}
