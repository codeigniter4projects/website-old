<?php
/**
 * Responsible disclosure page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$responsibleDisclosure = <<<'EOS'
If you discover a vulnerability, we would like to know about it so we can take 
steps to address it as quickly as possible. We would like to ask you to 
help us better protect our clients and our systems.

Please do the following:

- E-mail your findings to [security@codeigniter.com](mailto:security@codeigniter.com) 
	or report them on our [HackerOne page](https://hackerone.com/codeigniter)
- Do not take advantage of the vulnerability or problem you have discovered, 
	for example by downloading more data than necessary to demonstrate the 
	vulnerability or deleting or modifying other people's data
- Do not reveal the problem to others until it has been resolved
- Do not use attacks on physical security, social engineering, distributed denial 
	of service, spam or applications of third parties, and
- Do provide sufficient information to reproduce the problem, so we will be able 
	to resolve it as quickly as possible. Complex vulnerabilities may require further explanation.

What we promise:

- If you have followed the instructions above, we will not take any legal action against you in regard to the report
- We will handle your report with strict confidentiality, and not pass on your personal details to third parties without your permission
- We will keep you informed of the progress towards resolving the problem, and
- Where appropriate, we are happy to credit those who find or fix security issues.

We strive to resolve all problems as quickly as possible, and if applicable we 
would like to play a role in the publication of the problem after it is resolved. 
EOS;


return [
	'title'		 => 'Responsible Disclosure',
	'heading'	 => 'At CodeIgniter, we consider the security of our systems a top priority. ',
	'subheading' => 'But no matter how much effort we put into system security, there can still be vulnerabilities present. ',
	'theText'	 => $responsibleDisclosure
];
