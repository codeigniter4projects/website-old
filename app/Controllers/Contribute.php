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
	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

    /**
     * Primary Contribute Page
     */
	public function index()
	{
	    $this->data = $this->gitter->fillHeroes($this->data);
		$this->data['title'] = 'Contribute to CodeIgniter';

		$this->render('contribute');
	}

    /**
     * Present our responsible disclosure page
     */
	public function responsible()
	{
		$this->data['title'] = 'Responsible Disclosure';

		$this->render('responsible');
	}
}
