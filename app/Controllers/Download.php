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
	    $data = $this->data;
	    $data['title'] = 'Download CodeIgniter';

		$this->render('download', $data);
	}

}
