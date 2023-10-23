<?php
/*
Template name: EasyHRM Standard
*/
?>
<?php
get_header() ?>
<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    .swiper {
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide {
        /* display: block !important; */
        background: none;
    }

    /* .swiper-button-next,
                                .swiper-button-prev {
                                    top: 25%;
                                }

                                .swiper-button-next {
                                    right: 16%;
                                }

                                @media (max-width: 1400px) {
                                    .swiper-button-next {
                                    right: 3%;
                                }
                                }

                                .swiper-button-prev {
                                    left: 0;
                                } */

    :root {
        --swiper-navigation-size: 20px;
    }
</style>
<section id="standard">
    <div class="container "
        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="standard-title-first">
            EasyHRM Standard
        </div>
        <div class="standard-sub-title">
            Gói đặc biệt 3IN1 dễ dàng quản lý, dễ dàng sử dụng. <br>

        </div>
        <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/10/Group-33902-1.png" alt="">
    </div>
</section>
<!-- Easyhrm ho so nhan su -->
<div class="standardElement" id="standard_hosonhansu">
    <section class="pi_personal_information">
        <div class="container">
            <div class="standard-title justify-content-center">
                <div>EasyHRM hồ sơ nhân sự</div>
            </div>
            <div class="pi-subtitle">
                Mọi thao tác quản trị nhân lực trở nên đơn giản hơn bao giờ hết!
            </div>
            <div style="padding: 0 18%" class="row">
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="pi_fb-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T02_49_08_994Z.png"
                                alt="">
                        </div>
                        <div class="pi_fb-text">Số hóa hồ sơ nhân sự, <br>
                            đồng bộ quản lý</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="pi_fb-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T02_53_01_652Z.png"
                                alt="">
                        </div>
                        <div class="pi_fb-text">Quyết định khen thưởng/ <br>
                            kỷ luật kịp thời</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="pi_fb-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T02_53_09_871Z.png"
                                alt="">
                        </div>
                        <div class="pi_fb-text">Ban hành phúc lợi, <br> đãi
                            ngộ minh bạch</div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="pi_fb-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T02_53_17_367Z.png"
                                alt="">
                        </div>
                        <div class="pi_fb-text">Báo cáo tường minh, đầy đủ</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="pi_fb-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T02_53_22_628Z.png"
                                alt="">
                        </div>
                        <div class="pi_fb-text">Thiết lập hệ thống số <br>
                            dễ dàng</div>
                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>
            <div class="pi_features">
                <div class="container">
                    <div class="item-box">
                        <div class="content-box">
                            <div class="pi_title-blue">
                                01 Tổng quan nhân sự doanh nghiệp
                            </div>
                            <div class="pi_sub-title-blue">
                                Xây dựng chiến lược quản trị sáng suốt
                            </div>
                            <div class="personal-overall">
                                <?php
                                if (have_rows('ttns_pi_list_question_01', 'option')):
                                    while (have_rows('ttns_pi_list_question_01', 'option')):
                                        the_row(); ?>
                                        <div class="pi_question-row">
                                            <div class="row center-row">
                                                <div class="col-md-12">
                                                    <div style="text-align: left" class="pi_the-question pi_click-question">
                                                        <?php echo get_sub_field('pi_question', 'option') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pi_the-answer">
                                                <?php if (have_rows('pi_answer', 'option')):
                                                    while (have_rows('pi_answer', 'option')):
                                                        the_row(); ?>
                                                        <li class="pi_answer-detail">
                                                            <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="img-box">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33835.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33834.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33853.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
                <div class="container">
                    <div class="item-box">
                        <div class="img-box">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33763-1.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33789.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33840.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33841.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                        <div class="content-box">
                            <div class="pi_title-blue">
                                02 Hồ sơ nhân viên chi tiết
                            </div>
                            <div class="pi_sub-title-blue">
                                Tạo lập chiến lược người dùng thông minh
                            </div>
                            <div class="personal-overall">
                                <?php
                                if (have_rows('ttns_pi_list_question_02', 'option')):
                                    while (have_rows('ttns_pi_list_question_02', 'option')):
                                        the_row(); ?>
                                        <div class="pi_question-row">
                                            <div class="row center-row">
                                                <div class="col-md-12">
                                                    <div style="text-align: left" class="pi_the-question pi_click-question">
                                                        <?php echo get_sub_field('pi_question', 'option') ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="pi_the-answer">
                                                <?php if (have_rows('pi_answer', 'option')):
                                                    while (have_rows('pi_answer', 'option')):
                                                        the_row(); ?>
                                                        <li class="pi_answer-detail">
                                                            <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pi_banner-middle">
                <img width="100%" src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T08_32_36_892Z.png"
                    alt="" />
                <div style="margin-bottom: 7%;margin-left: 12%" class="container banner-seperation-content">
                    <div class="row">
                        <div class="mb-dpn col-md-6 col-lg-6 col-sm-12">
                            <div>
                                <a target="_blank" href="#">
                                    <div class="" style="text-align: center; margin-top: 25%">
                                        <button class="give-consulation-immediatetly">Nhận tư vấn ngay</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pi_features">
                <div class="container">
                    <div class="item-box">
                        <div class="content-box">
                            <div class="pi_title-blue">
                                03 Ban hành quyết định nhanh chóng
                            </div>
                            <div class="pi_sub-title-blue">
                                Thực thi đồng bộ toàn hệ thống số
                            </div>
                            <div class="personal-overall">
                                <?php
                                if (have_rows('ttns_pi_list_question_03', 'option')):
                                    while (have_rows('ttns_pi_list_question_03', 'option')):
                                        the_row(); ?>
                                        <div class="pi_question-row">
                                            <div class="row center-row">
                                                <div class="col-md-12">
                                                    <div style="text-align: left" class="pi_the-question pi_click-question">
                                                        <?php echo get_sub_field('pi_question', 'option') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pi_the-answer">
                                                <?php if (have_rows('pi_answer', 'option')):
                                                    while (have_rows('pi_answer', 'option')):
                                                        the_row(); ?>
                                                        <li class="pi_answer-detail">
                                                            <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="img-box">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33836.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33788.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
                <div class="container">
                    <div class="item-box">
                        <div class="img-box">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33786-1.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                        <div class="content-box ">
                            <div class="pi_title-blue">
                                04 Phúc lợi & Phụ cấp minh bạch
                            </div>
                            <div class="pi_sub-title-blue">
                                Quản lý chi tiết mọi phát sinh
                            </div>
                            <div class="personal-overall">
                                <?php
                                if (have_rows('ttns_pi_list_question_04', 'option')):
                                    while (have_rows('ttns_pi_list_question_04', 'option')):
                                        the_row(); ?>
                                        <div class="pi_question-row">
                                            <div class="row center-row">
                                                <div class="col-md-12">
                                                    <div style="text-align: left" class="pi_the-question pi_click-question">
                                                        <?php echo get_sub_field('pi_question', 'option') ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="pi_the-answer">
                                                <?php if (have_rows('pi_answer', 'option')):
                                                    while (have_rows('pi_answer', 'option')):
                                                        the_row(); ?>
                                                        <li class="pi_answer-detail">
                                                            <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pi_features">
                <div class="container">
                    <div class="item-box">
                        <div class="content-box">
                            <div class="pi_title-blue">
                                05 Báo cáo & Thiết lập dễ dàng
                            </div>
                            <div class="pi_sub-title-blue">
                                Tiết kiệm tới 10 giờ quản lý nhân sự mỗi tuần
                            </div>
                            <div class="personal-overall">
                                <?php
                                if (have_rows('ttns_pi_list_question_05', 'option')):
                                    while (have_rows('ttns_pi_list_question_05', 'option')):
                                        the_row(); ?>
                                        <div class="pi_question-row">
                                            <div class="row center-row">
                                                <div class="col-md-12">
                                                    <div style="text-align: left" class="pi_the-question pi_click-question">
                                                        <?php echo get_sub_field('pi_question', 'option') ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="pi_the-answer">
                                                <?php if (have_rows('pi_answer', 'option')):
                                                    while (have_rows('pi_answer', 'option')):
                                                        the_row(); ?>
                                                        <li class="pi_answer-detail">
                                                            <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                        </li>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="img-box">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33787-1.png"
                                                alt="">
                                        </div>
                                        <div style="width: auto !important" class="swiper-slide">
                                            <img style="height: auto; width: auto"
                                                src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33792.png"
                                                alt="">
                                        </div>

                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="pi_great_personal">
        <div class="container">
            <div class="standard-title text-center">
                EasyHRM đồng hành cùng sếp xây dựng bộ máy nhân sự tinh nhuệ
            </div>
            <div>
                <img style="width: 100%"
                    src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T08_47_01_086Z.png" alt="">
            </div>
        </div>
    </section>

</div>
<!-- Easyhrm thong tin nhan vien -->
<div class="standardElement" id="standard_thongtinnhanvien">
    <section id="sm_digital_records">
        <div class="container">
            <div class="standard-title justify-content-center">
                <div>EasyHRM thông tin nhân viên</div>
            </div>
            <div class="pi-subtitle">
                Dễ dàng quản lý hồ sơ số
            </div>
            <div class="center-row">
                <img style="width: 50%;" src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33857.png" alt="">
            </div>
        </div>
    </section>
    <section style="padding-top: 50px; padding-bottom: 10px" id="sm_digital_records_experience">
        <div class="container">
            <div class="standard-title">
                Mang đến trải nghiệm quản lý số cho nhân sự
            </div>
            <div class="pi-subtitle">
                Cá nhân hóa trải nghiệm quản lý thông tin cá nhân, hồ sơ nhân sự tại doanh nghiệp
            </div>
        </div>
        <div class="pi_features">
            <div class="container">
                <div class="item-box">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            01 Trực tiếp giám sát, theo dõi hồ sơ cá nhân
                        </div>
                        <div style="width: 90%" class="personal-overall">
                            <?php
                            if (have_rows('nv_pi_list_question_01', 'option')):
                                while (have_rows('nv_pi_list_question_01', 'option')):
                                    the_row(); ?>
                                    <div class="pi_question-row">
                                        <div class="row center-row">
                                            <div class="col-md-12">
                                                <div style="text-align: left" class="pi_the-question pi_click-question">
                                                    <?php echo get_sub_field('pi_question', 'option') ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-1 openclose">
                                                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                    alt="" />
                                            </div> -->
                                        </div>
                                        <div class="pi_the-answer">
                                            <?php if (have_rows('pi_answer', 'option')):
                                                while (have_rows('pi_answer', 'option')):
                                                    the_row(); ?>
                                                    <li class="pi_answer-detail">
                                                        <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                    </li>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="img-box">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33805.png" alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33846.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </body>
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box">
                    <div class="img-box">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33838.png" alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33809-1.png"
                                            alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33813.png" alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33814.png" alt="">
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </body>
                    </div>
                    <div class="content-box">
                        <div class="pi_title-blue">
                            02 Kiểm soát được quyền lợi, chế độ
                        </div>
                        <div class="personal-overall">
                            <?php
                            if (have_rows('nv_pi_list_question_02', 'option')):
                                while (have_rows('nv_pi_list_question_02', 'option')):
                                    the_row(); ?>
                                    <div class="pi_question-row">
                                        <div class="row center-row">
                                            <div class="col-md-12">
                                                <div style="text-align: left" class="pi_the-question pi_click-question">
                                                    <?php echo get_sub_field('pi_question', 'option') ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-1 openclose">
                                                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                    alt="" />
                                            </div> -->
                                        </div>
                                        <div class="pi_the-answer">
                                            <?php if (have_rows('pi_answer', 'option')):
                                                while (have_rows('pi_answer', 'option')):
                                                    the_row(); ?>
                                                    <li class="pi_answer-detail">
                                                        <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                    </li>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pi_features">
            <div class="container">
                <div class="item-box">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            03 Quản lý hợp đồng số tối ưu
                        </div>
                        <div class="personal-overall">
                            <?php
                            if (have_rows('nv_pi_list_question_03', 'option')):
                                while (have_rows('nv_pi_list_question_03', 'option')):
                                    the_row(); ?>
                                    <div class="pi_question-row">
                                        <div class="row center-row">
                                            <div class="col-md-12">
                                                <div style="text-align: left" class="pi_the-question pi_click-question">
                                                    <?php echo get_sub_field('pi_question', 'option') ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-1 openclose">
                                                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                    alt="" />
                                            </div> -->
                                        </div>
                                        <div class="pi_the-answer">
                                            <?php if (have_rows('pi_answer', 'option')):
                                                while (have_rows('pi_answer', 'option')):
                                                    the_row(); ?>
                                                    <li class="pi_answer-detail">
                                                        <?php echo get_sub_field('pi_answer_detail', 'option') ?>
                                                    </li>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="img-box">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33844.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </body>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section style="padding-bottom: 50px" id="sm_auto_staff_report_management">
        <div class="container">
            <div class="row center-row">
                <div class="col-md-6 col-lg-6 col-sm-12 center-row">
                    <img style="width: 60%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_56_06_783Z.png" alt="">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div style="" class="auto-srm-title">
                        EasyHRM giúp sếp tự động hóa quản trị hồ sơ nhân sự
                    </div>
                    <div class="auto-srm-featured">
                        <div class="iconn">
                            <img style="width: 100%"
                                src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_58_55_099Z.png"
                                alt="">
                        </div>
                        <div class="textt">
                            Rút ngắn thời gian quản lý
                        </div>
                    </div>
                    <div class="auto-srm-featured">
                        <div class="iconn">
                            <img style="width: 100%"
                                src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_58_59_328Z.png"
                                alt="">
                        </div>
                        <div class="textt">
                            Tối ưu hóa những quy trình rườm rà
                        </div>
                    </div>
                    <div class="auto-srm-featured">
                        <div class="iconn">
                            <img style="width: 100%"
                                src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_59_02_769Z.png"
                                alt="">
                        </div>
                        <div class="textt">
                            Thực hiện hoàn toàn trên hệ thống số
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Easy hrm bao hiem xa hoi -->
<div class="standardElement" id="standard_baohiemxahoi">
    <section id="esi_safeSolution">
        <div class="container">
            <div class="standard-title justify-content-center">
                <div>EasyHRM bảo hiểm xã hội</div>
            </div>
            <div class="pi-subtitle">
                Giải pháp BHXH điện tử an toàn, tin cậy
                đạt tiêu chuẩn quốc gia
            </div>
            <div style="margin-top: 48px; padding: 0 12%" class="row">
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-142-×-89-px.png" alt="">
                        </div>
                        <div class="esi_featured_subtext">Bảo mật theo tiêu chuẩn iso</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-87-×-87-px.png" alt="">
                        </div>
                        <div class="esi_featured_subtext">Đảm bảo nghị quyết 28-NQ/TW </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pi_featured-box">
                        <div class="">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-171-×-84-px.png" alt="">
                        </div>
                        <div class="esi_featured_subtext">Dữ liệu được mã hóa SSL</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="esi_featured">
        <div class="pi_features">
            <div class="container">
                <div class="item-box">
                    <div class="content-box">
                        <div style="margin-bottom: 20px" class="pi_title-blue">
                            Đăng ký, kê khai, nộp và nhận kết quả nghiệp vụ
                            BHXH trên nền tảng số
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Rút ngắn thời gian chờ xét duyệt, thao tác đơn giản
                                </li>
                                <li class="pi_answer-detail">
                                    Thực hiện tiện lợi trên hệ thống số, tiết kiệm thời gian cho HR 
                                </li>
                                <li class="pi_answer-detail">
                                    Danh sách thủ tục rõ ràng, có sẵn mẫu kê khai từng hạng mục tiện lợi
                                </li>
                                <li class="pi_answer-detail">
                                    Giảm tải các quy trình hành chính và thủ tục cồng kềnh về thu/chi/ sổ thẻ
                                </li>
                                <li class="pi_answer-detail">
                                    Trình ký mọi lúc, mọi nơi tại nhiều máy tính dữ liệu được đồng bộ chính xác
                                </li>
                                <li class="pi_answer-detail">
                                    28+ Tính năng tiện ích về nghiệp vụ BHXH
                                </li>
                            </div>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33819.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box">
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33828.png" alt="">
                    </div>
                    <div class="content-box ">
                        <div style="margin-bottom: 20px" class="pi_title-blue">
                            Quản lý, lưu trữ và tra cứu các loại
                            hồ sơ, giấy tờ BHXH 1 cách dễ dàng
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Danh sách hồ sơ được lưu trữ khoa học, dễ dàng truy xuất
                                </li>
                                <li class="pi_answer-detail">
                                    Lưu trữ mọi giấy tờ, hồ sơ trên hệ thống số an toàn, bền vững
                                </li>
                                <li class="pi_answer-detail">
                                    Tra cứu và sao chép các hồ sơ nhanh chóng
                                </li>
                                <li class="pi_answer-detail">
                                    Tinh giản quá trình quản lý hồ sơ nhân sự
                                </li>
                                <li class="pi_answer-detail">
                                    Cho phép xem quá trình tham gia BHXH của từng nhân viên
                                </li>
                                <li class="pi_answer-detail">
                                    Tất cả lịch sử giao dịch đều được thông báo và quản lý minh bạch
                                </li>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pi_features">
            <div class="container">
                <div class="item-box">
                    <div class="content-box">
                        <div style="margin-bottom: 20px" class="pi_title-blue">
                            Kiểm soát thu, chi BHXH của doanh nghiệp
                            và đối soát với BHXH Việt Nam
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Tự động tính số tiền dự kiến phải đóng và được hưởng chế độ cho
                                    người lao động
                                </li>
                                <li class="pi_answer-detail">
                                    Tổng hợp danh sách nộp và chi trả BHXH định kỳ tự động
                                </li>
                                <li class="pi_answer-detail">
                                    Hỗ trợ hạn chế các sai sót về ngân sách đóng, chi trả BHXH
                                </li>
                                <li class="pi_answer-detail">
                                    Tra cứu C12 giúp nắm được tình hình BHXH của doanh nghiệp
                                </li>

                            </div>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33829.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box">
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-33826.png" alt="">
                    </div>
                    <div class="content-box">
                        <div style="margin-bottom: 20px" class="pi_title-blue">
                            Nâng cao trải nghiệm BHXH điện tử của
                            nhân viên, đảm bảo quyền lợi trong quá trình
                            đóng góp và cống hiến cho doanh nghiệp
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Chủ động theo dõi thông tin BHXH trên cổng VSSID
                                </li>
                                <li class="pi_answer-detail">
                                    Giám sát quá trình thực hiện nghĩa vụ BHXH của doanh nghiệp
                                </li>
                                <li class="pi_answer-detail">
                                    Tra cứu các thông tin về sổ/ thẻ, hồ sơ BHXH dễ dàng
                                </li>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<section id="standard_featured">
    <div class="container">
        <div class="standard-title">
            Vì sao nên chọn EasyHRM Standard?
        </div>
        <div style="padding: 0px 12%; margin-top: 20px" class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="standard-featured-box">
                    <div class="featured-heading">
                        <div class="featured-heading-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-283.png" alt="">
                        </div>
                        <div class="featured-heading-text">
                            Tối ưu <span style="color: var(--orange-2, #F26522);">hiệu suất làm việc</span>
                        </div>
                    </div>
                    <div class="featured-content">Thay thế các thao tác nghiệp vụ thủ công, giúp HR có thêm
                        nhiều thời gian tập trung nâng cao kỹ năng nghiệp vụ và
                        đào tạo, phát triển nhân lực.</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="standard-featured-box">
                    <div class="featured-heading">
                        <div class="featured-heading-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-283.png" alt="">
                        </div>
                        <div class="featured-heading-text">
                            Tiết kiệm <span style="color: var(--orange-2, #F26522);">thời gian, chi phí</span>
                        </div>
                    </div>
                    <div class="featured-content">Bất cứ nhân sự nào cũng có thể sử dụng chỉ với các thao tác
                        thực hiện đơn giản, tinh giản hóa quản lý nhân sự với mức
                        chi phí chỉ từ 33k mỗi tháng.</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="standard-featured-box">
                    <div class="featured-heading">
                        <div class="featured-heading-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-283.png" alt="">
                        </div>
                        <div class="featured-heading-text">
                            Quản lý dữ liệu số <span style="color: var(--orange-2, #F26522);">dễ dàng</span>
                        </div>
                    </div>
                    <div class="featured-content">Dữ liệu về hồ sơ nhân viên, văn bản hồ sơ được đồng bộ hóa,
                        dễ dàng tìm kiếm, truy suất nhân chóng, tránh rủi ro thất lạc,
                        mất mát.</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="standard-featured-box">
                    <div class="featured-heading">
                        <div class="featured-heading-icon">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Group-283.png" alt="">
                        </div>
                        <div class="featured-heading-text">
                            Bảo mật thông tin <span style="color: var(--orange-2, #F26522);">tuyệt đối</span>
                        </div>
                    </div>
                    <div class="featured-content">Mọi thông tin về doanh nghiệp, cá nhân đều được bảo mật theo
                        tiêu chuẩn ISO -270001 và Nghị định 117/2018/NĐ-CP
                        của Chính phủ.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="standard_price">
    <div class="container">
        <div class="standard-title">
            Chọn 1 gói phù hợp với doanh nghiệp của bạn!
        </div>

        <div style="display: block; background: #FEF6F2; margin-top: 0; padding: 0 12%" class="price-detail-showing">

            <div style="margin-bottom: 20px" class="typeOfHrm center-row">
                <div>Gói cước dưới 100 lao động</div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            589.000 <span class="vnd">VNĐ/12 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">6 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            989.000 <span class="vnd">VNĐ/24 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">9 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            1.289.000 <span class="vnd">VNĐ/36 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">12 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px" class="typeOfHrm center-row mt-40">
                <div>Gói cước trên 100 lao động</div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            1.399.000 <span class="vnd">VNĐ/ 12 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">6 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            2.399.000 <span class="vnd">VNĐ/ 24 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">9 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            2.699.000 <span class="vnd">VNĐ/ 36 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">12 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="vat-notice">Ghi chú: Phần mềm không chịu thuế (VAT)</div>
        </div>
    </div>
</section>
<section id="esi_form_register">
    <div class="esi_form_title">
        Trải nghiệm gói ưu đãi EasyHRM Standard chỉ từ
        <span class="bahaiba">323</span>k/năm
    </div>

    <div class="container">
        <div class="row center-row">
            <div class="mb-dpn col-md-12 col-lg-6 col-sm-12 center-row">
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_19T07_39_44_324Z.png" alt="">
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12 center-row">
                <form style="width:70%" id="esi-form-register">
                    <div class="esi-form">
                        <div class="esi-form-title">
                            Đăng ký nhận tư vấn miễn phí
                        </div>
                        <div class="esi-form-element">
                            <div class="esi-form-label">
                                Họ tên
                            </div>
                            <input placeholder="Ví dụ: Nguyễn Văn A" type="text" name="hoten" id="">
                        </div>
                        <div class="esi-form-element">
                            <div class="esi-form-label">
                                Email
                            </div>
                            <input placeholder="Ví dụ: Demo@softdreams.com" type="text" name="email" id="">
                        </div>
                        <div class="esi-form-element">
                            <div class="esi-form-label">
                                Số điện thoại
                            </div>
                            <input placeholder="Ví dụ: 0123456789" type="text" name="phonenumber" id="">
                        </div>
                        <div class="esi-form-element">
                            <div class="esi-form-label">
                                Mã số thuế
                            </div>
                            <input placeholder="Ví dụ: 01234567" type="text" name="taxcode" id="">
                        </div>
                        <button class="esi-form-submit" type="submit">Nhận tư vấn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section style="padding: 50px 0" id="hrm_signature_customer">
    <div class="container">
        <div class="standard-title justify-content-center">
            <div>Khách hàng tiêu biểu</div>

        </div>
        <img class="signature-customer-img" style="display: block; margin: auto"
            src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_23T02_55_24_768Z-1.png" alt="">
    </div>
</section>
<section style="padding: 50px 12% 50px" id="pi_saying_of_the_day">
    <div class="container">
        <div class="standard-title text-center">
            Câu chuyện khách hàng
        </div>
        <div style="margin-top: 20px; margin-bottom: 0" class="saying-box">
            <div class="row">
                <div class="col-md-12 col-lg-5 col-sm-12">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T09_08_40_738Z.png" alt="">
                </div>
                <div class="col-md-12 col-lg-7 col-sm-12">
                    <div class="story-slider">
                        <div id="carouselExampleIndicators" style="height: 100%" class="carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="trichdan-icon">
                                        <img style="width: 100%"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T09_33_54_958Z.png"
                                            alt="">
                                    </div>
                                    <div class="the-saying">“Trước đây, Thế giới Sofa đã sử dụng phần mềm của nhiều “ông
                                        lớn” trên thị trường nhưng không khai thác được hết tính năng mà chi phí lại
                                        cao. Từ khi chuyển qua EasyHRM, việc quản lý nhân sự trở nên dễ dàng lại tiết
                                        kiệm chi phí đáng kể cho doanh nghiệp.”</div>
                                    <div class="seperate-saying"></div>
                                    <div class="saying-author">
                                        <div class="saying-author-avt">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_31T02_30_55_632Z.png"
                                                alt="">
                                        </div>
                                        <div class="saying-author-info">
                                            <div class="saying-name">Chị Phương</div>
                                            <div class="saying-position">Trưởng phòng HCNS tại thế giới Sofa</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="trichdan-icon">
                                        <img style="width: 100%"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T09_33_54_958Z.png"
                                            alt="">
                                    </div>
                                    <div class="the-saying">“Trước đây, Thế giới Sofa đã sử dụng phần mềm của nhiều “ông
                                        lớn” trên thị trường nhưng không khai thác được hết tính năng mà chi phí lại
                                        cao. Từ khi chuyển qua EasyHRM, việc quản lý nhân sự trở nên dễ dàng lại tiết
                                        kiệm chi phí đáng kể cho doanh nghiệp.”</div>
                                    <div class="seperate-saying"></div>
                                    <div class="saying-author">
                                        <div class="saying-author-avt">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_31T02_30_55_632Z.png"
                                                alt="">
                                        </div>
                                        <div class="saying-author-info">
                                            <div class="saying-name">Chị Phương 2</div>
                                            <div class="saying-position">Trưởng phòng HCNS tại thế giới Sofa</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="trichdan-icon">
                                        <img style="width: 100%"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T09_33_54_958Z.png"
                                            alt="">
                                    </div>
                                    <div class="the-saying">“Trước đây, Thế giới Sofa đã sử dụng phần mềm của nhiều “ông
                                        lớn” trên thị trường nhưng không khai thác được hết tính năng mà chi phí lại
                                        cao. Từ khi chuyển qua EasyHRM, việc quản lý nhân sự trở nên dễ dàng lại tiết
                                        kiệm chi phí đáng kể cho doanh nghiệp.”</div>
                                    <div class="seperate-saying"></div>
                                    <div class="saying-author">
                                        <div class="saying-author-avt">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_31T02_30_55_632Z.png"
                                                alt="">
                                        </div>
                                        <div class="saying-author-info">
                                            <div class="saying-name">Chị Phương 3</div>
                                            <div class="saying-position">Trưởng phòng HCNS tại thế giới Sofa</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="next-prev">
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="next-prev-icon" aria-hidden="true">
                                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T10_03_19_658Z.png"
                                            alt="">
                                    </span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="next-prev-icon" aria-hidden="true">
                                        <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T10_03_15_450Z.png"
                                            alt="">
                                    </span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    // $(document).ready(function () {
    //     $(".standard-list-button-header a").click(function (e) {
    //         // Loại bỏ class "standard-active" và thêm class "standard-hide" cho tất cả các div con
    //         $(".standard-list-button-header a .event-target2").removeClass("standard-active2").addClass("standard-hide2");
    //         // Tìm div con bên trong thẻ a được click và thay đổi class thành "standard-active"
    //         var targetId = $(this).attr("class");
    //         $("." + targetId).find(".event-target2").removeClass("standard-hide2").addClass("standard-active2");
    //         $("#standard_" + targetId).show();
    //     });
    // });

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {});
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>