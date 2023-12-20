<?php
/*
Template name: EasyHRM Premium
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
        flex-direction: column;
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

    .premium-price {
        color: #172D58;
        text-align: center;
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 150%;
        /* 24px */
        margin-bottom: 16px;
    }

    .premium-type {
        margin-top: 16px;
    }

    .premium-type li {
        color: #172D58;
        font-family: Nunito Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        /* 21px */
    }

    .premium-type li span {
        color: #172D58;
        text-align: center;
        font-family: Nunito Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 21px */
    }

    .premium-price-note {
        margin-top: 40px;
        color: var(--Blue1, #172D58);
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: italic;
        font-weight: 600;
        line-height: 150%;
        /* 24px */
    }
</style>
<div class="backtotop">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100" fill="none">
        <path
            d="M97.108 44.1424L55.8581 2.89238C55.0734 2.14129 54.1483 1.55253 53.1356 1.15988C51.127 0.334728 48.8741 0.334728 46.8656 1.15988C45.8529 1.55253 44.9277 2.14129 44.1431 2.89238L2.89305 44.1424C2.12384 44.9116 1.51366 45.8248 1.09736 46.8298C0.681065 47.8349 0.466797 48.912 0.466797 49.9999C0.466797 52.1969 1.33955 54.3039 2.89305 55.8574C4.44656 57.4109 6.55357 58.2836 8.75055 58.2836C10.9475 58.2836 13.0545 57.4109 14.6081 55.8574L41.7506 28.6324V91.2499C41.7506 93.4379 42.6197 95.5363 44.1669 97.0835C45.7141 98.6307 47.8125 99.4999 50.0006 99.4999C52.1886 99.4999 54.287 98.6307 55.8342 97.0835C57.3814 95.5363 58.2506 93.4379 58.2506 91.2499V28.6324L85.3931 55.8574C86.16 56.6306 87.0725 57.2444 88.0778 57.6632C89.0831 58.0821 90.1615 58.2977 91.2505 58.2977C92.3396 58.2977 93.418 58.0821 94.4233 57.6632C95.4286 57.2444 96.3411 56.6306 97.108 55.8574C97.8813 55.0904 98.4951 54.178 98.9139 53.1726C99.3328 52.1673 99.5484 51.089 99.5484 49.9999C99.5484 48.9108 99.3328 47.8325 98.9139 46.8271C98.4951 45.8218 97.8813 44.9093 97.108 44.1424Z"
            fill="white" />
    </svg>
</div>
<section id="standard">
    <div class="container">
        <div class="standard-title-first">
            EASYHRM PREMIUM
        </div>
        <div class="standard-sub-title">
            Gói đặc biệt 3IN1 dễ dàng quản lý, dễ dàng sử dụng. <br>
            Giúp tối giản hóa quản lý hồ sơ nhân sự, tích hợp BHXH và đồng bộ hóa văn bản, hợp đồng điện tử. 
        </div>

        <div class="row padding12percent">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#standard_hosonhansu">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609370.png" alt="">
                        <div class="list-feature-name">Thông tin nhân sự</div>
                        <div class="list-feature-des">Theo dõi tổng quan tình hình
                            nhân lực</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#premium_chamcong">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609372.png" alt="">
                        <div class="list-feature-name">Chấm công</div>
                        <div class="list-feature-des">Tự động hóa cập nhật dữ liệu tức thời</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#premium_tinhluong">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609373-1.png" alt="">
                        <div class="list-feature-name">Tính lương</div>
                        <div class="list-feature-des">Chuẩn hóa tính lương chỉ sau 1 lần thiết lập</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12"></div>
            <div style="margin-top: 25px" class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#standard_baohiemxahoi">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609373.png" alt="">
                        <div class="list-feature-name">Bảo hiểm xã hội</div>
                        <div class="list-feature-des">Thực hiện nghiệp vụ trực tuyến dễ dàng</div>
                    </div>
                </a>
            </div>
            <div style="margin-top: 25px" class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#standard_thongtinnhanvien">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609374.png" alt="">
                        <div class="list-feature-name">Hồ sơ nhân viên</div>
                        <div class="list-feature-des">Quản lý chi tiết dữ liệu nhân viên</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12"></div>
        </div>
    </div>
</section>
<!-- Easyhrm ho so nhan su(thong tin nhan su) -->
<div class="standardElement" id="standard_hosonhansu">
    <section class="pi_personal_information">
        <div class="container">
            <div class="standard-title justify-content-center">
                <div><img style="margin-right: 16px"
                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609370.png" alt="">EasyHRM thông tin
                    nhân sự</div>
            </div>
            <div class="pi-subtitle">
                Mọi thao tác quản trị nhân lực trở nên đơn giản hơn bao giờ hết!
            </div>
            <div class="subtitle-border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="898" height="2" viewBox="0 0 898 2" fill="none">
                    <path d="M0 1H898" stroke="#BDC9E2" />
                </svg>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            1. Tổng quan nhân sự doanh nghiệp
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
                                            src="https://easyhrm.vn/wp-content/uploads/2023/11/Group-33982.png" alt="">
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
        <div class="pi_features animation_slide_bottom_to_show" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="img-box">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609403.png"
                                            alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-33912.png" alt="">
                                    </div>
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34074.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </body>
                    </div>
                    <div class="content-box">
                        <div class="pi_title-blue">
                            2. Thông tin nhân viên chi tiết
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
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            3. Ban hành quyết định nhanh chóng
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
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34080.png" alt="">
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
                EasyHRM đồng hành cùng sếp xây dựng
                <br>
                bộ máy nhân sự tinh nhuệ
            </div>
            <div class="animation_slide_bottom_to_show">
                <img style="width: 100%; margin-top: 40px"
                    src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T08_47_01_086Z.png" alt="">
            </div>
            <div class="great-personal-btn">
                <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                    <div class="great-personal-btn-try">Dùng thử</div>
                </a>
                <a class="scroll-link" href="#esi_form_register">
                    <div class="great-personal-btn-consultation">Tư vấn</div>
                </a>
            </div>
        </div>
    </section>
</div>
<!-- Easyhrm cham cong -->
<div class="premiumElement" id="premium_chamcong">
    <section>
        <div class="container">
            <div class="standard-title justify-content-center">
                <div><img style="margin-right: 16px"
                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609372.png" alt="">EasyHRM chấm công
                </div>
            </div>
            <div class="pi-subtitle">
                Chấm công - Xếp ca - Tổng hợp công linh hoạt, xác thực tuyệt đối
            </div>
            <div class="subtitle-border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="898" height="2" viewBox="0 0 898 2" fill="none">
                    <path d="M0 1H898" stroke="#BDC9E2" />
                </svg>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            1. Tối ưu quy trình quản trị nhân sự
                        </div>
                        <div class="pi_sub-title-blue">Lãnh đạo theo dõi sát sao dữ liệu thực 24/7</div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Theo dõi dữ liệu tổng quan với dữ liệu chuyên cần được tổng hợp tức thì
                                </li>
                                <li class="pi_answer-detail">
                                    Tích hợp all-in-one gồm chấm công - xếp ca - tổng hợp thông minh
                                </li>
                                <li class="pi_answer-detail">
                                    Tinh gọn bộ máy nhân sự & tối ưu chi phí cho doanh nghiệp SMEs
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609335.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609334.png" alt="">
                    </div>
                    <div class="content-box ">
                        <div class="pi_title-blue">
                            2. Dữ liệu công được tổng hợp từ A đến Z
                        </div>
                        <div class="pi_sub-title-blue">
                            Giảm tải gánh nặng cho C&B
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Tự động cập nhật dữ liệu chấm công theo thời gian thực, giảm thiểu sai sót
                                </li>
                                <li class="pi_answer-detail">
                                    Quản lý nhân viên nghỉ, đi sớm về muộn, làm thêm,... chi tiết
                                </li>
                                <li class="pi_answer-detail">
                                    Thiết lập và quản lý ca trực nhanh gọn, dễ thao tác
                                </li>
                                <li class="pi_answer-detail">
                                    Thiết lập công sản phẩm giúp tối ưu cho doanh nghiệp sản xuất
                                </li>
                                <li class="pi_answer-detail">
                                    Tổng hợp công thông minh, tiết kiệm thời gian
                                </li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <style>
            .chamcong-slide-feature {
                padding-top: 55px;
                position: relative;
            }

            .chamcong-slide-feature .slide-1 {
                height: 300px;
                width: 100%;
                background: var(--Blue2, #2951A0);
                padding-top: 40px;
            }

            .chamcong-slide-feature .slide-2 {
                height: 425px;
                width: 100%;
                position: relative;
            }

            .chamcong-slide-feature #buttona {
                position: absolute;
                left: 20%;
                top: 16%;
                z-index: 10;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 1px solid #9BA3B1;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .chamcong-slide-feature #buttonb {
                position: absolute;
                right: 20%;
                top: 16%;
                z-index: 10;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 1px solid #9BA3B1;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .chamcong-slide-feature #buttona:hover,
            .chamcong-slide-feature #buttonb:hover {
                background-color: #F26522;
            }

            .chamcong-slide-feature .slide-1 .title {
                color: #FFF;
                text-align: center;
                font-family: Nunito Sans;
                font-size: 24px;
                font-style: normal;
                font-weight: 800;
                line-height: 176.4%;
                /* 42.336px */
            }

            .chamcong-slide-feature .centered-slide-content {
                position: absolute;
                top: 28%;
                max-width: 100%;
                max-height: 100%;
            }

            .chamcong-slide-feature .centered-slide-content .centered-image {
                max-width: 100%;
            }

            .centered-slide-text {
                color: var(--Blue2, #2951A0);
                font-family: Nunito Sans;
                font-size: 20px;
                font-style: normal;
                font-weight: 800;
                line-height: 150%;
                /* 30px */
                text-align: center;

            }

            .centered-slide-text span {
                color: var(--orange-2, #F26522);
                font-family: Nunito Sans;
                font-size: 24px;
                font-style: normal;
                font-weight: 800;
                line-height: 150%;
                /* 36px */
                text-align: center;
            }

            .chamcong-bottom-banner {
                padding: 55px 0;
                background: #FEF6F2;
            }

            .chamcong-bottom-banner ul li {
                color: var(--gray-1, #151F2F);
                font-family: Nunito Sans;
                font-size: 15px;
                font-style: normal;
                font-weight: 600;
                line-height: 150%;
                /* 22.5px */
                display: flex;
                gap: 8px;
            }

            .tienluong-features {
                padding: 55px 0;
            }

            .tienluong-features ul li {
                display: flex;
                gap: 8px;
                color: var(--gray-1, #151F2F);
                font-family: Nunito Sans;
                font-size: 15px;
                font-style: normal;
                font-weight: 600;
                line-height: 211%;
                /* 31.65px */
                align-items: center;
            }
        </style>
        <div class="chamcong-slide-feature animation_slide_bottom_to_show">
            <div class="slide-1">
                <div class="title">Chỉ mất 1h thiết lập nhưng bạn sẽ tiết kiệm được 30h quản lý <br>
                    chấm công - xếp ca - tổng hợp công mỗi tháng</div>
            </div>
            <div class="slide-2">
                <div id="buttona"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <g clip-path="url(#clip0_2426_2590)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.93962 13.0599C7.65872 12.7787 7.50094 12.3974 7.50094 11.9999C7.50094 11.6024 7.65872 11.2212 7.93962 10.9399L13.5956 5.2819C13.877 5.00064 14.2586 4.84268 14.6565 4.84277C15.0543 4.84287 15.4359 5.00101 15.7171 5.2824C15.9984 5.56379 16.1563 5.9454 16.1562 6.34325C16.1562 6.74111 15.998 7.12264 15.7166 7.4039L11.1206 11.9999L15.7166 16.5959C15.99 16.8787 16.1414 17.2575 16.1381 17.6508C16.1349 18.0441 15.9773 18.4204 15.6993 18.6986C15.4214 18.9769 15.0452 19.1348 14.6519 19.1384C14.2586 19.142 13.8797 18.991 13.5966 18.7179L7.93862 13.0609L7.93962 13.0599Z"
                                fill="#6E7A8E" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2426_2590">
                                <rect width="24" height="24" fill="white" transform="matrix(0 1 -1 0 24 0)" />
                            </clipPath>
                        </defs>
                    </svg></div>
                <div id="buttonb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <g clip-path="url(#clip0_2426_2584)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.0604 10.9401C16.3413 11.2213 16.4991 11.6026 16.4991 12.0001C16.4991 12.3976 16.3413 12.7788 16.0604 13.0601L10.4044 18.7181C10.123 18.9994 9.74138 19.1573 9.34352 19.1572C8.94567 19.1571 8.56414 18.999 8.28288 18.7176C8.00162 18.4362 7.84366 18.0546 7.84375 17.6567C7.84384 17.2589 8.00198 16.8774 8.28338 16.5961L12.8794 12.0001L8.28338 7.4041C8.01 7.12132 7.85863 6.74249 7.86186 6.34919C7.86509 5.9559 8.02267 5.5796 8.30065 5.30136C8.57863 5.02311 8.95478 4.86518 9.34807 4.86158C9.74137 4.85798 10.1203 5.00899 10.4034 5.2821L16.0614 10.9391L16.0604 10.9401Z"
                                fill="#6E7A8E" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2426_2584">
                                <rect width="24" height="24" fill="white" transform="matrix(0 -1 1 0 0 24)" />
                            </clipPath>
                        </defs>
                    </svg></div>
            </div>

            <div class="centered-slide-content">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609255.png" alt=""> <br>
                            <div class="centered-slide-text"><span>01</span> <br> Thiết lập kỳ công lương</div>
                        </div>
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/02.png" alt=""> <br>
                            <div class="centered-slide-text"><span>02</span> <br> Thiết lập quy định chấm công</div>
                        </div>
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/03.png" alt=""> <br>
                            <div class="centered-slide-text"><span>03</span> <br>Thiết lập công chuẩn</div>
                        </div>
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/04.png" alt=""> <br>
                            <div class="centered-slide-text"><span>04</span> <br> Thiết lập quy trình phê duyệt đơn từ
                            </div>
                        </div>
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/05.png" alt=""> <br>
                            <div class="centered-slide-text"><span>05</span> <br> Thiết lập mạng wifi và địa điểm chấm
                                công</div>
                        </div>
                        <div style="width: auto !important" class="swiper-slide">
                            <img style="height: auto; width: auto"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/06.png" alt=""> <br>
                            <div class="centered-slide-text"><span>06</span> <br>Thiết lập quy định thâm niên, phép năm
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 0" id="chamcong_button_next" class="swiper-button-next "></div>
                    <div style="opacity: 0" id="chamcong_button_prev" class="swiper-button-prev "></div>
                </div>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            3. Chấm công thời 4.0 - Đa dạng
                        </div>
                        <div class="pi_sub-title-blue">Đa dạng phương thức cho nhân viên</div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Đa dạng hình thức chấm công gồm: Vân tay, FaceID, GPS, Wifi
                                </li>
                                <li class="pi_answer-detail">
                                    App chấm công thông minh, giải trình công, đăng ký dễ dàng
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609338.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="chamcong-bottom-banner animation_slide_bottom_to_show">
            <div style="margin-bottom: 24px" class="pi_title-blue text-center">
                Trở thành doanh nghiệp dẫn đầu với giải pháp EasyHRM chấm công dễ dàng
            </div>
            <div class="container">
                <div class="row">
                    <div style="flex-direction: column"
                        class="col-lg-6 d-flex justify-content-center align-items-center">
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>Giảm khiếu nại, tăng tỉ lệ hài lòng của nhân viên</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>C&B tự tin ghi điểm với sếp tuyệt đối</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>Người lãnh đạo bao quát toàn cảnh, vững tin dẫn dắt</li>
                            <div style="justify-content: flex-start" class="great-personal-btn">
                                <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                                    <div class="great-personal-btn-try">Dùng thử</div>
                                </a>
                                <a class="scroll-link" href="#esi_form_register">
                                    <div class="great-personal-btn-consultation">Tư vấn</div>
                                </a>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Frame.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Easyhrm luong thuong kpi -->
<div class="premiumElement" id="premium_tinhluong">
    <section>
        <div class="container">
            <div class="standard-title justify-content-center">
                <div><img style="margin-right: 16px"
                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609373-1.png" alt="">EasyHRM lương
                    thưởng, KPI
                </div>
            </div>
            <div class="pi-subtitle">
                Tự động hóa tính lương chuẩn xác chỉ sau 1 lần thiết lập
            </div>
            <div class="subtitle-border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="898" height="2" viewBox="0 0 898 2" fill="none">
                    <path d="M0 1H898" stroke="#BDC9E2" />
                </svg>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            1. Tổng hợp số liệu lương thông minh
                        </div>
                        <div class="pi_sub-title-blue">Giải quyết bài toán quỹ lương cho người lãnh đạo</div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Theo sát mọi quá trình tính toán tiền lương của C&B trên hệ thống
                                </li>
                                <li class="pi_answer-detail">
                                    Kiểm tra cấu trúc lương đảm bảo quỹ được phân bổ đúng kế hoạch
                                </li>
                                <li class="pi_answer-detail">
                                    Dựng chính sách đãi ngộ cho từng phòng ban, nhân viên nhằm nâng cao hiệu suất
                                </li>
                                <li class="pi_answer-detail">
                                    Điều chỉnh quỹ lương và các chính sách phù hợp theo tình hình tài chính doanh
                                    nghiệp
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609309.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609321.png" alt="">
                    </div>
                    <div class="content-box ">
                        <div class="pi_title-blue">
                            2. Đơn giản hóa quy trình tính lương
                        </div>
                        <div class="pi_sub-title-blue">
                            Nâng cao hiệu suất cho C&B tới hơn 30%
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Tự động cập nhật dữ liệu chấm công, tính lương chuẩn xác
                                </li>
                                <li class="pi_answer-detail">
                                    Thiết lập phần tử lương nhanh chóng theo từng doanh nghiệp
                                </li>
                                <li class="pi_answer-detail">
                                    Tùy chỉnh linh hoạt cấu trúc bảng lương, công thức tính
                                </li>
                                <li class="pi_answer-detail">
                                    Nhập - xuất công thức từ dữ liệu excel vô cùng đơn giản
                                </li>
                                <li class="pi_answer-detail">
                                    Các khoản giảm trừ cũng được thiết lập đầy đủ
                                </li>
                                <li class="pi_answer-detail">
                                    Tự động giảm trừ thuế TNCN trên hệ thống
                                </li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tienluong-features animation_slide_bottom_to_show">
            <div style="margin-bottom: 24px" class="pi_title-blue text-center">
                Bộ công cụ tính lương thưởng, KPIs thông minh trong kỷ nguyên số cho doanh nghiệp
            </div>
            <div class="container">
                <div class="row">
                    <div style="flex-direction: column"
                        class="col-lg-6 d-flex justify-content-center align-items-center">
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>Xóa bỏ những công thức Excel cồng kềnh</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>Tự động tính lương 24/7</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM12.576 7.23C12.6418 7.15473 12.692 7.06705 12.7234 6.97213C12.7549 6.8772 12.7671 6.77694 12.7592 6.67724C12.7513 6.57754 12.7236 6.48042 12.6777 6.3916C12.6317 6.30277 12.5685 6.22403 12.4917 6.16001C12.4148 6.09598 12.326 6.04797 12.2303 6.0188C12.1347 5.98962 12.0341 5.97987 11.9347 5.99012C11.8352 6.00037 11.7388 6.03041 11.6511 6.07847C11.5634 6.12654 11.4862 6.19166 11.424 6.27L8.7255 9.50775C8.46525 9.81975 8.319 9.993 8.20275 10.0988L8.19825 10.1032L8.193 10.0995C8.067 10.0042 7.90575 9.84525 7.61925 9.558L6.53025 8.46975C6.3888 8.33313 6.19935 8.25754 6.0027 8.25924C5.80605 8.26095 5.61794 8.33983 5.47889 8.47889C5.33983 8.61794 5.26095 8.80605 5.25924 9.0027C5.25754 9.19935 5.33313 9.3888 5.46975 9.53025L6.558 10.6185L6.58875 10.6493C6.834 10.8945 7.06875 11.13 7.2885 11.2957C7.53375 11.4817 7.8555 11.6558 8.26725 11.6378C8.67975 11.619 8.98425 11.4157 9.21225 11.2087C9.41475 11.0235 9.6285 10.7677 9.84975 10.5015L9.8775 10.4685L12.576 7.23Z"
                                        fill="#EA5626" />
                                </svg>Giảm gánh nặng cho C&B</li>
                            <div style="justify-content: flex-start" class="great-personal-btn">
                                <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                                    <div class="great-personal-btn-try">Dùng thử</div>
                                </a>
                                <a class="scroll-link" href="#esi_form_register">
                                    <div class="great-personal-btn-consultation">Tư vấn</div>
                                </a>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/12-01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Easy hrm bao hiem xa hoi -->
<div class="standardElement" id="standard_baohiemxahoi">
    <section id="esi_safeSolution">
        <div class="standard-title justify-content-center">
            <div><img style="margin-right: 16px" src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609373.png"
                    alt="">EasyHRM bảo hiểm xã hội</div>
        </div>
        <div class="pi-subtitle">
            Quản lý BHXH tiện lợi trên nền tảng số, kết nối trực tiếp với Bảo hiểm xã hội Việt Nam 
        </div>
        <div class="subtitle-border-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="898" height="2" viewBox="0 0 898 2" fill="none">
                <path d="M0 1H898" stroke="#BDC9E2" />
            </svg>
        </div>
        <div style="padding: 55px 0; margin-top: 60px; background: #FEF6F2;">
            <div class="container">
                <div class="row padding12percent">
                    <div style="margin-bottom: 32px; line-height: normal" class="pi_title-blue text-center">1. Giải pháp
                        BHXH điện tử an toàn, tin cậy <br> đạt tiêu chuẩn quốc gia</div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="pi_featured-box">
                            <div class="">
                                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-142-×-89-px.png"
                                    alt="">
                            </div>
                            <div class="esi_featured_subtext">Bảo mật theo tiêu chuẩn iso</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="pi_featured-box">
                            <div class="">
                                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-87-×-87-px.png"
                                    alt="">
                            </div>
                            <div class="esi_featured_subtext">Đảm bảo nghị quyết 28-NQ/TW </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="pi_featured-box">
                            <div class="">
                                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/Chua-co-ten-171-×-84-px.png"
                                    alt="">
                            </div>
                            <div class="esi_featured_subtext">Dữ liệu được mã hóa SSL</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="esi_featured">
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            2. Thực hiện nghiệp vụ BHXH hoàn toàn
                            trên nền tảng số
                        </div>
                        <div class="pi_sub-title-blue">Tiết kiệm thời gian và công sức cho HR</div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Rút ngắn thời gian chờ xét duyệt, thao tác đơn giản
                                </li>
                                <li class="pi_answer-detail">
                                    Danh sách thủ tục rõ ràng, có sẵn mẫu kê khai từng hạng mục tiện lợi
                                </li>
                                <li class="pi_answer-detail">
                                    Giảm tải các quy trình hành chính và thủ tục cồng kềnh về thu/chi/ sổ thẻ
                                </li>
                                <li class="pi_answer-detail">
                                    28+ Tính năng tiện ích về nghiệp vụ BHXH
                                </li>
                            </div>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609399.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pi_features animation_slide_bottom_to_show" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="img-box">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34105.png" alt="">
                    </div>
                    <div class="content-box ">
                        <div class="pi_title-blue">
                            3. Kiểm soát thu, chi BHXH của doanh
                            nghiệp và đối soát với BHXH Việt Nam
                        </div>
                        <div class="pi_sub-title-blue">
                            Chuẩn xác về dữ liệu, giảm thiểu sai sót
                        </div>
                        <div class="personal-overall">
                            <div class="">
                                <li class="pi_answer-detail">
                                    Tự động tính số tiền dự kiến phải đóng và được hưởng chế độ cho người lao động
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

                </div>
            </div>
        </div>
    </section>
    <div class="digital-convertion-banner animation_slide_bottom_to_show">
        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609407.png" alt="">
        <div class="digital-convertion-btn">
            <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                <div class="great-personal-btn-try">Dùng thử</div>
            </a>
            <a href="#esi-form-register">
                <div class="great-personal-btn-consultation digital-convertion-consulation">Tư vấn</div>
            </a>
        </div>
    </div>
</div>
<!-- Easyhrm thong tin nhan vien(ho so nhan vien) -->
<div class="standardElement" id="standard_thongtinnhanvien">
    <section id="sm_digital_records">
        <div class="container">
            <div class="standard-title justify-content-center">
                <div><img style="margin-right: 16px"
                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609374.png" alt="">EasyHRM hồ sơ nhân
                    viên</div>
            </div>
            <div class="pi-subtitle">
                Mang đến trải nghiệm quản lý số đa chiều cho nhân viên
            </div>
            <div class="subtitle-border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="662" height="2" viewBox="0 0 662 2" fill="none">
                    <path d="M0 1H662" stroke="#BDC9E2" />
                </svg>
            </div>
        </div>
    </section>
    <section id="sm_digital_records_experience">
        <div class="pi_features animation_slide_bottom_to_show">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="content-box">
                        <div class="pi_title-blue">
                            1. Trực tiếp giám sát hồ sơ cá nhân
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
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609369.png"
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
        <div class="pi_features animation_slide_bottom_to_show" style="background: rgba(254, 240, 233, 0.60);">
            <div class="container">
                <div class="item-box paddingleft12percent">
                    <div class="img-box">

                        <body>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div style="width: auto !important" class="swiper-slide">
                                        <img style="height: auto; width: auto"
                                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34096.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </body>
                    </div>
                    <div class="content-box">
                        <div class="pi_title-blue">
                            2. Theo dõi sát sao quyền lợi, chế độ
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
    </section>
    <section id="sm_auto_staff_report_management">
        <div class="container">
            <div class="row center-row">
                <div class="col-md-12 col-lg-6 col-sm-12 center-row animation_slide_bottom_to_show">
                    <img style="width: 60%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_56_06_783Z.png" alt="">
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12">
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
                    <div class="auto-srm-featured">
                        <div class="great-personal-btn">
                            <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                                <div class="great-personal-btn-try auto-srm-free-trial">Trải nghiệm miễn phí</div>
                            </a>
                            <a class="scroll-link" href="#esi_form_register">
                                <div class="great-personal-btn-consultation">Tư vấn</div>
                            </a>
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
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609406.png" alt="">
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
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609404-1-1.png" alt="">
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
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609405.png" alt="">
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
            Báo giá
        </div>
        <div class="standard-sub-title">
            Chọn 1 gói phù hợp với doanh nghiệp của bạn!
        </div>
        <div style="display: block; background: #FEF6F2; margin-top: 0" class="price-detail-showing padding12percent">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="premium-price">
                            Đơn giá/ NLD/ Tháng
                        </div>
                        <div class="specific-price">
                            15.000 <span class="vnd">VNĐ</span>
                        </div>
                        <ul class="premium-type">
                            <li>Số lao động thực tế:
                                <span>10</span>
                            </li>
                            <li>Thời gian sử dụng: <span>12 tháng</span></li>
                        </ul>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="premium-price">
                            Đơn giá/ NLD/ Tháng
                        </div>
                        <div class="specific-price">
                            13.500 <span class="vnd">VNĐ</span>
                        </div>
                        <ul class="premium-type">
                            <li>Số lao động thực tế:
                                <span>11 đến 50</span>
                            </li>
                            <li>Thời gian sử dụng: <span>12 tháng</span></li>
                        </ul>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="premium-price">
                            Đơn giá/ NLD/ Tháng
                        </div>
                        <div class="specific-price">
                            12.750 <span class="vnd">VNĐ</span>
                        </div>
                        <ul class="premium-type">
                            <li>Số lao động thực tế:
                                <span>51 đến 100</span>
                            </li>
                            <li>Thời gian sử dụng: <span>12 tháng</span></li>
                        </ul>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="premium-price-note">
                    <div>(*) Chưa bao gồm phí khởi tạo: 1.000.000đ</div>
                    <div>(*) Quy mô trên 100 nhân sự sẽ được đề xuất khảo sát cụ thể </div>
                </div>
            </div>
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
<section style="padding: 55px 0" id="hrm_signature_customer">
    <div class="container">
        <div class="standard-title justify-content-center">
            <div>Khách hàng tiêu biểu</div>
        </div>
        <img class="signature-customer-img" style="max-width: 100%; display: block; margin: auto"
            src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_23T02_55_24_768Z-1.png" alt="">
    </div>
</section>
<section style="padding: 55px 12% 55px" id="pi_saying_of_the_day">
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
    $("#buttonb").on("click", function () {
        // Kích hoạt sự kiện click cho button 2
        $("#chamcong_button_next").click();
    });
    $("#buttona").on("click", function () {
        // Kích hoạt sự kiện click cho button 2
        $("#chamcong_button_prev").click();
    });
</script>
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
<script>
    $(document).ready(function () {
        $(".standard-list-feature").click(function () {
            // Loại bỏ class 'selected' khỏi tất cả các elements
            $(".standard-list-feature").removeClass("selected");
            $(".list-feature-name, .list-feature-des").css("color", "");
            // Thêm class 'selected' vào element được click
            $(this).addClass("selected");
            $(this).find(".list-feature-name, .list-feature-des").css("color", "white");
        });
    });
</script>