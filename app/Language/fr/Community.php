<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
Les problèmes de sécurité doivent être signalés avec un courrier électronique à notre 
[équipe de sécurité](mailto: security@codeigniter.com), plutôt 
que d'être soulevés sur le forum ou soulevés comme un problème Github, merci!
EOS;

$forumCommunity = <<<'EOS'
Notre forum a été configuré avec MyBB, avec cinq catégories principales:

- Général (actualités et discussion, salons, événements et groupes d'utilisateurs régionaux)

- Utilisation de CodeIgniter (choix de CodeIgniter, installation et paramétrage, contrôleur modèle-vue-contrôleur, bibliothèques et assistants, meilleures pratiques et aide générale)

- CodeIgniter 4 (feuille de route, développement, demandes de fonctionnalités, support, discussion)

- Développement (CodeIgniter 3.x, CodeIgniter 2.x et problèmes)

- Ressources externes (compléments, emplois, en savoir plus et sous les projecteurs)

** Le forum est l'endroit où vous pouvez demander de l'aide ou discuter des problèmes que vous rencontrez avec framework. **


<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniter a un serveur Slack, où vous pouvez dialoguer avec d'autres membres de la communauté.
Tout le monde peut [s'inscrire](http://codeignitersignup.ciblox.com/) pour cela :)


<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
L'action de développement a lieu sur Github. Voir la page de contribution pour plus de détails.

** Le référentiel Github est l'endroit où vous pouvez déposer des rapports de bogues (problèmes de github), ou
où vous pouvez soumettre des demandes d'extraction pour des améliorations ou des correctifs pour la structure.
Github n'est * pas * d'assistance ou d'aide ... utilisez plutôt le forum. **

Les problèmes de Github sont également utilisés pour suivre les améliorations prévues et approuvées,
souvent lié à des versions spécifiques


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
	'title'		 => 'Communauté CodeIgniter',
	'heading'	 => 'CodeIgniter est un projet open source développé par la communauté, avec plusieurs lieux de rassemblement et d\'échange d\'idées pour les membres de la communauté. ',
	'securityText'	 => $securityPlug,
	'team'		 => 'équipe de sécurité',
	'forumTitle'	 => 'Forum',
	'forumText'	 => $forumCommunity,
	'slackTitle'	 => 'Slack',
	'slackText'	 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Visiter le forum',
	'slackButton'	 => 'Visitez Slack',
	'ci4Button'	 => 'CodeIgniter 4',
	'ci3Button'	 => 'CodeIgniter 3',
];
