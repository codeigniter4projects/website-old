<?php
/**
 * Help/legal page messages for the CodeIgniter website.
 * The text blocks use markdown format.
 */
$trademarks = <<<'EOS'
CodeIgniter® is a registered trademark of the British Columbia Institute of Technology (BCIT), 
having being transferred from EllisLab, Inc in 2014.	

<div>
<img class="pull-left" src="/assets/images/tl-ci.gif"/>
CodeIgniter徽标是由BCIT拥有的未注册标记, 
已经从EllisLab公司转移 我们提供{标记链接} 
在您的项目中使用，根据以下准则。
</div>

![http://creativecommons.org/licenses/by/4.0/](https://i.creativecommons.org/l/by/4.0/88x31.png)
这项工作是根据知识共享署名4.0国际许可许可。

---
BCIT和不列颠哥伦比亚理工学院的独特标志 
(（例如BCIT徽标）是不列颠哥伦比亚理工学院的注册商标
EOS;

$logoGuidelines = <<<'EOS'
欢迎您在您的项目中使用CodeIgniter徽标，前提是您。..

-不要让未经授权或混淆使用的CodeIgniter商标或它的变化, 
	包括创造印象BCIT发起人或赞同您的网站、产品或服务。
-当您使用CodeIgniter注册商标时，请使用商标注册符号。
-使用大小写和粗体或斜体字体来区分CodeIgniter商标从它周围的文本。
-至少在网页上使用CodeIgniter商标和 
	在标题页的任何文档或销售文献轴承CodeIgniter商标。 
	可接受图例的一个例子是："CodeIgniter标记是由BCIT拥有并注册的。"
-使用CodeIgniter在网页上至少显着放置一次免责声明 
	商标和标题页上的任何文档或销售文献轴承 
	该CodeIgniter商标。 一个可接受的免责声明的例子是: "\_________ 是一个 
	独立\_________ 且未经BCIT授权、赞助或以其他方式批准。"  
	[在每种情况下，用产品的名称和类型填充空白空间。]
-不要更改拼写，对CodeIgniter商标进行其他更改, 
	或将CodeIgniter商标与任何其他商标，术语或指定相结合。
-使用CodeIgniter商标只与商品和服务直接连接 
	与该商标相关的CodeIgniter或服务。
-不要使用CodeIgniter商标或它的任何变化在您的域名或URL。
-不要使用CodeIgniter商标为您自己的产品和服务是 
	与web发布、编程框架或相关软件相关。
-不要主张所有权的守旧者商标。
EOS;

$thirdParty = <<<'EOS'
提及本网站上的第三方公司和产品是为了提供信息 
仅为目的，既不构成认可也不构成建议。
EOS;

$externalLinks = <<<'EOS'
BCIT和CodeIgniter基金会不代表任何人 
您可以从此处访问的其他网站。 当您访问外部网站时, 
请理解它是独立于BCIT网站和从本 
我们无法控制该网站上的内容。 一个链接到 
非BCIT网站并不意味着BCIT或CodeIgniter基金会认可 
或对此类网站的内容或使用承担任何责任。
EOS;

return [
	'title'				 => '小字',
	'marksTitle'		 => '商标',
	'marksText'			 => $trademarks,
	'marksLink'			 => '[several versions of the CodeIgniter logo](/data/ci-logo.zip)',
	'logoTitle'			 => '隐私政策',
	'logoText'			 => $logoGuidelines,
	'logoLink'			 => '[several versions of the CodeIgniter 4 logo](/data/ci4-logo.zip)',
	'thirdPartyTitle'	 => '网站数据',
	'thirdPartyText'	 => $thirdParty,
	'externalLinksTitle' => 'Links to Ot其他网站的链接her Web Sites',
	'externalLinksText'	 => $externalLinks,
	'endText'			 => '我们邀请您阅读BCIT [main privacy page](http://www.bcit.ca/privacy/)'
];
