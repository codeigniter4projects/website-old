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
		$this->data['title'] = lang('Docs.title');
		$this->data['pagebody'] = 'docs';

		$gitter = new \App\Libraries\GithubAPI();

		$info4 = $gitter->getLatestRelease('codeigniter4', 'framework');
		$this->data['v4name'] = $info4['tag_name'];
		$this->data['v4link'] = $info4['zipball_url'];

		$info3 = $gitter->getLatestTag('bcit-ci', 'codeigniter');
		$this->data['v3name'] = $info3['name'];
		$this->data['v3link'] = $info3['zipball_url'];

		// localized page pieces
		$this->localize('Docs', 'heading');
		$this->localize('Docs', 'subheading');
		$this->localize('Docs', 'onlineButton');
		$this->localize('Docs', 'offlineButton');
		$this->localize('Docs', 'apidocsButton');
		$this->localize('Docs', 'epubButton');

		// CI4 block, with nested substitution
		$this->localize('Download', 'ci4Title');
		$original = $this->parsedown->text(lang('Docs.ci4Text'));
		$this->data['ci4Text'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// CI3 block, with nested substitution
		$this->localize('Download', 'ci3Title');
		$original = $this->parsedown->text(lang('Docs.ci3Text'));
		$this->data['ci3Text'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		$this->render();
	}

}
