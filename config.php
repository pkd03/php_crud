<?php
// Cấu hình thông tin kết nối MySQL
$servername = "localhost:3307";   // máy chủ MySQL (mặc định là localhost)
$username = "root";          // tài khoản mặc định trong XAMPP
$password = "";              // để trống (nếu bạn chưa đặt mật khẩu)
$dbname = "product_db";      // tên database bạn đã tạo trong phpMyAdmin

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    // echo "✅ Kết nối thành công!";
}
?>
