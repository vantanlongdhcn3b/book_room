# Website booking-hotel
## Mô tả:
- Website booking-hotel là một hệ thống tra cứu và đặt phòng khách sạn trực tuyến.
- Website cho phép admin có quyền cập nhật, thêm sửa, xóa các thông tin, bài viết, ảnh phòng khách sạn.
- Website cho phép người dùng có thể truy cập và tìm kiếm thông tin các phòng, giá cả, khách sạn.
- Website áp dụng cho các chuỗi khách sạn và phân quyền theo roll cao nhất.
- Website cung cấp hệ thống combo các phòng và dịch vụ kèm theo, giá cả thông tin lên trang web.
### Website bao gồm các chức năng sau:
- Quản lý các phòng, combo phòng và các dịch vụ kèm theo bao gồm các ngày bình thường, ngày lễ, tết.
- Hệ thống cho phép ngươi dùng tìm kiếm nhanh các phòng khách sạn, đặt phòng online vào ngày cụ thể.
- Tích hợp các trình soạn thảo văn bản trong trang web cho phép đăng tải bài viết.
- Admin thực hiện: thêm, xóa, sửa, cập nhật các thông tin bài viết như phòng trống, giá, thông tin phòng, hình ảnh kèm theo.
### Hệ thống sẽ bao gồm các trang như:
- Trang chủ
- Liên hệ
- Bài viết(ảnh phòng, giá phòng,thông tin phòng, phản hồi của khách hàng)
- Lịch đặt phòng
- Gía phòng
- Combo khuyến mãi
- Trang admin
- Trang đặt phòng
## Mục đích của bài toán:
- Website xây dựng một hệ thống cho phép khách hàng có thể tra cứu cài đặt các phòng khách sạn dựa trên các ngày nghỉ, ngày bình thường, ngày lễ, tết được người quản trị cập nhật.
- Người quản trị sẽ đăng tải các bài viết và ảnh về phòng khách sạn và phân loại chúng theo:
    1. Dịp lễ : ngày lễ trong năm, lễ tết.
    2. Theo danh mục combo : Ngày cuối tuần, dịp hè, lễ tết.
- Ngoài ra website cung cấp cho người quản trị có thể thêm các danh mục cần thiết.
- Website sẽ thực hiện trên ngôn ngữ PHP, MySQL
## Yêu Cầu :
- PHP >= 7.2.0
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
## Các bước cài đặt:
- Bước 1 : Cài đặt Xampp theo hướng dẫn ở link "https://hocwebchuan.com/tutorial/php/install_xampp.php"
- Bước 2 : Cài Đặt Composer tại https://getcomposer.org/
- Bước 3 : Clone về máy.
- Bước 4 : Mở Command tại thư mục chứa source gõ lệnh :
        - php artisan server
        - php artisan migrate
- Bước 5 : Vào trình duyệt gõ đường dẫn 127.0.0.1:8000
## Nội dung bài toán:
- Hiện tại website đã hoàn thành 50% giao diện .
- Website có cơ sở dữ liệu, kết nối csdl với website.
## Hướng phát triên:
- Hoàn thành các chức năng thêm, xóa, sửa, tìm kiếm và nhiều chức năng sẽ upload theo yêu cầu đã đặt ra.
