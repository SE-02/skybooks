# =========> TỔNG QUAN VỀ DỰ ÁN <========

# Tên dự án: Skybooks
# URL:
# Công nghệ sử dụng: 
Front end	Jquery, Jquery UI, datepicker, star rating, bootstrap ...
Backend	PHP 5.6 + MySQL 5.1.x + Cakephp 3 ...
	
# Thành viên: 	
	Đặng Thị Kim Quý
	Nguyễn Thị Thu
	Ngô Thị Hồng Nhung
	Nguyễn Thị Oanh
# 1. Tổng quan dự án
	- Yêu cầu:
		>+Phần mềm xây dựng để nhà sách quản lí sách và thực hiện mua bán sách online với khách hàng.
		>+Thiết kế cơ sở dữ liệu đơn giản nhưng đạt hiệu quả cao trong lưu trữ dữ liệu và truy vấn.
		>+Dễ dàng tìm kiếm thông tin, chỉnh sửa.
		>+Bảo mật thông tin hiệu quả.
		>+Dễ dàng nâng cấp phần mềm.
		>+Giao diện thân thiện, trực quan bằng Tiếng Việt, các form đơn giản dễ thao tác.

	- Website kinh doanh và quản lí các loại sách.
	  Mỗi User có tài khoản để đăng nhập và sẽ có 2 quyền cho các tài khoản : 1 Admin và các Member. 
	  Tuy nhiên, users không đăng kí làm thành viên vẫn có thể mua hàng.
	- Admin:
		>+  Được phép quản lí sách, quản lí danh mục sách, quản lí kho hàng, và các chương trình khuyến mại.
		>+  Xem chi tiết các loại sách.
		>+  Xem thông tin sản phẩm tồn kho.
		>+  Xem danh sách đơn đặt hàng của khách hàng.
		>+  Quản lí các phản hồi của khách hàng.
		>+  Xem báo cáo bán hàng thống kê theo các tháng trong năm.

	- Member:
		>+  Có thể đăng kí thành viên hoặc không đăng kí vẫn có thể mua hàng.  Nếu có tài khoản đăng nhập sẽ xem được lịch sử mua hàng trước đó của bản thân.
		>+  Xem danh sách danh mục sách và các sản phẩm đang bán tại cửa hàng.
		>+  Xem các chương trình khuyến mại và khuyến mại đặc biệt.
		>+  Tìm kiếm sản phẩm theo nhu cầu mua.
		>+  Xem chi tiết sản phẩm với các thông tin: tên, tình trạng, giá bìa,
		 giá giảm, tiết kiệm, mô tả.
		>+  Xem thông tin giới thiệu nhà sách và có khả năng liên hệ với nhà sách để phản hồi thông tin về thái độ nhân viên, chất lượng sản phẩm,…
		>+  Xem gợi ý mua sách cùng loại và sách cùng tác giả.
		>+  Xem giỏ hàng khi mua sách.
		>+  Đặt và mua sách online.
		>+  Xem đơn hàng khi đặt hàng thành công.
		>+  Xem thông tin nhà sách, chính sách đổi trả và bảo hành sản phẩm.
		>+  Xem hình thức thanh toán.
# 2. Quy định về sử dụng git
	- Chỉ sử dụng command line git bash, không sử dụng tool khác.
	- Branch: Các task khi làm sẽ checkout từ master
	- Trước khi merge code cần kiểm tra behind + ahead trên giao diện github
		
# 3. Quy định về code
	- Không được format code những phần không liên quan.
	- Đặt tên branch theo tên task đang làm.
	- Code xong sẽ phải báo branch để team review code tránh ảnh hưởng đến những phần khác.
	- Khi sửa task nào mang tính core thì cần các nhận sẽ làm gì với team trước khi bắt đầu.
	- Config cac bien moi truong thi se config trong file url_config.php
	- Định nghĩa các hằng số trong file constant.php (không hard code).
	- 
	....
	
## *Chú ý: Nếu không hiểu thì hỏi kĩ team trước khi làm.
