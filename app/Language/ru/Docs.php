<?php
/**
 * Docs page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DocsText = <<<'EOS'
CodeIgniter 4 является следующей версией фреймворка, лицензированной под [лицензией MIT](https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/userguide/" 
		   class="nav-link btn-success" title="Читать онлайн">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/userguide/archive/{v4name}.zip" class="nav-link btn-primary" title="Скачать руководство пользователя">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/api/" 
		   class="nav-link btn-success" title="Читать онлайн">
			<i class="glyphicon glyphicon-book"></i> {apidocsButton}
		</a>
	</li>
</ul>

EOS;

$ci3DocsText = <<<'EOS'
CodeIgniter 3 - это текущая версия фреймворка, лицензированная под
[лицензией MIT](http://cisite.local/user_guide/license.html).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="/user_guide/index.html" 
		   class="nav-link btn-primary" title="Читать онлайн">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter-{v3name}-userguide.zip" class="nav-link btn-primary" title="Скачать руководство пользователя">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter User Guide {v3name}.epub" 
		   class="nav-link btn-primary" title="Читать онлайн">
			<i class="glyphicon glyphicon-save"></i> {epubButton}
		</a>
	</li>
</ul>

EOS;

return [
	'title'			 => 'Документация CodeIgniter',
	'heading'		 => 'Основная документация для CodeIgniter - это руководство пользователя.',
	'subheading'	 => 'Руководство пользователя содержит введение, учебное пособие, ряд руководств по «использованию», а затем справочную документацию для компонентов, составляющих основу.',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'		 => $ci4DocsText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'		 => $ci3DocsText,
	'onlineButton'	 => 'Онлайн документация',
	'offlineButton'	 => 'Оффлайн документация',
	'apidocsButton'	 => 'Документация по API',
	'epubButton'	 => 'epub документация'
];
