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

	protected $data = []; // parameters for view components
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

		$this->data = [];
		$this->config = config('App');
		$this->data['mybb_forum_url'] = $this->config->mybbForumURL;
		$this->errors = [];
		$this->parsedown = new \Parsedown();

		// URL without the locale
		$this->realUrl = trim('/' . $this->request->uri->getSegment(2) . '/' . $this->request->uri->getSegment(3), '/ ');
		if (empty($this->realUrl))
			$this->realUrl = 'home';

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

		$info3 = $gitter->getLatestTag('bcit-ci', 'CodeIgniter');
		$this->data['v3name'] = $info3['name'];
		$this->data['v3link'] = $info3['zipball_url'];

		$info5 = $gitter->getLatestRelease('bcit-ci', 'codeigniter3-translations');
		$this->data['v3trans'] = $info5['tag_name'];
	}

    /**
     * Render this page
     *
     * @param string $view The view file to render
     * @param array  $data
     */
	protected function render(string $view, array $data = [])
	{
        $this->buildNavbars();
	    $data = array_merge($data, $this->data);

		if ( ! isset($data['pagetitle']))
        {
            $data['pagetitle'] = $data['title'];
        }

		$data['footerline'] = $this->parsedown->line(lang('Site.footerLine'));

		// title block, jumbo for the homepage
//		$layout = empty($this->data['title']) ? 'jumbotitle' : 'title';
//		$this->data['titling'] = view('theme/' . $layout, $this->data);

		// finally, assemble the browser page!
		echo view($view, $data);
	}

	/**
	 * copy a localized message to a same-named data property for rendering
	 */
	protected function localize($page, $key)
	{
		$this->data[$key] = lang($page . '.' . $key);
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
			$menuitem['link'] = $menuitem['link'];
			$menuitem['name'] = lang('Site.' . $menuitem['name']); // localize
		}
		$this->data['menubar'] = view('theme/menubar', $choices);

		// Massage the footer menu
		$choices = $this->config->footerChoices;
		foreach ($choices['menudata'] as &$menuitem)
		{
			$menuitem['active'] = (ltrim($menuitem['link'], '/ ') == $this->realUrl) ? 'active' : '';
			$menuitem['link'] = $menuitem['link'];
			$menuitem['name'] = lang('Site.' . $menuitem['name']); // localize
		}
		$this->data['footerbar'] = view('theme/footerbar', $choices);
	}

}
