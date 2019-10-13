<?php
/**
 * Contribute page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$introductionContribution = <<<'EOS'
CodeIgniter est un projet mené par la communauté et accepte les contributions de code et
documentation de la communauté. Ces contributions sont faites sous forme de
Problèmes ou demandes d'extraction sur [référentiel CodeIgniter](https://github.com/bcit-ci/CodeIgniter) on GitHub.

Les problèmes sont un moyen rapide de signaler un bogue. Si vous trouvez un bogue ou une erreur de documentation dans CodeIgniter, veuillez d'abord vérifier quelques points:

- Il n'y a pas déjà de numéro en suspens
- Le problème a déjà été corrigé (vérifiez la branche développer ou recherchez les problèmes fermés)
- Est-ce vraiment évident que vous le répariez vous-même?
- Si vous n'êtes pas sûr d'avoir trouvé un bogue, lancez un nouveau fil de discussion dans le
Forum CodeIgniter, dans la section [Issues](http://cisite.local/%3C?=%20config_item(%27mybb_forum_url%27)%20?%3E/forum-19.html)!

Signaler les problèmes est utile, mais une approche encore meilleure consiste à envoyer une demande de tirage,
ce qui est fait en "Forking" le dépôt principal et en s’engageant sur votre propre copie.
Cela nécessitera que vous utilisiez le système de contrôle de version appelé Git. 		
* Remarque: les deux liens GitHub ci-dessus concernent le référentiel CodeIgniter 3. Ils vont
EOS;

$ci4Contributions = <<<'EOS'
CodeIgniter 4 a son propre [référentiel Github](https://github.com/codeigniter4/CodeIgniter4). 
Cela dévie suffisamment de CodeIgniter 3 pour que nous voulions les garder séparés.
La feuille de route CodeIgniter 4 est expliquée sur [notre forum](http://forum.codeigniter.com/forum-28.html), 
et le travail à effectuer est détaillé dans les [problèmes de référentiel](https://github.com/codeigniter4/CodeIgniter4/issues). 		
EOS;

$securityContributions = <<<'EOS'
Les problèmes de sécurité doivent être signalés avec un courrier électronique à notre équipe de sécurité, plutôt que
que d'être élevé sur le forum ou soulevé comme une question de Github, merci!
En savoir plus sur [divulgation responsable](/contribute/responsible). 		
EOS;

$testingContributions = <<<'EOS'
#### Testeurs
Nous avons toujours besoin de commentaires sur ce qui fonctionne et ce qui ne fonctionne pas! L'essentiel du développement
les efforts vont dans la version 3, alors c’est là que les besoins sont les plus criants.
Si vous trouvez quelque chose qui est vraiment un bug et que vous êtes un utilisateur de Github,
veuillez créer un nouveau "numéro". Si vous n'êtes pas un utilisateur de Github, ou si vous êtes
ne sachant pas si vous avez trouvé un bogue, lancez un nouveau sujet dans CodeIgniter
forum [Section des problèmes](https://forum.codeigniter.com/forum-19.html)!

*CodeIgniter 4 a son propre [sous-forum de support]
(https://forum.codeigniter.com/forum-30.html).		*
EOS;

$writingContributions = <<<'EOS'
#### Écrivains
   
Chaque projet nécessite une bonne documentation! Le guide de l'utilisateur CodeIgniter fait partie de la
[Projet Github](https://github.com/bcit-ci/CodeIgniter) (mentionné ci-dessus),
et il y a toujours place pour plus de tutoriels.

Le guide de l'utilisateur de CodeIgniter 4 fait partie de son propre [référentiel](https://github.com/codeigniter4/CodeIgniter4).
EOS;

$evangelistContributions = <<<'EOS'
#### Évangélistes  
	Le mot doit être répandu sur les bons projets, ce que nous pensons que CodeIgniter est :)
Vous pouvez aider en étant actif sur les forums, en répondant aux questions et en
passer le mot au sein de votre communauté de développeurs ou d'utilisateurs.	
EOS;

$moderatorContributions = <<<'EOS'
#### Les modérateurs
   
Le forum peut toujours utiliser des modérateurs pour s'assurer que les discussions / discussions restent sur le sujet et pour éliminer les utilisateurs ou commentaires inappropriés!	
EOS;

$designerContributions = <<<'EOS'
#### Concepteurs
   
Les suggestions et l'aide concernant notre site Web, notre guide de l'utilisateur et la conception du forum sont toujours les bienvenues!
Nous travaillons sur des thèmes pour chacun d’entre eux, qui seront partagés dans leur propre référentiel Github.		
EOS;

$coderContributions = <<<'EOS'
#### Codeurs
   
Si vous souhaitez participer à la création de la prochaine version de CodeIgniter,
Rejoignez-nous sur [Github](https://github.com/bcit-ci/CodeIgniter)! 
Un [guide de contribution] détaillé(http://cisite.local/userguide3/contributing/index.html) 
est dans le Guide de l'utilisateur, mais l'essentiel est de s'assurer que votre code est conforme à
notre [guide de style](http://cisite.local/userguide3/general/styleguide.html), 
qu'il est correctement documenté et que vous utilisez le
[Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model.

*Liens équivalents à CodeIgniter 4: son [référentiel](https://github.com/codeigniter4/CodeIgniter4), 
son [guide de contribution](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing), 
(https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst).*
EOS;

$reviewerContributions = <<<'EOS'
#### Critiques
   
Chaque projet a besoin d’un noyau de développeurs, familiarisé avec les normes du projet.
et conventions, pour examiner les améliorations et les correctifs proposés.
Nous avons eu beaucoup de chance avec notre groupe d’examinateurs jusqu’à présent et espérons en recruter un peu plus.	
EOS;


return [
	'title'				 => 'Contribuer à CodeIgniter',
	'heading'			 => 'Il existe de nombreuses façons de contribuer au projet CodeIgniter, que vous soyez développeur ou non.',
	'topText'			 => $introductionContribution,
	'ci4Title'			 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4Contributions,
	'securityText'		 => $securityContributions,
	'notcoderSection'	 => 'Pas un programmeur?',
	'testerText'		 => $testingContributions,
	'writerText'		 => $writingContributions,
	'evangelistText'	 => $evangelistContributions,
	'moderatorText'		 => $moderatorContributions,
	'designerText'		 => $designerContributions,
	'coderSection'		 => 'Êtes-vous un programmeur?',
	'coderText'			 => $coderContributions,
	'reviewerText'		 => $reviewerContributions,
	'ackTitle'			 => 'Reconnaître nos meilleurs contributeurs',
	'ack1'				 => '... CodeIgniter 3',
	'ack2'				 => '... Traductions CodeIgniter 3',
	'ack3'				 => '... CodeIgniter4',
	'ack4'				 => '... Traductions CodeIgniter 4',
	'ack5'				 => "... notre site d'origine",
	'ack6'				 => '... notre site Web révisé (CI4)',
];
