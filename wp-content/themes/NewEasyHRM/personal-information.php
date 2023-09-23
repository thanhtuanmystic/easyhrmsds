<?php
/*
Template name: Thông tin nhân sự - Personal Information
*/
?>
<?php get_header() ?>

<section class="pi_banner">
    <div class="container">
        <div class="row center-row">
            <div class="col-md-6">
                <div class="pi_slogan">
                    EASY HRM THÔNG TIN NHÂN SỰ
                </div>
                <div class="pi_subslogan">
                    Số hóa hồ sơ nhân sự, <br>
                    quản lý tập trung siêu dễ dàng
                </div>
                <div class="button-banner slide-left" >
                    <a href="#">
                        <button class="pi_free-trial">Trải nghiệm miễn phí</button>
                    </a>
                    <a href="#hrm_consulation_register">
                        <button class="give-consultation">Nhận tư vấn</button>
                    </a>
                    <a href="tel: 1900545415">
                        <button class="buy-now">Mua ngay</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 slide-right">
                <img class="banner-picture-right"
                    src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T01_43_51_240Z.png" alt="" />
            </div>

        </div>
        <div class="pi_seperation"></div>
    </div>
</section>

<section class="pi_personal_information">
    <div class="container">
        <div class="pi-title justify-content-center">
            <div>EASY HRM THÔNG TIN NHÂN SỰ</div>
            <div class="pi_seperation-fix">
            </div>
        </div>
        <div class="pi-subtitle">
            Mọi thao tác quản trị nhân lực trở nên đơn giản hơn bao giờ hết!
        </div>
        <div class="row">
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
    </div>
    <div class="pi_features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pi_title-blue">
                        01 Tổng quan nhân sự doanh nghiệp
                    </div>
                    <div class="pi_sub-title-blue">
                        Xây dựng chiến lược quản trị sáng suốt
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6 align-row">
                    <div class="personal-overall">
                        <?php
                        if (have_rows('ttns_pi_list_question_01', 'option')):
                            while (have_rows('ttns_pi_list_question_01', 'option')):
                                the_row(); ?>
                                <div class="pi_question-row">
                                    <div class="row center-row">
                                        <div class="col-md-11">
                                            <div style="text-align: left" class="pi_the-question pi_click-question">
                                                <?php echo get_sub_field('pi_question', 'option') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 openclose">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                alt="" />
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
                <div class="col-md-6">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T03_11_47_271Z.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="pi_title-blue">
                        02 Hồ sơ nhân viên chi tiết
                    </div>
                    <div class="pi_sub-title-blue">
                        Tạo lập chiến lược người dùng thông minh
                    </div>
                </div>
                <div class="col-md-6">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T03_11_47_271Z.png" alt="">
                </div>
                <div class="col-md-6 align-row">
                    <div class="personal-overall">
                        <?php
                        if (have_rows('ttns_pi_list_question_02', 'option')):
                            while (have_rows('ttns_pi_list_question_02', 'option')):
                                the_row(); ?>
                                <div class="pi_question-row">
                                    <div class="row center-row">
                                        <div class="col-md-11">
                                            <div style="text-align: left" class="pi_the-question pi_click-question">
                                                <?php echo get_sub_field('pi_question', 'option') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 openclose">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                alt="" />
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
                <div class="col-md-6">
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
            <div class="row">
                <div class="col-md-6">
                    <div class="pi_title-blue">
                        03 Ban hành quyết định nhanh chóng
                    </div>
                    <div class="pi_sub-title-blue">
                        Thực thi đồng bộ toàn hệ thống số
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6 align-row">
                    <div class="personal-overall">
                        <?php
                        if (have_rows('ttns_pi_list_question_03', 'option')):
                            while (have_rows('ttns_pi_list_question_03', 'option')):
                                the_row(); ?>
                                <div class="pi_question-row">
                                    <div class="row center-row">
                                        <div class="col-md-11">
                                            <div style="text-align: left" class="pi_the-question pi_click-question">
                                                <?php echo get_sub_field('pi_question', 'option') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 openclose">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                alt="" />
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
                <div class="col-md-6">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T03_11_47_271Z.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="pi_title-blue">
                        04 Phúc lợi & Phụ cấp minh bạch
                    </div>
                    <div class="pi_sub-title-blue">
                        Quản lý chi tiết mọi phát sinh
                    </div>
                </div>
                <div class="col-md-6">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T03_11_47_271Z.png" alt="">
                </div>
                <div class="col-md-6 align-row">
                    <div class="personal-overall">
                        <?php
                        if (have_rows('ttns_pi_list_question_04', 'option')):
                            while (have_rows('ttns_pi_list_question_04', 'option')):
                                the_row(); ?>
                                <div class="pi_question-row">
                                    <div class="row center-row">
                                        <div class="col-md-11">
                                            <div style="text-align: left" class="pi_the-question pi_click-question">
                                                <?php echo get_sub_field('pi_question', 'option') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 openclose">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                alt="" />
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
            <div class="row">
                <div class="col-md-6">
                    <div class="pi_title-blue">
                        05 Báo cáo & Thiết lập dễ dàng
                    </div>
                    <div class="pi_sub-title-blue">
                        Tiết kiệm tới 10 giờ quản lý nhân sự mỗi tuần
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6 align-row">
                    <div class="personal-overall">
                        <?php
                        if (have_rows('ttns_pi_list_question_05', 'option')):
                            while (have_rows('ttns_pi_list_question_05', 'option')):
                                the_row(); ?>
                                <div class="pi_question-row">
                                    <div class="row center-row">
                                        <div class="col-md-11">
                                            <div style="text-align: left" class="pi_the-question pi_click-question">
                                                <?php echo get_sub_field('pi_question', 'option') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 openclose">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/08/tabler_caret-down-filled-1.png"
                                                alt="" />
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
                <div class="col-md-6">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T03_11_47_271Z.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pi_great_personal">
    <div class="container">
        <div class="pi-title text-center">
            EASYHRM ĐỒNG HÀNH CÙNG SẾP<br> XÂY DỰNG
            BỘ MÁY NHÂN SỰ TỊNH NHUỆ
        </div>
        <div>
            <img style="width: 100%"
                src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T08_47_01_086Z.png" alt="">
        </div>
    </div>
</section>
<section id="pi_signature_customer">
    <div class="container">
        <div class="hrm-title justify-content-center">
            <div>Khách hàng tiêu biểu</div>

            <div class="seperation-fix"></div>
        </div>
        <div class="brand-list">
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_30T07_06_39_620Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_30T07_06_44_869Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_30T07_06_48_990Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_30T07_06_53_096Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_06T01_56_01_202Z.png" alt="" />
            </div>
        </div>
        <div class="brand-list">
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_12_684Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_18_221Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_23_873Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_27_043Z.png" alt="" />
            </div>
        </div>
        <div class="brand-list">
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_29_796Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_38_693Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_42_609Z.png" alt="" />
            </div>
            <div>
                <img src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_05T07_55_46_131Z.png" alt="" />
            </div>
        </div>
    </div>
</section>
<section id="pi_saying_of_the_day">
    <div class="container">
        <div class="pi-title text-center">
            CÂU NÓI NGÀY HÔM NAY
        </div>
        <div class="saying-box">
            <div class="row">
                <div class="col-md-5">
                    <img style="width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T09_08_40_738Z.png" alt="">
                </div>
                <div class="col-md-7">
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