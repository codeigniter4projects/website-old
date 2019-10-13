<?php
/**
 * Help/policies page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$termsOfService = <<<'EOS'
Tous les messages postés sur ce site ou ce forum expriment les points de vue des auteurs,
et ne reflètent pas nécessairement les vues des propriétaires et des administrateurs de ce site.

En vous inscrivant sur le forum, vous acceptez de ne pas publier de messages obscènes,
vulgaire, diffamatoire, haineux, menaçant, ou qui enfreignent les lois.
Nous allons interdire définitivement tous les utilisateurs qui le font.

Nous nous réservons le droit de supprimer, éditer ou déplacer tout message pour quelque raison que ce soit.
EOS;

$privacyPolicy = <<<'EOS'
Nous nous engageons à respecter et à protéger votre confidentialité en ligne.
	
Nous recueillons vos informations personnelles uniquement lorsque vous vous inscrivez volontairement pour un
compte d’adhésion pour pouvoir utiliser le forum CodeIgniter. Accéder à notre
Le site Web n'est généralement pas restreint et vous pouvez le parcourir anonymement.

Toute information recueillie auprès de vous ne sera pas divulguée, conformément à la politique de la Colombie-Britannique.
Loi sur l'accès à l'information et la protection de la vie privée (RSBC 1996, ch. 165).
EOS;

$websiteData = <<<'EOS'
Nos serveurs collectent automatiquement les informations essentielles au fonctionnement et à la
maintenir la sécurité du site. Les informations collectées peuvent inclure:
type de navigateur, nom du fournisseur de services Internet (ISP) et adresse IP.
	
Ce site Web contient des liens vers des sites Web de tiers et nous ne sommes pas responsables des dispositions relatives à la confidentialité de ces autres sites.

Certaines parties du site Web peuvent distribuer de petites informations
(appelés "cookies") aux navigateurs Web, pour vous assister lorsque vous revenez à
zones spécifiques sur le site. Si vous avez des inquiétudes concernant les cookies, vous pouvez changer
les paramètres de votre navigateur Web pour ne pas accepter ces informations ou pour afficher des messages d’avertissement.
Nous vous invitons à lire la [page principale de confidentialité] du BCIT (http://www.bcit.ca/privacy/)
EOS;
return [
	'title'			 => 'Politiques',
	'termsTitle'	 => 'Conditions de service',
	'termsText'		 => $termsOfService,
	'privacyTitle'	 => 'Politique de confidentialité',
	'privacyText'	 => $privacyPolicy,
	'dataTitle'		 => 'Données du site',
	'dataText'		 => $websiteData,
];
