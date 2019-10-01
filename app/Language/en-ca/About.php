<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
The CodeIgniter project has the help of a few wise men, to oversee the continued 
development of CodeIgniter 3 and to steer the framework to the next level, CodeIgniter 4.
EOS;


$hatsOffToThese = <<<'EOS'
We are grateful for past contributions from the community.

Council: Andreas Pfotenhauer (Germany), David Wosnitza (Germany), and 
Johannes Gamperl (Germany).

Foundation: Albert Leao (USA), Brian Gottier (USA), Dave Friend, Paradinight, 
Pertti Soomann, php_rocs, sv3tli0 (Bulgaria)

Logo: Philippe Lucidarme (France)

Security: Debasis Mohanty (New Zealand)

Website: Lonnie Ezell (USA), Michał Śniatała (Poland) and Raymond King (USA).

Thank you, as well, to all of the community members who have made constructive 
suggestions to improve the design and usability of the site, or who have reported vulnerabilities!
EOS;

return [
	'title'		 => 'About CodeIgniter',
	'wiseTitle'	 => 'Wise Men',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => 'Acknowledgements',
	'ackText'	 => $hatsOffToThese,
];
