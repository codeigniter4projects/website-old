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

- General (news & discussion, lounge, events, e regional user groups)
- Using CodeIgniter (choosing CodeIgniter, installation & setup, model-view-controller, libraries & helpers, best practices, e general help)
- CodeIgniter 4 (Roadmap, Development, feature requests, support, discussion)
- Development (CodeIgniter 3.x, CodeIgniter 2.x, e issues)
- External Resources (addins, jobs, learn more, e spotlight)

**O fórum é onde você pode pedir ajuda ou discutir problemas que você está tendo com o framework.**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
O CodeIgniter possui um canal do Slack, onde você pode interagir com outros membros da comunidade.
Qualquer um pode [inscrever-se](http://codeignitersignup.ciblox.com/) nele :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
A ação de desenvolvimento ocorre no Github. Veja a página de contribuição para mais detalhes.

**O repositório do Github é onde você pode registrar relatórios de erros (issues do github) ou
onde você pode enviar solicitações pull de aprimoramentos ou correções no framework.
O Github *não é* para suporte ou ajuda... use o fórum.**

As issues do Github também são usadas para rastrear aprimoramentos planejados e aprovados,
frequentemente vinculados a lançamentos específicos..

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
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Visite o fórum',
	'slackButton'	 => 'Visite Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
