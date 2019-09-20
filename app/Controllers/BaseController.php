<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 * 
 * For security be sure to declare any new methods as protected or private.
 * 
 * @package CodeIgniter
 */
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use Config\Services;
use Psr\Log\LoggerInterface;

class BaseController extends Controller
{

	protected $data = array(); // parameters for view components
	protected $id;   // identifier for our content

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Initialization.
	 *
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->config = new \Config\App();
		$this->data = array();
		$this->data['mybb_forum_url'] = $this->config->mybbForumURL;
		$this->errors = array();
		$this->data['locale'] = $request->getLocale();
		$this->parsedown = new \Parsedown();

		// URL without the locale
		$this->realUrl = trim('/' . $this->request->uri->getSegment(2) . '/' . $this->request->uri->getSegment(3), '/ ');
		if (empty($this->realUrl))
			$this->realUrl = 'home';

		helper('url');

		$this->parser = Services::parser();
		$this->cache = Services::cache();

		$this->response = new Response($this->config);

		$this->response->setStatusCode(Response::HTTP_OK);
		$this->response->setHeader('Content-type', 'text/html');
		$this->response->noCache();


		// Prevent some security threats, per Kevin
		// Turn on IE8-IE9 XSS prevention tools
		$this->response->setHeader('X-XSS-Protection', '1; mode=block');
		// Don't allow any pages to be framed - Defends against CSRF
		$this->response->setHeader('X-Frame-Options', 'DENY');
		// prevent mime based attacks
		$this->response->setHeader('X-Content-Type-Options', 'nosniff');

		$gitter = new \App\Libraries\GithubAPI();

		$info4 = $gitter->getLatestRelease('codeigniter4', 'framework');
		$this->data['v4name'] = $info4['tag_name'];
		$this->data['v4link'] = $info4['zipball_url'];

		$info3 = $gitter->getLatestTag('bcit-ci', 'codeigniter');
		$this->data['v3name'] = $info3['name'];
		$this->data['v3link'] = $info3['zipball_url'];

		$info5 = $gitter->getLatestRelease('bcit-ci', 'codeigniter3-translations');
		$this->data['v3trans'] = $info5['tag_name'];
	}

	/**
	 * Render this page
	 */
	protected function render()
	{
		if ( ! isset($this->data['pagetitle']))
			$this->data['pagetitle'] = $this->data['title'];
		$this->data['footerline'] = $this->parsedown->line(lang('Site.footerLine'));

		$this->buildNavbars();
		$this->data['localizer'] = $this->buildLocaleSelector();

		$this->data['content'] = $this->parser->setData($this->data, 'raw')
				->render($this->data['pagebody']);

		// title block, jumbo for the homepage
		$layout = empty($this->data['title']) ? 'jumbotitle' : 'title';
		$this->data['titling'] = $this->parser->setData($this->data, 'raw')
				->render('theme/' . $layout);

		// finally, assemble the browser page!
		$output = $this->parser->setData($this->data, 'raw')
				->render('theme/template');

		// Sends the output to the browser
		$this->response->setBody($output);
		$this->response->send();
	}

	/**
	 * copy a localized message to a same-named data property for rendering
	 */
	protected function localize($page, $key)
	{
		$this->data[$key] = lang($page . '.' . $key);
	}

	/**
	 * Build locale selector, with links back to current page but possibly with different locale
	 */
	private function buildLocaleSelector()
	{
		$choices = $this->config->supportedLocales;
		$menu = [];
		foreach ($choices as $name)
		{
			$menuitem = [];
			$menuitem['name'] = $name;
			$menuitem['link'] = $name . '/' . $this->realUrl;
			$menuitem['active'] = ($name == $this->data['locale']) ? 'active' : '';
			$menu[] = $menuitem;
		}
		$localeData = ['zlocales' => $menu, 'locale' => $this->data['locale']];
		return $this->parser->setData($localeData, 'raw')
						->render('theme/localizer');
	}

	/**
	 * Build the localized top & bottom navbars
	 */
	private function buildNavbars()
	{
		// Massage the menubar
		$choices = $this->config->menuChoices;
		foreach ($choices['menudata'] as &$menuitem)
		{
			$menuitem['active'] = (ltrim($menuitem['link'], '/ ') == $this->realUrl) ? 'active' : '';
			$menuitem['link'] = '/' . $this->data['locale'] . $menuitem['link'];
			$menuitem['name'] = lang('Site.' . $menuitem['name']); // localize
		}
		$this->data['menubar'] = $this->parser->setData($choices, 'raw')
				->render('theme/menubar');

		// Massage the footer menu
		$choices = $this->config->footerChoices;
		foreach ($choices['menudata'] as &$menuitem)
		{
			$menuitem['active'] = (ltrim($menuitem['link'], '/ ') == $this->realUrl) ? 'active' : '';
			$menuitem['link'] = '/' . $this->data['locale'] . $menuitem['link'];
			$menuitem['name'] = lang('Site.' . $menuitem['name']); // localize
		}
		$this->data['footerbar'] = $this->parser->setData($choices, 'raw')
				->render('theme/footerbar');
	}

}
