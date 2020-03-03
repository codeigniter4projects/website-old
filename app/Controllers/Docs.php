<?php
namespace App\Controllers;

/**
 * controllers/docs.php
 *
 * Render the current version of the user guide.
 *
 * CodeIgniter website, template driven
 *
 */
class Docs extends BaseController
{

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = 'CodeIgniter Documentation';

		$this->render('docs', $this->data);
	}

}
