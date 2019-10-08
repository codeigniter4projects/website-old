<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
Dự án CodeIgniter có sự giúp đỡ của một vài người thông thái, để giám sát việc tiếp tục
phát triển CodeIgniter 3 và để điều khiển khung công tác lên cấp độ tiếp theo, CodeIgniter 4.
EOS;


$hatsOffToThese = <<<'EOS'
Chúng tôi rất biết ơn những đóng góp trong quá khứ từ cộng đồng.

Hội đồng: Andreas Pfotenhauer (Đức), David Wosnitza (Đức), và
Julian Gamperl (Đức).

Thành lập: Albert Leao (Hoa Kỳ), Brian Gottier (Hoa Kỳ), Dave Friend, Paradinight,
Pertti Soomann, php_rocs, sv3tli0 (Bulgaria)

Logo: Philippe Lucidarme (Pháp)

Bảo mật: Debaken Mohanty (New Zealand)

Trang web: Lonnie Ezell (Hoa Kỳ), Michał niatała (Ba Lan) và Raymond King (Hoa Kỳ).

Cũng cảm ơn tất cả các thành viên trong cộng đồng đã xây dựng
đề xuất để cải thiện thiết kế và khả năng sử dụng của trang web, hoặc những người đã báo cáo lỗ hổng!
EOS;

return [
	'title'		 => 'Giới thiệu về CodeIgniter',
	'wiseTitle'	 => 'Đàn ông khôn ngoan',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => 'Sự nhìn nhận',
	'ackText'	 => $hatsOffToThese,
];
