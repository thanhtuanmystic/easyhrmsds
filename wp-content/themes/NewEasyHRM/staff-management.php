<?php
/*
Template name: EasyHRM Nhân Viên - Staff Management
*/
?>
<?php get_header() ?>
<section class="pi_banner">
    <div class="container">
        <div class="row center-row">
            <div class="col-md-6">
                <div class="pi_slogan">
                    EASY HRM NHÂN VIÊN
                </div>
                <div class="pi_subslogan">
                    Tự động hóa quản lý hồ sơ cá nhân, <br>
                    kiểm soát quyền lợi người lao động
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
                    src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_20_00_653Z.png" alt="" />
            </div>

        </div>
        <div class="pi_seperation"></div>
    </div>
</section>
<section id="sm_digital_records">
    <div class="container">
        <div class="pi-title">DỄ DÀNG QUẢN LÝ HỒ SƠ SỐ</div>
        <div>
            <img style="width: 100%; margin-top: 50px"
                src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_22_22_202Z.png" alt="">
        </div>
    </div>
</section>
<section id="sm_digital_records_experience">
    <div class="container">
        <div class="pi-title">
            MANG ĐẾN TRẢI NGHIỆM QUẢN LÝ SỐ CHO NHÂN SỰ
            <div class="pi_seperation-fix"></div>
        </div>
        <div class="pi-subtitle">
            Cá nhân hóa trải nghiệm quản lý thông tin cá nhân, hồ sơ nhân sự tại doanh nghiệp
        </div>
    </div>
    <div class="pi_features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sm_title-blue">
                        01 Trực tiếp giám sát, theo dõi hồ sơ cá nhân
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
                    <div class="sm_title-blue">
                        02 Kiểm soát được quyền lợi, chế độ
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
    <div class="pi_features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sm_title-blue">
                        03 Trực tiếp giám sát, theo dõi hồ sơ cá nhân
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
                    <div class="sm_title-blue">
                        04 Kiểm soát được quyền lợi, chế độ
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
</section>
<section id="sm_auto_staff_report_management">
    <div class="container">
        <div class="row center-row">
            <div class="col-md-6 center-row">
                <img style="width: 60%"
                    src="https://easyhrm.vn/wp-content/uploads/2023/09/image_2023_09_14T03_56_06_783Z.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="auto-srm-title">
                    EASYHRM GIÚP SẾP TỰ ĐỘNG HÓA <br>
                    QUẢN TRỊ HỒ SƠ NHÂN SỰ
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
<section id="hrm_consulation_register">
    <div class="container">
        <div class="form-register">
            <div class="hrm-title hrm-title-mobile justify-content-center" style="margin-bottom: 0">
                <div style="color: #fff">EASYHRM LẮNG NGHE VẤN ĐỀ CỦA BẠN</div>
            </div>
            <div class="hrm-ref2 text-center" style="color: #fff">
                Chúng tôi luôn sẵn sàng lắng nghe vấn đề của bạn và doanh nghiệp bất
                cứ lúc nào. Sứ mệnh của EasyHRM không chỉ mang đến sản phẩm tốt mà
                hơn cả là một giải pháp quản lý nhân sự toàn diện và dễ dàng.
            </div>
            <form id="hrm_form_register">
                <div class="form-title">ĐĂNG KÝ NHẬN TƯ VẤN MIỄN PHÍ</div>
                <div class="row display_responsive">
                    <div class="col-md-6 col-sm-12 form-element">
                        <label for="" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" placeholder="Ví dụ: Nguyễn Văn A" name="hoten" />
                    </div>
                    <div class="col-md-6 col-sm-12 form-element">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Ví dụ: Demo@softdreams.com" name="email" />
                    </div>
                    <div class="col-md-6 col-sm-12 form-element">
                        <label for="" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" placeholder="Ví dụ: 0979686888" name="phonenumber" />
                    </div>
                    <div class="col-md-6 col-sm-12 form-element">
                        <label for="" class="form-label">Mã số thuế</label>
                        <input type="text" class="form-control" placeholder="Ví dụ: 135791113" name="taxcode" />
                    </div>
                </div>
                <button type="submit" style="width: 100%" class="loadmore-btn">
                    Nhận tư vấn
                </button>
            </form>
        </div>
    </div>
</section>
<?php get_footer() ?>