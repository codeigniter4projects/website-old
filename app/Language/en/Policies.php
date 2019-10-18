<?php
/**
 * Help/policies page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$termsOfService = <<<'EOS'
All messages posted on this website or forum express the views of the authors, 
and do not necessarily reflect the views of the owners and administrators of this site.	

By registering on the forum, you agree not to post any messages that are obscene, 
vulgar, slanderous, hateful, threatening, or that violate any laws. 
We will permanently ban all users who do so.

We reserve the right to remove, edit, or move any messages for any reason.
EOS;

$privacyPolicy = <<<'EOS'
We are committed to respecting and protecting your online privacy.
	
We only collect your personal information when you voluntarily sign-up for a 
membership account in order to use the CodeIgniter forum. Access to our 
website is generally unrestricted, and you may browse it anonymously.

Any information collected from you will not be disclosed, in accordance with BC's 
Freedom of Information and Protection of Privacy Act (RSBC 1996 ch. 165).
EOS;

$websiteData = <<<'EOS'
Our servers automatically collect information that is essential to operating and 
maintaining the website's security. The information collected may include: 
browser type, Internet Service Provider (ISP) name, and IP address.
	
This website contains links to third party websites, and we are not responsible for the privacy provisions of those other websites.

Some portions of the website may distribute small pieces of information 
(called "cookies") to web browsers, to assist you when you return to 
specific areas on the site. If you have concerns about cookies, you can change 
your web browser settings not to accept this information, or to display warning messages.
EOS;

return [
	'title'			 => 'Policies',
	'termsTitle'	 => 'Terms of Service',
	'termsText'		 => $termsOfService,
	'privacyTitle'	 => 'Privacy Policy',
	'privacyText'	 => $privacyPolicy,
	'dataTitle'		 => 'Website data',
	'dataText'		 => $websiteData,
];
