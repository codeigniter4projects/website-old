<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
Problemas de segurança devem ser relatados por email para o nosso
[time de segurança](mailto:security@codeigniter.com), em vez
de ser abordado no fórum ou levantado como uma issue no Github, obrigado!
EOS;

$forumCommunity = <<<'EOS'
Nosso fórum foi configurado usando o MyBB, com cinco categorias principais:

- General (notícias e discussões, lounge, eventos e grupos regionais de usuários)
- Using CodeIgniter (iniciando com o CodeIgniter, instalação e configuração, model-view-controller, bibliotecas e helpers, boas práticas e ajuda geral)
- CodeIgniter 4 (Roadmap, Desenvolvimento, novas funcionalidades, suporte, discussões)
- Development (CodeIgniter 3.x, CodeIgniter 2.x e problemas)
- External Resources (addins, empregos, saiba mais e destaques)

**O fórum é onde você pode pedir ajuda ou discutir problemas que está tendo com o framework.**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
O CodeIgniter possui um canal no Slack onde você pode interagir com outros membros da comunidade.
Qualquer um pode [se inscrever](http://codeignitersignup.ciblox.com/) nele :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
O desenvolvimento ocorre no Github. Veja a página de contribuição para mais detalhes.

**O repositório do Github é onde você pode registrar relatórios de erros (issues do GitHub) ou
onde você pode enviar pull requests de melhorias ou correções no framework.
O Github *não é* para suporte ou ajuda... use o fórum.**

As issues do Github também são usadas para rastrear melhorias planejadas e aprovadas,
frequentemente vinculadas a lançamentos específicos.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://github.com/codeigniter4/codeigniter4/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {ci4Button}</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://github.com/bcit-ci/CodeIgniter/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {ci3Button}</a>
	</li>
</ul>
EOS;

return [
	'title'			 => 'Comunidade CodeIgniter',
	'heading'		 => 'CodeIgniter é um projeto de código aberto desenvolvido pela comunidade, com vários locais para os membros da comunidade se reunir e trocar idéias. ',
	'securityText'	 => $securityPlug,
	'team'			 => 'time de segurança',
	'forumTitle'	 => 'Fórum',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => 'Slack',
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'GitHub',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Visite o fórum',
	'slackButton'	 => 'Visite o Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
