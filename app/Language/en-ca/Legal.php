<?php
/**
 * Help/legal page messages for the CodeIgniter website.
 * The text blocks use markdown format.
 */
$trademarks = <<<'EOS'
CodeIgniter® is a registered trade-mark of the British Columbia Institute of Technology (BCIT), 
having being transferred from EllisLab, Inc in 2014.	

<div>
<img class="pull-left" src="/assets/images/tl-ci.gif"/>
The CodeIgniter logo is an unregistered mark owned by BCIT, 
having been transferred from EllisLab, Inc. We supply {marksLink} 
for use in your projects, subject to the guidelines below.
</div>

---

<div>
<img class="pull-left" src="/assets/images/codeigniter4logo.png" width="89" height="89"/>
The CodeIgniter 4 logo is an unregistered mark owned by the CodeIgniter Foundation. 
We supply {logoLink} for use in your projects, subject to the guidelines below.
</div>

![http://creativecommons.org/licenses/by/4.0/](https://i.creativecommons.org/l/by/4.0/88x31.png)
This work is licensed under a Creative Commons Attribution 4.0 International License.

---
BCIT and BRITISH COLUMBIA INSTITUTE OF TECHNOLOGY and the distinctive marks 
(e.g. the BCIT logo) are registered trade marks of the British Columbia Institute of Technology
EOS;

$logoGuidelines = <<<'EOS'
You are welcome to use the CodeIgniter logo in your project, provided that you ...

- Do not make unauthorized or confusing use of the CodeIgniter trade-mark or a variation of it, 
	including creating the impression that BCIT sponsors or endorses your website, products, or services.
- Use the ® trade-mark registration symbol when you use the CodeIgniter registered trade-mark.
- Use capitalization and bold or italic fonts to distinguish the CodeIgniter trade-mark from the text around it.
- Place a conspicuous legend at least once on webpages using the CodeIgniter trade-mark and 
	on the title page of any documentation or sales literature bearing the CodeIgniter trade-mark. 
	An example of an acceptable legend is: "The CodeIgniter mark is owned and may be registered by BCIT."
- Place a disclaimer conspicuously at least once on webpages using the CodeIgniter 
	trade-mark and on the title page of any documentation or sales literature bearing 
	the CodeIgniter trade-mark. An example of an acceptable disclaimer is: "\_________ is an 
	independent \_________ and has not been authorized, sponsored, or otherwise approved by BCIT."  
	[In each case, fill the blank space with the name and type of your product.]
- Do not change the spelling, make other changes to the CodeIgniter trade-mark, 
	or combine the CodeIgniter trade-mark with any other trade-mark, term, or designation.
- Use the CodeIgniter trade-mark only in connection with goods and services directly 
	related to CodeIgniter or services associated with that trade-mark.
- Do not use the CodeIgniter trade-mark or any variation of it in your domain name or URL.
- Do not use the CodeIgniter trade-mark for your own products and services that are 
	related to web publishing, programming frameworks, or related software.
- Do not claim ownership rights in the CodeIgniter trade-mark.
EOS;

$thirdParty = <<<'EOS'
Mention of third party companies and products on this web site is for informational 
purposes only and constitutes neither an endorsement nor a recommendation.
EOS;

$externalLinks = <<<'EOS'
BCIT and the CodeIgniter Foundation make no representations whatsoever about any 
other websites which you may access from here. When you access an external website, 
please understand that it is independent from the BCIT website and from this 
website, and that we has no control over the content on that website. A link to 
a non-BCIT we site does not mean that BCIT or the CodeIgniter Foundation endorse 
or accept any responsibility for the content or use of such website.
EOS;

return [
	'title'				 => 'The Fine Print',
	'marksTitle'		 => 'Trade-marks',
	'marksText'			 => $trademarks,
	'marksLink'			 => '[several versions of the CodeIgniter logo](/data/ci-logo.zip)',
	'logoTitle'			 => 'Privacy Policy',
	'logoText'			 => $logoGuidelines,
	'logoLink'			 => '[several versions of the CodeIgniter 4 logo](/data/ci4-logo.zip)',
	'thirdPartyTitle'	 => 'Website data',
	'thirdPartyText'	 => $thirdParty,
	'externalLinksTitle' => 'Links to Other Web Sites',
	'externalLinksText'	 => $externalLinks,
	'endText'			 => 'We invite you to read BCIT\'s [main privacy page](http://www.bcit.ca/privacy/)'
];
