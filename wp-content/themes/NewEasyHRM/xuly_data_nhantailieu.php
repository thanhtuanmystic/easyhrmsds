<?php
/*
 Template Name: Xử lý đăng ký nhận tài liệu
 */
?>
<?php
$name = $_POST['fullname'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$position = $_POST['position'];
$taxNumber = $_POST['taxNumber'];

// Xác định dữ liệu cần thêm
$data = [
    'name' => $name,
    'phoneNumber' => $phoneNumber,
    'email' => $email,
    'position' => $position,
    'taxNumber' => $taxNumber,
];

// Thêm dữ liệu vào bảng
$wpdb->insert('wp_dangky_nhan_tailieu', $data);


// Kiểm tra kết quả
if ($wpdb->insert_id > 0) {
    header('Location: https://easyhrm.vn/wp-content/uploads/2024/03/Xay-dung-thuong-hieu-tuyen-dung-0D-tren-Facebook.pdf');
    exit;
} else {
    echo 'Đã có lỗi xảy ra!';
}
?>