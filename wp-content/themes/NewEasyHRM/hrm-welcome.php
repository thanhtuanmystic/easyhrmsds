<?php
/** Template Name: HRM Welcome **/
get_header();
?>

<style>
    #register_successful {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 100px 0;
        flex-direction: column;
        gap: 40px;
    }

    .back-btn {
        display: flex;
        gap: 20px;
    }

    .back-btn .button {
        padding: 20px;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }
</style>
<section id="register_successful">
    <img style="max-width: 100%" src="http://softdreams.vn/wp-content/uploads/2024/03/Asset-1@4x-1.png" alt="">
    <div class="container">
        <h1 class="text-center">Chúc mừng bạn đã đăng ký thành công!</h1>
    </div>
    <div class="back-btn">
        <!-- <a href="https://softdreams.vn/event">
            <button class="btn btn-outline-success btn-lg button">
                Xem hội thảo khác
            </button>
        </a> -->
        <a href="https://easyhrm.vn/">
            <button class="btn btn-outline-primary btn-lg button">
                Quay về trang chủ
            </button>
        </a>
    </div>
</section>