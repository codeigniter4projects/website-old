<?php
/**
 * Download page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$ci4DownloadText = <<<'EOS'
CodeIgniter 4 é a próxima versão do framework, destinada ao uso com PHP7.2.

O desenvolvimento está em andamento e a versão atual é {v4name}.

Você *pode* baixar o framework V4 usando o botão abaixo, mas nós encorajamos você
a checar a [seção de Instalação](https://codeigniter4.github.io/userguide/installation/index.html)
do Guia do Usuário, para escolher entre várias maneiras diferentes de instalar o framework :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="http://github.com/codeigniter4/CodeIgniter4/archive/{v4name}.zip" class="nav-link btn-success" title="Download the latest version">
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
CodeIgniter {v3name} é a versão atual do framework, destinada ao uso com PHP 5.6+.

Houve vários aprimoramentos desde a versão 2, principalmente com o banco de dados,
manipulação de sessão e criptografia. O desenvolvimento desta versão está em andamento.

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
CodeIgniter 2.2.6 é a versão legada do framework.

O ramo 2.x foi lançada originalmente em janeiro de 2011 e a última versão (2.2.6) foi lançada em outubro, 2015.

O CodeIgniter 2 chegou ao fim da vida útil para suporte e atualizações, em 31 de outubro de 2015. Nenhuma atualização adicional está planejada.

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
	'heading'			 => 'CodeIgniter vem em três sabores: CodeIgniter 3 (atual), CodeIgniter 4 (futuro) e CodeIgniter 2 (legado)',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4DownloadText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'			 => $ci3DownloadText,
	'ci2Title'		 => 'CodeIgniter 2',
	'ci2Text'			 => $ci2DownloadText,
	'downloadButton'	 => 'Download',
	'discussButton'		 => 'Discutir',
	'sourcesButton'		 => 'Fontes',
	'translationsButton' => 'Traduções'
];
