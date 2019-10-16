<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
フォーラムやGithubではなく、[セキュリティチーム]
（mailto：security@codeigniter.com）にメールで
セキュリティの問題を報告してください。	
EOS;

$forumCommunity = <<<'EOS'
フォーラムはMyBBを使用してセットアップされており、5つの主要なカテゴリがあります：

- 一般的な（ニュースとディスカッション、ラウンジ、イベント、地域ユーザーグループ）
- CodeIgniterの使いかた（CodeIgniterの選択、インストールとセットアップ、モデルビューコントローラー、ライブラリとヘルパー、ベストプラクティス、一般的なヘルプ）
- CodeIgniter 4（ロードマップ、開発、機能要求、サポート、ディスカッション）
- 開発（CodeIgniter 3.x、CodeIgniter 2.x、問題）
- 外部リソース（アドイン、ジョブ、詳細、スポットライト）

**フォーラムでは、フレームワークに関する問題を議論したり、助けを求めたりできます。**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniterにはSlackチャンネルがあり、コミュニティのメンバーと交流できます。
誰でも[サインアップ]（http://codeignitersignup.ciblox.com/）できます :)

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
開発アクションはGithubで行われます。詳細については、寄稿ページを参照してください。

** Githubリポジトリでは、バグレポート（Githubの問題）を提出できます。または
フレームワークの拡張または修正のためのプルリクエストを送信できます。
Githubは、サポートやヘルプのためではありません。代わりにフォーラムを使用してください。**

Githubの問題は、特定のリリースに関連付けられることが多い、計画および承認された
拡張機能の追跡にも使用されます。

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
	'title'			 => 'CodeIgniterコミュニティ',
	'heading'		 => 'CodeIgniterはコミュニティが開発したオープンソースプロジェクトであり、コミュニティメンバーがアイデアを収集して交換するためのいくつかの場所を備えています。',
	'securityText'	 => $securityPlug,
	'team'			 => 'セキュリティチーム',
	'forumTitle'	 => 'フォーラム',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => 'Slack',
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'フォーラムにアクセス',
	'slackButton'	 => 'Slackにアクセス',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
