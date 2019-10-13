<?php
/**
 * Responsible disclosure page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$responsibleDisclosure = <<<'EOS'
Si vous découvrez une vulnérabilité, nous aimerions le savoir afin que nous puissions prendre
étapes pour y remédier le plus rapidement possible. Nous aimerions vous demander de
Aidez-nous à mieux protéger nos clients et nos systèmes.

Veuillez faire ce qui suit:

- Envoyez vos résultats par courrier électronique à [security@codeigniter.com](mailto:security@codeigniter.com)
ou les signaler sur notre [HackerOne page](https://hackerone.com/codeigniter)
- Ne tirez pas parti de la vulnérabilité ou du problème découvert,
par exemple en téléchargeant plus de données que nécessaire pour démontrer la
vulnérabilité ou suppression ou modification des données d'autres personnes
- Ne révélez pas le problème à d'autres avant qu'il ne soit résolu
- Ne pas utiliser les attaques contre la sécurité physique, l'ingénierie sociale, le déni distribué
service, spam ou applications de tiers, et
- Fournissez suffisamment d’informations pour reproduire le problème afin que nous puissions
pour le résoudre le plus rapidement possible. Des vulnérabilités complexes peuvent nécessiter des explications supplémentaires.

Ce que nous promettons:

- Si vous avez suivi les instructions ci-dessus, nous n'engagerons aucune procédure judiciaire à votre encontre en ce qui concerne le rapport.
- Nous traiterons votre rapport avec la plus stricte confidentialité et ne transmettrons pas vos données personnelles à des tiers sans votre autorisation.
- Nous vous tiendrons informés des progrès accomplis dans la résolution du problème, et
- Le cas échéant, nous sommes heureux de remercier ceux qui trouvent ou résolvent des problèmes de sécurité.

Nous nous efforçons de résoudre tous les problèmes le plus rapidement possible et, le cas échéant, nous
souhaite jouer un rôle dans la publication du problème une fois celui-ci résolu. 
EOS;
return [
	'title'		 => 'Divulgation responsable',
	'heading'	 => 'Chez CodeIgniter, nous considérons la sécurité de nos systèmes comme une priorité absolue. ',
	'subheading' => 'Mais peu importe les efforts que nous déployons dans la sécurité du système, des vulnérabilités peuvent toujours exister. ',
	'theText'	 => $responsibleDisclosure
];