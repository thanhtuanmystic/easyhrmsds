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
                <div class="button-banner slide-left">
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
                        if (have_rows('pi_list_question', 'option')):
                            while (have_rows('pi_list_question', 'option')):
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
                        if (have_rows('pi_list_question', 'option')):
                            while (have_rows('pi_list_question', 'option')):
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
        <img width="100%" src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_13T04_48_57_978Z.png"
            alt="" />
        <div class="container banner-seperation-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="pi_banner-content-text">
                        Chuyển đổi số đồng bộ thông tin nhân sự & BHXH
                        <br>
                        Chỉ từ <span class="pi_589">589</span>k
                    </div>
                    <a target="_blank" href="https://easyca.vn/">
                        <div class="" style="text-align: cetcenter">
                            <button class="give-consulation-immediatetly">Nhận tư vấn ngay</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>