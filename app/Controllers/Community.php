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
		$this->data['title'] = lang('Community.title');
		$this->data['pagebody'] = 'community';
		
		// localized page pieces
		$this->localize('Community', 'heading');
		$this->localize('Community', 'forumButton');
		$this->localize('Community', 'slackButton');
		$this->localize('Community', 'ci4Button');
		$this->localize('Community', 'ci3Button');

		// Security block, with nested substitution
		$original = $this->parsedown->line(lang('Community.securityText'));
		$this->data['securityText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);

		// Forum block, with nested substitution
		$this->localize('Community', 'forumTitle');
		$original = $this->parsedown->line(lang('Community.forumText'));
		$this->data['forumText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		
		// Slack block, with nested substitution
		$this->localize('Community', 'slackTitle');
		$original = $this->parsedown->line(lang('Community.slackText'));
		$this->data['slackText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		
		// Github block, with nested substitution
		$this->localize('Community', 'githubTitle');
		$original = $this->parsedown->line(lang('Community.githubText'));
		$this->data['githubText'] = $this->parser->setData($this->data, 'raw')
				->renderString($original);
		
		$this->render();
	}

}
