<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
CodeIgniter项目在几个人的帮助下，监督了开发CodeIgniter 3，并将框架控制到下一个级别，即CodeIgniter 4。
EOS;

$hatsOffToThese = <<<'EOS'
我们感谢社区过去的贡献。

理事会： Andreas Pfotenhauer (德国), David Wosnitza (德国), 和 Johannes Gamperl (德国)

基础：Albert Leao (美国), Brian Gottier (美国), Dave Friend, Paradinight, Pertti Soomann, php_rocs, sv3tli0 (保加利亚)

商标: Philippe Lucidarme (法国)

安全： Debasis Mohanty (新西兰)

网站： Lonnie Ezell (美国), Michał Śniatała (波兰) and Raymond King (美国).


还要感谢所有做出过贡献的社区成员改善网站设计和可用性的建议，或已举报漏洞的人的建议！
EOS;


return [
	'title'		 => "关于 CodeIgniter",
	'wiseTitle'	 => '智者',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => '致谢',
	'ackText'	 => $hatsOffToThese,
];
