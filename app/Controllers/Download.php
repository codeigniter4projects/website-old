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
    /**
     * Display the Download page.
     */
	public function index()
	{
        $this->data = $this->gitter->fillReleaseInfo($this->data);
	    $this->data['title'] = 'Download CodeIgniter';

		$this->render('download');
	}

}
