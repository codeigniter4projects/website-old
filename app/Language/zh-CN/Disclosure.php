<?php
/**
 * Responsible disclosure page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$responsibleDisclosure = <<<'EOS'
如果你发现一个漏洞，我们想知道它，所以我们可以采取 
步骤尽可能快地解决它。 我们想请你 
帮助我们更好地保护我们的客户和我们的系统。

请执行以下操作:

-电子邮件您的调查结果[security@codeigniter.com](mailto:security@codeigniter.com) 
	或报告他们在我们的[HackerOne页面](https://hackerone.com/codeigniter)
-不要利用你发现的漏洞或问题, 
	例如通过下载更多的数据比必要的证明 
	漏洞或删除或修改其他人的数据
-不要透露给别人的问题，直到它得到解决
-不要使用物理安全，社会工程，分布式拒绝服务攻击 
	第三方的服务、垃圾邮件或应用程序，以及
-不要提供足够的信息来重现的问题，所以我们将能够 
	尽快解决它。 复杂的漏洞可能需要进一步解释。

我们的承诺:

-如果您按照上述指示行事，我们不会就报告采取任何法律行动
-我们将严格保密处理您的报告，未经您的许可，不会将您的个人信息传递给第三方
-我们将随时向您通报解决问题的进展情况，并
-在适当的情况下，我们很高兴地信贷那些谁找到或修复安全问题。

我们努力尽快解决所有问题，如果适用，我们 
想在问题解决后发布发挥作用。
EOS;


return [
	'title'		 => '责任披露',
	'heading'	 => '在CodeIgniter，我们认为我们的系统的安全性是首要任务。',
	'subheading' => '但无论我们投入多少精力进入系统安全，仍然可以有漏洞存在。',
	'theText'	 => $responsibleDisclosure
];
