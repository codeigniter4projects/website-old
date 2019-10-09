<?php
/**
 * Help/legal page messages for the CodeIgniter website.
 * The text blocks use markdown format.
 */
$trademarks = <<<'EOS'
CodeIgniter® est une marque déposée du British Columbia Institute of Technology (BCIT),
ayant été transféré d'EllisLab, Inc en 2014.	

<div>
<img class="pull-left" src="/assets/images/tl-ci.gif"/>
Le logo CodeIgniter est une marque non enregistrée appartenant au BCIT,
ayant été transféré de EllisLab, Inc. Nous fournissons {marksLink}
à utiliser dans vos projets, sous réserve des directives ci-dessous.
</div>

![http://creativecommons.org/licenses/by/4.0/](https://i.creativecommons.org/l/by/4.0/88x31.png)
Ce travail est distribué sous licence Creative Commons Attribution 4.0 International.

---
BCIT et BRITISH COLUMBIA INSTITUTE OF TECHNOLOGY et les marques distinctives
(par exemple, le logo BCIT) sont des marques déposées du British Columbia Institute of Technology
EOS;

$logoGuidelines = <<<'EOS'
Vous pouvez utiliser le logo CodeIgniter dans votre projet, à condition ...

- Que vous n'utilisiez pas de manière non autorisée ou déroutante la marque codeIgniter ou une variante de celle-ci, 
	en donnant notamment l'impression que BCIT sponsorise ou endosse votre site Web, vos produits ou vos services.
- Que vous utilisiez le symbole ® de la marque déposée lorsque vous utilisez la marque déposée CodeIgniter.
- Que vous utilisiez des majuscules et des polices gras et italiques pour distinguer la marque CodeIgniter du texte qui l’entoure.
- De placer une légende visible au moins une fois sur les pages Web portant la marque CodeIgniter et
	sur la page de titre de toute documentation ou documentation commerciale portant la marque CodeIgniter.
	Voici un exemple de légende acceptable: "La marque CodeIgniter est la propriété de et peut être enregistrée par le BCIT."
- De placer une clause de non-responsabilité ostentiblement au moins une fois sur les pages Web portant 
	la marque CodeIgniter et sur la page de titre de toute documentation ou documentation commerciale 
	portant la marque CodeIgniter. Voici un exemple de clause de non-responsabilité acceptable: "\_________ est un 
	\ _________ indépendant et n'a pas été autorisé, sponsorisé ou autrement approuvé par le BCIT."
	[Dans chaque cas, remplissez l'espace vide avec le nom et le type de votre produit.]
- De ne pas modifier l'orthographe, d'apporter d'autres modifications à la marque CodeIgniter 
	ou de combiner la marque CodeIgniter avec toute autre marque, dénomination ou désignation.
- Que vous utilisiez la marque CodeIgniter uniquement en relation avec des produits et services 
	directement liés à CodeIgniter ou aux services associés à cette marque.
- De ne pas utiliser la marque CodeIgniter ou une de ses variantes dans votre nom de domaine ou votre URL.
- De ne pas utiliser la marque CodeIgniter pour vos propres produits et services liés 
	à la publication Web, aux cadres de programmation ou aux logiciels connexes.
- De ne pas revendiquer de droits de propriété sur la marque CodeIgniter.
EOS;

$thirdParty = <<<'EOS'
La mention de sociétés et de produits tiers sur ce site Web est uniquement 
à des fins d’information et ne constitue ni une approbation ni une recommandation.
EOS;

$externalLinks = <<<'EOS'
Le BCIT et la CodeIgniter Foundation ne font aucune déclaration quant aux autres sites Web 
auxquels vous pourriez accéder à partir d'ici. Lorsque vous accédez à un site Web externe, 
sachez qu'il est indépendant du site Web du BCIT et de ce site Web et que nous n'avons aucun 
contrôle sur le contenu de ce site. Un lien vers un site autre que le BCIT ne signifie pas que 
le BCIT ou la CodeIgniter Foundation approuvent ou acceptent toute responsabilité quant au 
contenu ou à l’utilisation de ce site Web.
EOS;

return [
	'title'				 => 'Les petits caractères',
	'marksTitle'		 => 'Marques de commerce',
	'marksText'			 => $trademarks,
	'marksLink'			 => '[plusieurs versions du logo CodeIgniter](/data/ci-logo.zip)',
	'logoTitle'			 => 'Politique de confidentialité',
	'logoText'			 => $logoGuidelines,
	'logoLink'			 => '[plusieurs versions du logo CodeIgniter 4](/data/ci4-logo.zip)',
	'thirdPartyTitle'	 => 'Données du site',
	'thirdPartyText'	 => $thirdParty,
	'externalLinksTitle' => 'Liens vers d\'autres sites Web',
	'externalLinksText'	 => $externalLinks,
	'endText'			 => 'Nous vous invitons à lire la [page principale de confidentialité](http://www.bcit.ca/privacy/) du BCIT'
];
