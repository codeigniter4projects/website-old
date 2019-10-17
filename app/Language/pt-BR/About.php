<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
O projeto CodeIgniter conta com a ajuda de alguns homens sábios, para supervisionar o
desenvolvimento contínuo do CodeIgniter 3 e direcionar o framework para o próximo nível, o CodeIgniter 4.
EOS;


$hatsOffToThese = <<<'EOS'
Somos gratos pelas contribuições anteriores da comunidade..

Conselho: Andreas Pfotenhauer (Alemanha), David Wosnitza (Alemanha), and
Johannes Gamperl (Alemanha).

Fundação: Albert Leao (EUA), Brian Gottier (EUA), Dave Friend, Paradinight,
Pertti Soomann, php_rocs, sv3tli0 (Bulgaria)

Logo: Philippe Lucidarme (França)

Segurança: Debasis Mohanty (Nova Zelândia)

Website: Lonnie Ezell (EUA), Michał Śniatała (Polônia) and Raymond King (EUA).

Agradecemos também a todos os membros da comunidade que fizeram sugestões construtivas
para melhorar o design e a usabilidade do site ou que relataram vulnerabilidades!
EOS;

return [
	'title'		 => 'Sobre CodeIgniter',
	'wiseTitle'	 => 'Homem Sábio',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => 'Reconhecimentos',
	'ackText'	 => $hatsOffToThese,
];
