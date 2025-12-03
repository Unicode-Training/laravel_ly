# Môi trường

- PHP
- Database: Mysql/MariaDB/Postgresql
- Composer: Công cụ quản lý thư viện của PHP (Laravel)
- WebServer: Nginx, Apache
- Phần mềm quản lý Database (GUI Tools): Sequel Ace

Client --> Request --> Web Server --> PHP --> Database --> Response --> Client

## Cài đặt Laravel

composer create-project laravel/laravel ten-folder

Chạy dự án:

- Vào folder bằng lệnh cd
- Gõ lệnh: php artisn serve

## Luồng hoạt động của Laravel

Request --> public/index.php --> Provider --> Route --> Middleware --> Controller --> View

Ví dụ Route:

- /san-pham --> Hiển thị danh sách sản phẩm

Controller: Bộ điều khiển trung tâm

- Nhận request từ Route
- Xử lý request
- Lấy dữ liệu từ database
- Xử lý dữ liệu
- Trả về view

Middleware: Bộ lọc trung gian

- Tiếp nhận request từ Route
- Kiểm tra và thiết lập điều kiện
- Quyết định có cho request đi tiếp

## Làm việc với controller

Lệnh tạo controller

php artisan make:controller TenController

Lưu ý về tên: Dùng quy tắc Pascal Case

Ví dụ: HomeController, ProductController

Controller --> Action

Ví dụ:

Controller là sản phẩm
Action là: thêm, sửa, xóa, hiển thị
