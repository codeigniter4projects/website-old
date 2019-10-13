<?php
/**
 * Docs page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DocsText = <<<'EOS'
CodeIgniter 4 est la version à venir du framework, concédé sous licence
[MIT License](https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/userguide/" 
		   class="nav-link btn-success" title="Lisez-le en ligne">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/userguide/archive/{v4name}.zip" class="nav-link btn-primary" title="Télécharger le guide de l'utilisateur">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/api/" 
		   class="nav-link btn-success" title="Lisez-les en ligne">
			<i class="glyphicon glyphicon-book"></i> {apidocsButton}
		</a>
	</li>
</ul>

EOS;

$ci3DocsText = <<<'EOS'
CodeIgniter 3 est la version actuelle du framework, concédé sous licence
[Licence MIT](http://cisite.local/user_guide/license.html).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="/user_guide/index.html" 
		   class="nav-link btn-primary" title="Lisez-les en ligne">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter-{v3name}-userguide.zip" class="nav-link btn-primary" title="Télécharger le guide de l'utilisateur">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter User Guide {v3name}.epub" 
		   class="nav-link btn-primary" title="Lisez-les en ligne">
			<i class="glyphicon glyphicon-save"></i> {epubButton}
		</a>
	</li>
</ul>

EOS;

return [
	'title'			 => 'Documentation CodeIgniter',
	'heading'		 => 'La documentation principale de CodeIgniter est son Guide de l\'utilisateur',
	'subheading'	 => 'Le Guide de l\'utilisateur contient une introduction, un didacticiel, un certain nombre de guides \"Comment faire\", puis une documentation de référence pour les composants qui constituent le cadre.',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'		 => $ci4DocsText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'		 => $ci3DocsText,
	'onlineButton'	 => 'Online UG',
	'offlineButton'	 => 'Offline UG',
	'apidocsButton'	 => 'API Docs',
	'epubButton'	 => 'epub UG'
];