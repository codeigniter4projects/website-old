<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
CodeIgniterプロジェクトは、数名の賢者の助けを借りて、継続的に
CodeIgniter 3を開発し、フレームワークをCodeIgniter 4に誘導します。
EOS;


$hatsOffToThese = <<<'EOS'
コミュニティからの過去の貢献に感謝します。

会議：アンドレアス・プフォーテンハウアー（ドイツ）、デビッド・ウォズニツァ（ドイツ）、および
ヨハネス・ガンペル（ドイツ）。

財団：アルバート・レオ（アメリカ）、ブライアン・ゴッティア（アメリカ）、デイブ・フレンド、パラディナイト、
ペルティ・スーマン、php_rocs、sv3tli0（ブルガリア）

ロゴ：フィリップ・ルシダルメ（フランス）

警備：デバシス・モハンティ(ニュージーランド)

ウェブサイト：ロニー・エゼル（アメリカ）、ミチャウ・シニャタワ（ポーランド）、およびレイモンド・キング
（ブルガリア）.

同様に、サイトのデザインとユーザビリティを改善するために建設的な提案を行ったコミュニティメンバー、
または脆弱性を報告してくれたすべてのコミュニティメンバーにも感謝します！
EOS;

return [
	'title'		 => 'CodeIgniterについて',
	'wiseTitle'	 => '賢者',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => '鑑賞',
	'ackText'	 => $hatsOffToThese,
];
