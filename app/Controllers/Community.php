<?php namespace App\Controllers;


/**
 * Describe the community.
 *
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Community extends BaseController {

    /**
     * Render the community page.
     */
	public function index()
	{
		$this->data['title'] = 'CodeIgniter Community';

		$this->render('community');
	}

}
