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
    /**
     * Displayt the Docs page.
     */
	public function index()
	{
        $this->data = $this->gitter->fillReleaseInfo($this->data);
		$this->data['title'] = 'CodeIgniter Documentation';

		$this->render('docs');
	}

}
