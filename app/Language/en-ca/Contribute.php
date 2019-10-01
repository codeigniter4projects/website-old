<?php
/**
 * Contribute page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$introductionContribution = <<<'EOS'
CodeIgniter is a community driven project and accepts contributions of code and 
documentation from the community. These contributions are made in the form of 
Issues or Pull Requests on the [CodeIgniter repository](https://github.com/bcit-ci/CodeIgniter) on GitHub.

Issues are a quick way to point out a bug. If you find a bug or documentation error in CodeIgniter then please check a few things first:

- There is not already an open Issue
- The issue has already been fixed (check the develop branch, or look for closed Issues)
- Is it something really obvious that you fix it yourself?
- If you are unsure if you have found a bug, then start a new thread in the 
	CodeIgniter forum, in the [Issues section](http://cisite.local/%3C?=%20config_item(%27mybb_forum_url%27)%20?%3E/forum-19.html)!

Reporting issues is helpful but an even better approach is to send a Pull Request, 
which is done by “Forking” the main repository and committing to your own copy. 
This will require you to use the version control system called Git. 		
  
*Note: the two GitHub links above are for the CodeIgniter 3 repository. They will be replaced with the CodeIgniter 4 ones once it launches.*		

EOS;

$ci4Contributions = <<<'EOS'
CodeIgniter 4 has its own [Github repository](https://github.com/codeigniter4/CodeIgniter4). 
It deviates enough from CodeIgniter 3 that we want to keep them separate. 
The CodeIgniter 4 roadmap is explained on [our forum](http://forum.codeigniter.com/forum-28.html), 
and work to be done is detailed in the [repository issues](https://github.com/codeigniter4/CodeIgniter4/issues). 		
EOS;

$securityContributions = <<<'EOS'
Security issues should be reported with an email to our security team, rather 
than being brought up on the forum or raised as a Github issue, thanks!
Read more about [responsible disclosure](/contribute/responsible). 		
EOS;

$testingContributions = <<<'EOS'
#### Testers
We always need feedback on what works and what does not! Most of the development 
effort is going into Version 3, so that is where the need is greatest. 
If you find something that is definitely a bug, and you are a Github user, 
please create a new "issue". If you are not a Github user, or if you are 
unsure if you have found a bug, then start a new thread in the CodeIgniter 
forum [Issues section](https://forum.codeigniter.com/forum-19.html)!

*CodeIgniter 4 has its own [support subforum](https://forum.codeigniter.com/forum-30.html).		*
EOS;

$writingContributions = <<<'EOS'
#### Writers
   
Every project needs good documentation! The CodeIgniter user guide is part of the 
[Github project](https://github.com/bcit-ci/CodeIgniter) (mentioned above), 
and there is always room for more tutorials.

CodeIgniter 4's user guide is part of its own [repository](https://github.com/codeigniter4/CodeIgniter4).
EOS;

$evangelistContributions = <<<'EOS'
#### Evangelists   
	
The word needs to be spread about good and worthy projects, which we think CodeIgniter is :) 
You can help by being active in the forums, answering questions, and by 
spreading the word inside your developer or user community.		
EOS;

$moderatorContributions = <<<'EOS'
#### Moderators
   
The forum can always use moderators, to make sure that discussions/threads stay on topic, and to weed out the inappropriate users or comments!		
EOS;

$designerContributions = <<<'EOS'
#### Designers
   
Suggestions and help with our website, User Guide, and forum design are always welcome! 
We are working on themes for each of these, which will be shared in their own Github repository. 		
EOS;

$coderContributions = <<<'EOS'
#### Coders
   
If you would like to get involved in helping to build the next version of CodeIgniter, 
join us on [Github](https://github.com/bcit-ci/CodeIgniter)! 
A detailed [contribution guide](http://cisite.local/userguide3/contributing/index.html) 
is in the User Guide, but the main points are to make sure your code conforms to 
our [style guide](http://cisite.local/userguide3/general/styleguide.html), 
that it is properly documented, and that you use the 
[Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model.

*CodeIgniter 4 equivalent links: its [repository](https://github.com/codeigniter4/CodeIgniter4), 
its [contribution guide](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing), 
and its [style](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst).*
EOS;

$reviewerContributions = <<<'EOS'
#### Reviewers
   
Every project needs a core group of developers, familiar with the project standards 
and conventions, to review proposed enhancements and fixes. 
We have been really fortunate with our group of reviewers so far, and hope to recruit a few more.		
EOS;


return [
	'title'				 => 'Contribute to CodeIgniter',
	'heading'			 => 'There are many ways to contribute to the CodeIgniter project, whether you are a developer or not. ',
	'topText'			 => $introductionContribution,
	'ci4Title'			 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4Contributions,
	'securityText'		 => $securityContributions,
	'notcoderSection'	 => 'Not a Programmer?',
	'testerText'		 => $testingContributions,
	'writerText'		 => $writingContributions,
	'evangelistText'	 => $evangelistContributions,
	'moderatorText'		 => $moderatorContributions,
	'designerText'		 => $designerContributions,
	'coderSection'		 => 'Are You a Programmer?',
	'coderText'			 => $coderContributions,
	'reviewerText'		 => $reviewerContributions,
	'ackTitle'			 => 'Acknowledging Our Top Contributors',
	'ack1'				 => '... CodeIgniter 3',
	'ack2'				 => '... CodeIgniter 3 translations',
	'ack3'				 => '... CodeIgniter4',
	'ack4'				 => '... CodeIgniter 4 translations',
	'ack5'				 => '... our original Website',
	'ack6'				 => '... our revised Website (CI4)',
];
