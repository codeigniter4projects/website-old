<?php
/**
 * Community page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$securityPlug = <<<'EOS'
Các vấn đề bảo mật nên được báo cáo với một email đến chúng tôi
[nhóm bảo mật] (mailto: security@codeigniter.com), thay vào đó
hơn là được đưa lên diễn đàn hoặc được nêu lên như một vấn đề của Github, cảm ơn!
EOS;

$forumCommunity = <<<'EOS'
Diễn đàn của chúng tôi đã được thiết lập bằng MyBB, với năm loại chính:

- Chung (tin tức & thảo luận, phòng chờ, sự kiện và nhóm người dùng trong khu vực)
- Sử dụng CodeIgniter (chọn CodeIgniter, cài đặt & thiết lập, trình điều khiển chế độ xem mô hình, thư viện và người trợ giúp, thực tiễn tốt nhất và trợ giúp chung)
- CodeIgniter 4 (Lộ trình, Phát triển, yêu cầu tính năng, hỗ trợ, thảo luận)
- Phát triển (CodeIgniter 3.x, CodeIgniter 2.x và các vấn đề)
- Tài nguyên bên ngoài (addins, công việc, tìm hiểu thêm và chú ý)

**Diễn đàn là nơi bạn có thể yêu cầu trợ giúp hoặc thảo luận về các vấn đề bạn đang gặp phải với khung.**

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-primary" href="{mybb_forum_url}"><i class="glyphicon glyphicon-share"></i> {forumButton}</a>
	</li>
</ul>
EOS;

$slackCommunity = <<<'EOS'
CodeIgniter có một kênh Slack, nơi bạn có thể tham gia với các thành viên khác trong cộng đồng.
Bất cứ ai cũng có thể [đăng ký](http://codeignitersignup.ciblox.com/) cho nó :) 

<ul class="nav nav-pills justify-content-center">
	<li class="nav-item" style="margin:0.5em;">
		<a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
			<i class="glyphicon glyphicon-share"></i> {slackButton}</a>
	</li>
</ul>
EOS;

$githubCommunity = <<<'EOS'
Các hành động phát triển diễn ra trên Github. Xem trang đóng góp để biết thêm chi tiết.

**Kho lưu trữ Github là nơi bạn có thể gửi báo cáo lỗi (sự cố github) hoặc
nơi bạn có thể gửi yêu cầu kéo để cải tiến hoặc sửa lỗi cho khung.
Github là * không * để hỗ trợ hoặc giúp đỡ ... thay vào đó hãy sử dụng diễn đàn.**

Các vấn đề về Github cũng được sử dụng để theo dõi các cải tiến được lên kế hoạch và phê duyệt,
thường gắn liền với các bản phát hành cụ thể.

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
	'title'			 => 'CodeIgniter cộng đồng',
	'heading'		 => 'CodeIgniter là một dự án nguồn mở do cộng đồng phát triển, với một số địa điểm để các thành viên cộng đồng thu thập và trao đổi ý tưởng. ',
	'securityText'	 => $securityPlug,
	'team'			 => 'đội an ninh',
	'forumTitle'	 => 'Diễn đàn',
	'forumText'		 => $forumCommunity,
	'slackTitle'	 => 'Chậm',
	'slackText'		 => $slackCommunity,
	'githubTitle'	 => 'Github',
	'githubText'	 => $githubCommunity,
	'forumButton'	 => 'Chuyến thăm diễn đàn',
	'slackButton'	 => 'Chuyến thăm Slack',
	'ci4Button'		 => 'CodeIgniter 4',
	'ci3Button'		 => 'CodeIgniter 3',
];
