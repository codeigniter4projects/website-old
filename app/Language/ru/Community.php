<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
О проблемах безопасности следует сообщать по электронной почте в нашу
[команду безопасности](mailto:security@codeigniter.com), а не поднимать тему на форуме или как проблему в Github, спасибо !	
EOS;

$forumCommunity = <<<'EOS'
Наш форум был настроен с использованием MyBB, с пятью основными категориями:

- Общее (Новости и обсуждения, комнаты отдыха, события и региональные группы пользователей)
- Использование CodeIgniter (выбор CodeIgniter, установка и настройка, модель-представление-контроллер, библиотеки и помощники, лучшие практики и общая помощь)
- CodeIgniter 4 (Дорожная карта, разработка, запросы функций, поддержка, обсуждение)
- Разработка (CodeIgniter 3.x, CodeIgniter 2.x и проблемы)
- Внешние ресурсы (Надстройки, рабочие места, узнать больше и в центре внимания)

**На форуме вы можете попросить о помощи или обсудить возникающие у вас проблемы с фреймворком.**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniter имеет канал Slack, где вы можете взаимодействовать с другими членами сообщества.
Для этого любой может [зарегистрироваться] (http://codeignitersignup.ciblox.com/) :) 

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
Действие разработки происходит на Github. Смотрите страницу "вклады" для более подробной информации.

**Репозиторий Github - это место, где вы можете подавать отчеты об ошибках (GitHub-Проблемы) или
где вы можете отправлять запросы на извлечение улучшений или исправлений для фреймворка.
GitHub *не* для поддержки или помощи... вместо этого используйте наш форум.**

GitHub-Проблемы, также используются для отслеживания запланированных и утвержденных улучшений, часто связанных с конкретными выпусками.

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
	'title'			 => 'Сообщество CodeIgniter',
	'heading'		 => 'CodeIgniter - это проект с открытым исходным кодом, разработанный сообществом, в котором члены сообщества могут собирать и обмениваться идеями. ',
	'securityText'	 => $securityPlug,
	'team'			 => 'команда безопасности',
	'forumTitle'	 => 'Форум',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => 'Slack',
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Посетите форум',
	'slackButton'	 => 'Посетите Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
