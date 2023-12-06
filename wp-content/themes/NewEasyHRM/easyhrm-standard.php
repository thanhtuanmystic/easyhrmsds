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
            EASYHRM STANDARD
        </div>
        <div class="standard-sub-title">
            Gói đặc biệt 3IN1 dễ dàng quản lý, dễ dàng sử dụng. <br>
            Giúp tối giản hóa quản lý hồ sơ nhân sự, tích hợp BHXH và đồng bộ hóa văn bản, hợp đồng điện tử. 
        </div>
        <style>
            @media (max-width: 1200px) {

            }
        </style>
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
                <a class="scroll-link" href="#standard_baohiemxahoi">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609373.png" alt="">
                        <div class="list-feature-name">Bảo hiểm xã hội</div>
                        <div class="list-feature-des">Thực hiện nghiệp vụ trực tuyến dễ dàng</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <a class="scroll-link" href="#standard_thongtinnhanvien">
                    <div class="standard-list-feature">
                        <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609374.png" alt="">
                        <div class="list-feature-name">Hồ sơ nhân viên</div>
                        <div class="list-feature-des">Quản lý chi tiết dữ liệu nhân viên</div>
                    </div>
                </a>
            </div>
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
        <div class="pi_features">
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
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
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
        <div class="pi_features">
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
            <div>
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
        <div class="pi_features">
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
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
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
    <div class="digital-convertion-banner">
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
        <div class="pi_features">
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
        <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
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
                <div class="col-md-12 col-lg-6 col-sm-12 center-row">
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

            <div style="margin-bottom: 20px" class="typeOfHrm center-row">
                <div>Gói cước dưới 100 lao động</div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            589.000 <span class="vnd">VNĐ/12 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">6 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            989.000 <span class="vnd">VNĐ/24 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">9 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            1.289.000 <span class="vnd">VNĐ/36 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">12 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px" class="typeOfHrm center-row mt-40">
                <div>Gói cước trên 100 lao động</div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            1.399.000 <span class="vnd">VNĐ/ 12 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">6 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            2.399.000 <span class="vnd">VNĐ/ 24 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">9 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="showing-detail" style="min-height: 160px">
                        <div class="specific-price">
                            2.699.000 <span class="vnd">VNĐ/ 36 tháng</span>
                        </div>
                        <div class="type">
                            Tặng thêm <span class="time">12 tháng</span> sử dụng
                        </div>

                        <a href="tel:  0916 825 201">
                            <button class="loadmore-btn price-consultation" style="">Tư vấn</button>
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