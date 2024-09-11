<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$name = $_POST['name'];
$ngaysinh = $_POST['ngaysinh'];
$email = $_POST['email'];
$address = $_POST['address'];

// Thêm dữ liệu vào bảng
$sql = "INSERT INTO students (name, ngaysinh , email, address) VALUES ('$name', $ngaysinh, '$email', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm hồ sơ thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
