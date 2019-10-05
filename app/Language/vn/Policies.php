<?php
/**
 * Help/policies page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$termsOfService = <<<'EOS'
Tất cả các tin nhắn được đăng trên trang web hoặc diễn đàn này thể hiện quan điểm của các tác giả,
và không nhất thiết phản ánh quan điểm của chủ sở hữu và quản trị viên của trang web này.

Bằng cách đăng ký trên diễn đàn, bạn đồng ý không đăng bất kỳ tin nhắn tục tĩu nào,
thô tục, vu khống, hận thù, đe dọa, hoặc vi phạm bất kỳ luật nào.
Chúng tôi sẽ vĩnh viễn cấm tất cả người dùng làm như vậy.

Chúng tôi có quyền xóa, chỉnh sửa hoặc di chuyển bất kỳ tin nhắn nào vì bất kỳ lý do gì.
EOS;

$privacyPolicy = <<<'EOS'
Chúng tôi cam kết tôn trọng và bảo vệ sự riêng tư trực tuyến của bạn.

Chúng tôi chỉ thu thập thông tin cá nhân của bạn khi bạn tự nguyện đăng ký
tài khoản thành viên để sử dụng diễn đàn CodeIgniter. Truy cập vào của chúng tôi
trang web thường không bị hạn chế và bạn có thể duyệt nó ẩn danh.

Mọi thông tin được thu thập từ bạn sẽ không được tiết lộ, theo BC's
Quyền tự do thông tin và bảo vệ quyền riêng tư (RSBC 1996 ch. 165).
EOS;

$websiteData = <<<'EOS'
Máy chủ của chúng tôi tự động thu thập thông tin cần thiết để vận hành và
duy trì bảo mật của trang web. Các thông tin được thu thập có thể bao gồm:
loại trình duyệt, tên Nhà cung cấp dịch vụ Internet (ISP) và địa chỉ IP.
	
Trang web này chứa các liên kết đến các trang web của bên thứ ba và chúng tôi không chịu trách nhiệm về các quy định về quyền riêng tư của các trang web khác đó.

Một số phần của trang web có thể phân phối các mẩu thông tin nhỏ
(được gọi là "cookie") cho các trình duyệt web, để hỗ trợ bạn khi bạn quay lại
khu vực cụ thể trên trang web. Nếu bạn lo lắng về cookie, bạn có thể thay đổi
cài đặt trình duyệt web của bạn không chấp nhận thông tin này hoặc để hiển thị các thông báo cảnh báo.

Chúng tôi mời bạn đọc của BCIT[trang riêng tư chính](http://www.bcit.ca/privacy/)
EOS;

return [
	'title'			 => 'Chính sách',
	'termsTitle'	 => 'Điều khoản dịch vụ',
	'termsText'		 => $termsOfService,
	'privacyTitle'	 => 'Chính sách bảo mật',
	'privacyText'	 => $privacyPolicy,
	'dataTitle'		 => 'Dữ liệu trang web',
	'dataText'		 => $websiteData,
];
