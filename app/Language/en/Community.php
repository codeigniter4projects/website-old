<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
Security issues should be reported with an email to our
[security team](mailto:security@codeigniter.com), rather
than being brought up on the forum or raised as a Github issue, thanks!	
EOS;

$forumCommunity = <<<'EOS'
Our forum has been setup using MyBB, with five main categories:

- General (news & discussion, lounge, events, and regional user groups)
- Using CodeIgniter (choosing CodeIgniter, installation & setup, model-view-controller, libraries & helpers, best practices, and general help)
- CodeIgniter 4 (Roadmap, Development, feature requests, support, discussion)
- Development (CodeIgniter 3.x, CodeIgniter 2.x, and issues)
- External Resources (addins, jobs, learn more, and spotlight)

**The forum is where you can ask for help or discuss issues you are having with framework.**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniter has a Slack channel, where you can engage with other members of the community. 
Anyone can [signup](http://codeignitersignup.ciblox.com/) for it :) 

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
The development action takes place on Github. See the contribute page for more details.

**The Github repository is where you can file bug reports (github issues), or 
where you can submit pull requests for enhancements to or fixes for framework. 
Github is *not* for support or help ... use the forum instead.**

Github issues are also used for tracking planned and approved enhancements, 
often tied in to specific releases.

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://github.com/codeigniter4/codeigniter4/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {ci4Button}</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://github.com/bcit-ci/CodeIgniter/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {ci3Button}</a>
	</li>
</ul>
EOS;

return [
	'title'			 => 'CodeIgniter Community',
	'heading'		 => 'CodeIgniter is a community-developed open source project, with several venues for the community members to gather and exchange ideas. ',
	'securityText'	 => $securityPlug,
	'team'			 => 'security team',
	'forumTitle'	 => 'Forum',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => 'Slack',
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Visit the forum',
	'slackButton'	 => 'Visit Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
