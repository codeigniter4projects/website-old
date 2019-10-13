<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
安全问题应通过电子邮件报告给我们[安全小组](mailto:security@codeigniter.com), 
宁而不是在论坛上提出来或作为Github问题提出来，谢谢！
EOS;

$forumCommunity = <<<'EOS'
我们的论坛已使用MyBB进行设置，分​​为五个主要类别：

- 一般 (新闻和讨论，休息室，活动和区域用户组)
-常规（新闻与讨论，休息室，活动和区域用户组）
- 使用 CodeIgniter (选择 CodeIgniter, 安装和设置，模型视图控制器，库和帮手，最佳实践以及一般帮助)

-使用CodeIgniter（选择CodeIgniter，安装和设置，模型视图控制器，库和帮助器，最佳实践以及一般帮助）
- CodeIgniter 4 (路线图，开发，功能请求，支持，讨论)
- 发展历程 (CodeIgniter 3.x, CodeIgniter 2.x, 和问题)CodeIgniter has a channel
- 外部资源 (插件，工作，了解更多信息和聚焦)

**您可以在论坛上寻求帮助或讨论与框架有关的问题。**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniter有一个Slack频道, 在这里您可以与社区的其他成员交谈。
任何人都可以[注册](http://codeignitersignup.ciblox.com/) 为了它 :) 

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
开发行动发生在Github上。有关更多详细信息，请参见贡献页面。

**Github存储库是您可以提交错误报告（github问题）的地方, 要么
您可以在其中提交对框架进行增强或修复的拉取请求。 
Github *不是*支持或帮助的...使用论坛代替**

Github问题也用于跟踪已计划和已批准的增强功能，
通常与特定版本相关。

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
	'heading'		 => 'CodeIgniter 是社区开发的开源项目，它为社区成员提供了收集和交流思想的多个场所。',
	'securityText'	 => $securityPlug,
	'team'			 => '安全团队',
	'forumTitle'	 => '论坛',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => "Slack",
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => '访问论坛',
	'slackButton'	 => '访问 Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
