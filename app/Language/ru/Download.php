<?php
/**
 * Download page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DownloadText = <<<'EOS'
CodeIgniter 4 - это будущая версия фреймворка, предназначенная для использования с PHP 7.2.

Разработка ведется, и текущей версией является {v4name}.

Вы можете *загрузить* фреймворк V4, используя кнопку ниже, но мы рекомендуем вам проверить раздел [Установка](https://codeigniter4.github.io/userguide/installation/index.html) 
в руководстве пользователя, чтобы выбрать один из нескольких способов установки фреймворка. :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://github.com/codeigniter4/CodeIgniter4/archive/{v4name}.zip" class="nav-link btn-success" title="Скачать последнюю версию">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://forum.codeigniter.com/forum-28.html" class="nav-link btn-success" title="Присоединяйтесь к обсуждению на нашем форуме !">
			<i class="fa fa-comments"></i> {discussButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://github.com/codeigniter4/CodeIgniter4" class="nav-link btn-success" title="Посмотреть CodeIgniter 4 на Github">
			<i class="fa fa-github-square"></i> {sourcesButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/translations" class="nav-link btn-success" title="Переводы системных сообщений">
			<i class="fa fa-globe"></i> {translationsButton}
		</a>
	</li>
</ul>
EOS;

$ci3DownloadText = <<<'EOS'
CodeIgniter {v3name} - это текущая версия фреймворка, предназначенная для использования с PHP 5.6+.

Начиная с версии 2 был внесен ряд улучшений, в частности, в отношении базы данных, обработки сеансов и шифрования. Разработка этой версии продолжается.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="{v3link}" class="nav-link btn-primary" title="Скачать CodeIgniter 3">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/codeigniter3-translations/archive/{v3trans}.zip" class="nav-link btn-primary" title="Скачать переводы системных сообщений">
			<i class="glyphicon glyphicon-save"></i> {translationsButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/CodeIgniter" class="nav-link btn-primary" title="Посмотреть CodeIgniter 3 на Github">
			<i class="fa fa-github-square"></i> {sourcesButton}
		</a>
	</li>
</ul>
EOS;

$ci2DownloadText = <<<'EOS'
CodeIgniter 2.2.6 является устаревшей версией фреймворка.

Ветвь 2.x изначально была выпущена в январе 2011 года, а последняя версия (2.2.6) вышла в октябре 2015 года.

По состоянию на 31 октября 2015 года CodeIgniter 2 завершил свою работу для поддержки и обновлений. Дальнейших обновлений не планируется.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/bcit-ci/CodeIgniter/archive/2.2.6.zip" class="nav-link btn-primary" title="Скачать CodeIgniter 2">
			<i class="glyphicon glyphicon-save"></i> {downloadButton}
		</a>
	</li>
</ul>
EOS;

return [
	'title'				 => 'Скачать CodeIgniter',
	'heading'			 => 'CodeIgniter поставляется в трех вариантах: CodeIgniter 3 (текущий), CodeIgniter 4 (будущий) и CodeIgniter 2 (прежний)',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4DownloadText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'			 => $ci3DownloadText,
	'ci2Title'		 => 'CodeIgniter 2',
	'ci2Text'			 => $ci2DownloadText,
	'downloadButton'	 => 'Скачать',
	'discussButton'		 => 'Обсуждения',
	'sourcesButton'		 => 'Исходники',
	'translationsButton' => 'Переводы'
];
