<?php

//goi thu vien
include('class.smtp.php');
include "class.phpmailer.php";
include "functions.php";
$title = "Đăng ký tư vấn : http://easyhrm.vn";
$content = "Họ và tên: " . trim($_POST['hoten']) . "<br>Email: " . trim($_POST['email']) . "<br>Điện thoại: " . trim($_POST['phonenumber']) . "<br>Mã số thuế: " . trim($_POST['taxcode']);
$nTo = '';
$mTo = 'contact@easyhrm.vn';
$diachi = 'khaivv@softdreams.vn';
//test gui mail
$mail = sendMail($title, $content, $nTo, $mTo, $diachi);
if ($mail == 1) {
    echo '<h3>Đăng ký tư vấn thành công! </h3>';
    ?>
    <script type="text/javascript">
        // $('#hrm_form_register').css("display", "none");
    </script>
    <?php
} else
    echo '<h3>Có lỗi xảy ra. <a href="http://easyhrm.vn/">Trở lại</a><h3>';


?>