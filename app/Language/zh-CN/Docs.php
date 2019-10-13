<?php
/**
 * Docs page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */



$ci4DocsText = <<<'EOS'
CodeIgniter 4 是即将发布的框架版本, 授权于[MIT License]。
(https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/userguide/" 
		   class="nav-link btn-success" title="在线阅读">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://github.com/codeigniter4/userguide/archive/{v4name}.zip" class="nav-link btn-primary" title="下载用户指南">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="https://codeigniter4.github.io/api/" 
		   class="nav-link btn-success" title="在线阅读">
			<i class="glyphicon glyphicon-book"></i> {apidocsButton}
		</a>
	</li>
</ul>

EOS;

$ci3DocsText = <<<'EOS'
CodeIgniter 3 是框架的当前版本, 授权于[MIT License]。
(http://cisite.local/user_guide/license.html).

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a href="/user_guide/index.html" 
		   class="nav-link btn-primary" title="在线阅读">
			<i class="glyphicon glyphicon-book"></i> {onlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter-{v3name}-userguide.zip" class="nav-link btn-primary" title="下载用户指南">
			<i class="glyphicon glyphicon-save"></i> {offlineButton}
		</a>
	</li>
	<li class="nav-item" style="margin:0.5em;">
		<a href="/data/CodeIgniter User Guide {v3name}.epub" 
		   class="nav-link btn-primary" title="在线阅读">
			<i class="glyphicon glyphicon-save"></i> {epubButton}
		</a>
	</li>
</ul>

EOS;

return [
	'title'			 => 'CodeIgniter 说明文档',
	'heading'		 => 'CodeIgniter 的主要文档是其 用户指南。',
	'subheading'	 => '用户指南里 包含了 一份简单介绍, 教程, 一些 "how to (怎么做)" 说明, 以及框架组件的参考文档。',
	'ci4Title'		 => 'CodeIgniter 4',
	'ci4Text'		 => $ci4DocsText,
	'ci3Title'		 => 'CodeIgniter 3',
	'ci3Text'		 => $ci3DocsText,
	'onlineButton'	 => '在线 用户指南（UG）',
	'offlineButton'	 => '离线 用户指南（UG）',
	'apidocsButton'	 => 'API 文件',
	'epubButton'	 => 'epub 用户指南（UG）'
];
