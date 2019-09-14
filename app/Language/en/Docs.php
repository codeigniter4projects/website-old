<?php
/**
 * Docs page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DocsText = <<<'EOS'
CodeIgniter 4 is the upcoming version of the framework, licensed under the 
[MIT License](https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/userguide/" 
		   class="nav-link btn-success" title="Read it online">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/userguide/archive/latest" class="nav-link btn-primary" title="Download the User Guide">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/api/" 
		   class="nav-link btn-success" title="Read them online">
			<i class="glyphicon glyphicon-book"></i> {apidocsButton}
		</a>
	</li>
</ul>

EOS;

$ci3DocsText = <<<'EOS'
CodeIgniter 3 is the current version of the framework, licensed under the 
[MIT License](http://cisite.local/user_guide/license.html).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="/user_guide/index.html" 
		   class="nav-link btn-primary" title="Read it online">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter-{v3name}-userguide.zip" class="nav-link btn-primary" title="Download the User Guide">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter User Guide {v3name}.epub" 
		   class="nav-link btn-primary" title="Read them online">
			<i class="glyphicon glyphicon-save"></i> {epubButton}
		</a>
	</li>
</ul>

EOS;

return [
	'title'			 => 'CodeIgniter Documentation',
	'heading'		 => 'The primary documentation for CodeIgniter is its User Guide.',
	'subheading'	 => 'The User Guide contains an introduction, tutorial, a number of "how to" guides, and then reference documentation for the components that make up the framework.',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'		 => $ci4DocsText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'		 => $ci3DocsText,
	'onlineButton'	 => 'Online UG',
	'offlineButton'	 => 'Offline UG',
	'apidocsButton'	 => 'API Docs',
	'epubButton'	 => 'epub UG'
];
