<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Localize implements FilterInterface
{

	protected $remap = ['home', 'download', 'docs', 'community', 'contribute', 'help'];

	public function before(RequestInterface $request)
	{
		$uri = &$request->uri;
		if (count($uri->getSegments()) > 0)
		{
			if (in_array($uri->getSegment(1), $this->remap))
			{
				$uri->setPath('en/' . $uri->getPath());
				return $request;
			}
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response)
	{
		// Do something here
	}

}
