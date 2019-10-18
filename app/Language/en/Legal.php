<?php
/**
 * Help/legal page messages for the CodeIgniter website.
 * The text blocks use markdown format.
 */
$trademarks = <<<'EOS'
CodeIgniter® is a registered trademark of the CodeIgniter Foundation, 
having being transferred from BCIT in 2019.	

<div>
<img class="pull-left" src="/assets/images/tl-ci.gif"/>
The CodeIgniter logo is an unregistered mark owned by the CodeIgniter Foundation, 
having been transferred from BCIT. We supply {marksLink} 
for use in your projects, subject to the guidelines below.
</div>

![http://creativecommons.org/licenses/by/4.0/](https://i.creativecommons.org/l/by/4.0/88x31.png)
This work is licensed under a Creative Commons Attribution 4.0 International License.

---
BCIT and BRITISH COLUMBIA INSTITUTE OF TECHNOLOGY and the distinctive marks 
(e.g. the BCIT logo) are registered trade marks of the British Columbia Institute of Technology
EOS;

$logoGuidelines = <<<'EOS'
You are welcome to use the CodeIgniter logo in your project, provided that you ...

- Do not make unauthorized or confusing use of the CodeIgniter trademark or a variation of it, 
	including creating the impression that the Foundation sponsors or endorses your website, products, or services.
- Use the ® trademark registration symbol when you use the CodeIgniter registered trademark.
- Use capitalization and bold or italic fonts to distinguish the CodeIgniter trademark from the text around it.
- Place a conspicuous legend at least once on webpages using the CodeIgniter trademark and 
	on the title page of any documentation or sales literature bearing the CodeIgniter trademark. 
	An example of an acceptable legend is: "The CodeIgniter mark is owned and may be registered by 
	the CodeIgniter Foundation."
- Place a disclaimer conspicuously at least once on webpages using the CodeIgniter 
	trademark and on the title page of any documentation or sales literature bearing 
	the CodeIgniter trademark. An example of an acceptable disclaimer is: "\_________ is an 
	independent \_________ and has not been authorized, sponsored, or otherwise approved by 
	the CodeIgniter Foundation."  
	[In each case, fill the blank space with the name and type of your product.]
- Do not change the spelling, make other changes to the CodeIgniter trademark, 
	or combine the CodeIgniter trademark with any other trademark, term, or designation.
- Use the CodeIgniter trademark only in connection with goods and services directly 
	related to CodeIgniter or services associated with that trademark.
- Do not use the CodeIgniter trademark or any variation of it in your domain name or URL.
- Do not use the CodeIgniter trademark for your own products and services that are 
	related to web publishing, programming frameworks, or related software.
- Do not claim ownership rights in the CodeIgniter trademark.
EOS;

$thirdParty = <<<'EOS'
Mention of third party companies and products on this web site is for informational 
purposes only and constitutes neither an endorsement nor a recommendation.
EOS;

$externalLinks = <<<'EOS'
The CodeIgniter Foundation makes no representations whatsoever about any 
other websites which you may access from here. When you access an external website, 
please understand that it is independent from the BCIT website and from this 
website, and that we has no control over the content on that website. A link to 
an external site does not mean that the CodeIgniter Foundation endorses 
or accepts any responsibility for the content or use of such website.
EOS;

return [
	'title'				 => 'The Fine Print',
	'marksTitle'		 => 'Trademarks',
	'marksText'			 => $trademarks,
	'marksLink'			 => '[several versions of the CodeIgniter logo](/data/ci-logo.zip)',
	'logoTitle'			 => 'Privacy Policy',
	'logoText'			 => $logoGuidelines,
	'logoLink'			 => '[several versions of the CodeIgniter 4 logo](/data/ci4-logo.zip)',
	'thirdPartyTitle'	 => 'Website data',
	'thirdPartyText'	 => $thirdParty,
	'externalLinksTitle' => 'Links to Other Web Sites',
	'externalLinksText'	 => $externalLinks,
	'endText'			 => 'NO LONGER IN USE'
];
