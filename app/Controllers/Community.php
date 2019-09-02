<?php namespace App\Controllers;


/**
 * Describe the community.
 * 
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Community extends BaseController {

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter Community";
		$this->data['pagebody'] = 'community';
		$this->render();
	}

}
