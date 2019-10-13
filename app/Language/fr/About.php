<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
Le projet CodeIgniter a l'aide de quelques sages, pour superviser le développement continu 
de CodeIgniter 3 et pour orienter la structure au prochain niveau, CodeIgniter 4.
EOS;


$hatsOffToThese = <<<'EOS'
Nous sommes reconnaissants pour les contributions passées de la communauté.

Conseil: Andreas Pfotenhauer (Allemagne), David Wosnitza (Allemagne) et 
Johannes Gamperl (Allemagne).

Fondation: Albert Leao (États-Unis), Brian Gottier (États-Unis), Dave Friend, Paradinight, 
Pertti Soomann, php_rocs, sv3tli0 (Bulgarie)

Logo: Philippe Lucidarme (France)

Sécurité: Debasis Mohanty (Nouvelle Zélande)

Site Web: Lonnie Ezell (États-Unis), Michał Śniatała (Pologne) et Raymond King (États-Unis).

Merci également à tous les membres de la communauté qui ont fait des suggestions constructives 
pour améliorer la conception et la convivialité du site ou qui ont signalé des vulnérabilités!
EOS;

return [
	'title'		 => 'À propos de CodeIgniter',
	'wiseTitle'	 => 'Hommes sages',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => 'Remerciements',
	'ackText'	 => $hatsOffToThese,
];
