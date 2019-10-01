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
CodeIgniter 4 has its own [Github repository](https://github.com/codeigniter4/CodeIgniter4). 
It deviates enough from CodeIgniter 3 that we want to keep them separate. 
The CodeIgniter 4 roadmap is explained on [our forum](http://forum.codeigniter.com/forum-28.html), 
and work to be done is detailed in the [repository issues](https://github.com/codeigniter4/CodeIgniter4/issues). 		
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
#### Writers
   
Every project needs good documentation! The CodeIgniter user guide is part of the 
[Github project](https://github.com/bcit-ci/CodeIgniter) (mentioned above), 
and there is always room for more tutorials.

CodeIgniter 4's user guide is part of its own [repository](https://github.com/codeigniter4/CodeIgniter4).
EOS;

$evangelistContributions = <<<'EOS'
#### Evangelists   
	
The word needs to be spread about good and worthy projects, which we think CodeIgniter is :) 
You can help by being active in the forums, answering questions, and by 
spreading the word inside your developer or user community.		
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
#### Coders
   
If you would like to get involved in helping to build the next version of CodeIgniter, 
join us on [Github](https://github.com/bcit-ci/CodeIgniter)! 
A detailed [contribution guide](http://cisite.local/userguide3/contributing/index.html) 
is in the User Guide, but the main points are to make sure your code conforms to 
our [style guide](http://cisite.local/userguide3/general/styleguide.html), 
that it is properly documented, and that you use the 
[Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model.

*CodeIgniter 4 equivalent links: its [repository](https://github.com/codeigniter4/CodeIgniter4), 
its [contribution guide](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing), 
and its [style](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst).*
EOS;

$reviewerContributions = <<<'EOS'
#### Critiques
   
Chaque projet a besoin d’un noyau de développeurs, familiarisé avec les normes du projet.
et conventions, pour examiner les améliorations et les correctifs proposés.
Nous avons eu beaucoup de chance avec notre groupe d’examinateurs jusqu’à présent et espérons en recruter un peu plus.	
EOS;


return [
	'title'				 => 'Contribute to CodeIgniter',
	'heading'			 => 'There are many ways to contribute to the CodeIgniter project, whether you are a developer or not. ',
	'topText'			 => $introductionContribution,
	'ci4Title'			 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4Contributions,
	'securityText'		 => $securityContributions,
	'notcoderSection'	 => 'Not a Programmer?',
	'testerText'		 => $testingContributions,
	'writerText'		 => $writingContributions,
	'evangelistText'	 => $evangelistContributions,
	'moderatorText'		 => $moderatorContributions,
	'designerText'		 => $designerContributions,
	'coderSection'		 => 'Are You a Programmer?',
	'coderText'			 => $coderContributions,
	'reviewerText'		 => $reviewerContributions,
	'ackTitle'			 => 'Acknowledging Our Top Contributors',
	'ack1'				 => '... CodeIgniter 3',
	'ack2'				 => '... CodeIgniter 3 translations',
	'ack3'				 => '... CodeIgniter4',
	'ack4'				 => '... CodeIgniter 4 translations',
	'ack5'				 => '... our original Website',
	'ack6'				 => '... our revised Website (CI4)',
];
