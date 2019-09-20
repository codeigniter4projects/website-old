<?php
/**
 * Download page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DownloadText = <<<'EOS'
CodeIgniter 4 is the upcoming version of the framework, intended for use with PHP7.2.

Development is underway, and the current version is {v4name}.

You *could* download the V4 framework using the button below, but we encourage you 
to check the [Installation section](https://codeigniter4.github.io/userguide/installation/index.html) 
of the User Guide, to choose from several different ways you can install the framework :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="{v4link}" class="nav-link btn-success" title="Download the latest version">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://forum.codeigniter.com/forum-28.html" class="nav-link btn-success" title="Join the discussion on our forum!">
			<i class="fa fa-comments"></i> {discussButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://github.com/codeigniter4/CodeIgniter4" class="nav-link btn-success" title="View CodeIgniter 4 on Github">
			<i class="fa fa-github-square"></i> {sourcesButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/translations" class="nav-link btn-success" title="System message translations">
			<i class="fa fa-globe"></i> {translationsButton}
		</a>
	</li>
</ul>
EOS;

$ci3DownloadText = <<<'EOS'
CodeIgniter {v3name} is the current version of the framework, intended for use with PHP 5.6+.

There have been a number of refinements since version 2, notably with the database, 
session handling and encryption. Development of this version is ongoing.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="{v3link}" class="nav-link btn-primary" title="Download CodeIgniter 3">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/codeigniter3-translations/archive/{v3trans}.zip" class="nav-link btn-primary" title="Download System Message Translations">
			<i class="glyphicon glyphicon-save"></i> {translationsButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/CodeIgniter" class="nav-link btn-primary" title="View CodeIgniter 3 on Github">
			<i class="fa fa-github-square"></i> {sourcesButton}
		</a>
	</li>
</ul>
EOS;

$ci2DownloadText = <<<'EOS'
CodeIgniter 2.2.6 is the legacy version of the framework.

The 2.x branch was originally released January 2011, and the last version (2.2.6) came out in October, 2015.

CodeIgniter 2 has reached its end-of-life for support and updates, as of October 31, 2015. No further updates are planned.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/CodeIgniter/archive/2.2.6.zip" class="nav-link btn-primary" title="Download CodeIgniter 2">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
</ul>
EOS;

return [
	'title'				 => 'Download CodeIgniter',
	'heading'			 => 'CodeIgniter comes in three flavors: CodeIgniter 3 (current), CodeIgniter 4 (future) and CodeIgniter 2 (legacy)',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4DownloadText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'			 => $ci3DownloadText,
	'ci2Title'		 => 'CodeIgniter 2',
	'ci2Text'			 => $ci2DownloadText,
	'downloadButton'	 => 'Download',
	'discussButton'		 => 'Discuss',
	'sourcesButton'		 => 'Sources',
	'translationsButton' => 'Translations'
];
