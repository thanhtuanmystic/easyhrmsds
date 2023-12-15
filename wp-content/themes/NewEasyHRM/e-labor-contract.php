<?php
/*
Template name: Hợp đồng lao động điện tử - Electric labor contract
*/
?>

<?php get_header() ?>
<style>
    #elc_banner {
        padding: 55px 0;
    }

    .elc-left-banner-content .elc-name {
        font-family: Nunito Sans;
        font-size: 30px;
        font-style: normal;
        font-weight: 800;
        line-height: 166.5%;
        /* 49.95px */
        background: var(--gradient, linear-gradient(287deg, #F15922 12.78%, #F6921E 95.8%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .elc-left-banner-content .elc-des {
        color: #263856;
        font-family: Nunito Sans;
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: 173.5%;
        /* 41.64px */
    }

    .elc-banner-btn .elc-free-trial {
        display: flex;
        padding: 10px 29px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: 1px solid var(--gradient, #F15922);
        background: #FFF;

        /* 4 */
        box-shadow: -1px 9px 10px 0px rgba(241, 89, 34, 0.20);
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 24px */
        background: var(--gradient, linear-gradient(287deg, #F15922 12.78%, #F6921E 95.8%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .elc-banner-btn {
        display: flex;
        gap: 20px;
        margin-top: 50px;
    }

    .elc-banner-btn .elc-give-consultation {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: #2951A0;

        /* 5 */
        box-shadow: -1px 9px 10px 0px rgba(41, 81, 160, 0.20);
        color: #FFF;
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 24px */
    }

    #elc_cons_hr {
        padding: 55px 0;
    }

    .elc-cons-hr-img {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        margin-top: 40px;
    }

    #elc_diffrent_exp {
        padding: 55px 0;
    }

    .different-exp-featured {
        min-height: 211px;
        border-radius: 8px;
        border: 1px solid var(--orange-4, #F9B899);
        background: #FFF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 12px;
        margin-bottom: 26px;
    }

    .different-exp-featured img {
        max-width: 100%;
    }

    .different-exp-featured .different-exp-featured-des {
        color: var(--Blue1, #172D58);
        font-family: Nunito Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: 184%;
        /* 36.8px */
    }

    .different-exp-left {
        display: flex;
        flex-direction: row-reverse;
    }

    #elc_ecological_network {
        padding-top: 55px;
    }

    .left-eco-network {
        display: flex;
        flex-direction: column;
    }

    .left-eco-network li {
        margin-bottom: 16px;
        color: var(--Gray-2, #263856);
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 184%;
        display: flex;
        gap: 8px;
        align-items: center;
        /* 29.44px */
    }

    #elc_form_register .first-div,
    #elc_form_register .third-div {
        height: 260px;
        background-color: white;
    }

    #elc_form_register .second-div {
        background: var(--Blue2, #2951A0);
        height: 350px;
        position: relative;

    }

    .easyhrm-elc-experience-title {
        color: #FFF;
        font-family: Nunito Sans;
        font-size: 30px;
        font-style: normal;
        font-weight: 800;
        line-height: 150%;
        /* 45px */
        margin-bottom: 16px;
    }

    .easyhrm-elc-experience li {
        color: #FFF;
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 211%;
        /* 33.76px */
        display: flex;
        gap: 10px;
        margin-bottom: 12px;
    }

    .elc-form {
        width: 60%;
        border: 2px solid var(--blue5, #EAEEF6);
    }

    .elc-form-element {
        margin-bottom: 24px;
    }

    .elc-form-label {
        margin-bottom: 8px;
    }
</style>
<section id="elc_banner">
    <div class="container">
        <div class="row padding12percent">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="elc-left-banner-content">
                    <div class="elc-name">
                        EASYHRM HỢP ĐỒNG <br>
                        LAO ĐỘNG ĐIỆN TỬ
                    </div>
                    <div class="elc-des">
                        Số hóa HĐLĐ, quản lý tập trung và
                        đảm bảo tính pháp lý tuyệt đối
                    </div>
                    <div class="elc-banner-btn">
                        <a href="#">
                            <div class="elc-free-trial">Trải nghiệm miễn phí</div>
                        </a>
                        <a href="#">
                            <div class="elc-give-consultation">Nhận tư vấn</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/17-01-1.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="elc_cons_hr">
    <div class="container">
        <div class="standard-title justify-content-center">
            Có phải HR đang mất
            hàng giờ đồng hồ mỗi ngày để...
        </div>
        <div class="elc-cons-hr-img">
            <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609413.png" alt="">
        </div>
    </div>
</section>
<section id="elc_diffrent_exp">
    <div class="container">
        <div class="standard-title justify-content-center">
            Easyhrm HĐLĐ điện tử mang đến <br>
            trải nghiệm khác biệt cho doanh nghiệp của bạn
        </div>
        <div style="margin-top: 50px" class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="different-exp-left">
                    <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609424.png"
                        alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="different-exp-featured">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609421.png" alt="">
                            <div class="different-exp-featured-des">Quản lý dễ dàng</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="different-exp-featured">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609415.png" alt="">
                            <div class="different-exp-featured-des">Tiết kiệm thời gian</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="different-exp-featured">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609417.png" alt="">
                            <div class="different-exp-featured-des">Tối ưu chi phí</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="different-exp-featured">
                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609418.png" alt="">
                            <div class="different-exp-featured-des">Bảo mật thông tin</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="pi_features">
    <div class="container">
        <div class="item-box paddingleft12percent">
            <div class="content-box ">
                <div class="pi_title-blue">
                    1. Quản lý tập trung HĐLĐ trên nền tảng số
                </div>
                <div class="personal-overall">
                    <div class="">
                        <li class="pi_answer-detail">
                            Thiết lập người đại diện ký nhanh chóng, đơn giản
                        </li>
                        <li class="pi_answer-detail">
                            Nạp - xuất dữ liệu Excel tiện lợi và dễ dàng
                        </li>
                        <li class="pi_answer-detail">
                            Kết nối linh hoạt nhiều loại thiết bị desktop, smartphone
                        </li>
                        <li class="pi_answer-detail">
                            Bộ lọc truy xuất hợp đồng dễ dàng
                        </li>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609300.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="pi_features" style="background: rgba(254, 240, 233, 0.60);">
    <div class="container">
        <div class="item-box paddingleft12percent">
            <div class="img-box">
                <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609409.png" alt="">
            </div>
            <div class="content-box ">
                <div class="pi_title-blue">
                    2. Bức trang tổng quan về tình hình lao động doanh nghiệp
                </div>
                <div class="personal-overall">
                    <div class="">
                        <li class="pi_answer-detail">
                            Biểu đồ thống kê số lượng hợp đồng theo từng tháng
                        </li>
                        <li class="pi_answer-detail">
                            Tự động cập nhật danh sách hợp đồng hết hạn, đến hạn ký, chờ ký/ từ chối ký
                        </li>
                        <li class="pi_answer-detail">
                            Ký số thông minh, mọi lúc mọi nơi, trên mọi thiết bị và ký hàng loạt
                        </li>
                        <li class="pi_answer-detail">
                            Đảm bảo uy tín doanh nghiệp với hệ thống quản lý hợp đồng
                            minh bạch
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="elc_ecological_network">
    <div class="container">
        <div style="margin-top: 10px" class="row padding12percent d-flex align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div style="text-align: left; margin-bottom: 10px" class="standard-title">
                    Mạng lưới sinh thái lớn mạnh
                </div>
                <ul class="left-eco-network">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_2190_2852)">
                                <path
                                    d="M10 0.625C4.82219 0.625 0.625 4.8225 0.625 10C0.625 15.1775 4.8225 19.375 10 19.375C15.1775 19.375 19.375 15.1775 19.375 10C19.375 4.8225 15.1775 0.625 10 0.625ZM7.82031 15.625L7.81406 15.6187L7.80875 15.625L3.4375 11.125L5.63406 8.88625L7.81437 11.1312L14.3769 4.37531L16.5625 6.62469L7.82031 15.625Z"
                                    fill="#F26522" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2190_2852">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg> Kết nối với EasyCA để ký số HĐLĐ điện tử mọi lúc mọi nơi</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path
                                d="M10 1.125C4.82219 1.125 0.625 5.3225 0.625 10.5C0.625 15.6775 4.8225 19.875 10 19.875C15.1775 19.875 19.375 15.6775 19.375 10.5C19.375 5.3225 15.1775 1.125 10 1.125ZM7.82031 16.125L7.81406 16.1187L7.80875 16.125L3.4375 11.625L5.63406 9.38625L7.81437 11.6312L14.3769 4.87531L16.5625 7.12469L7.82031 16.125Z"
                                fill="#F26522" />
                        </svg> Kết nối với EasyDocs quản lý HĐLĐ, hồ sơ, văn bản điện tử siêu tiện lợi</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/12345-01-1.png" alt="">
            </div>
        </div>
    </div>
    <div style="background: #FEF6F2; padding: 55px 0" class="safe-policy">
        <div class="container">
            <div style="margin-top: 10px" class="row padding12percent d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img style="max-width: 100%"
                        src="https://easyhrm.vn/wp-content/uploads/2023/12/an-toan-hop-tac-01.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div style="text-align: left; margin-bottom: 10px" class="standard-title">
                        Pháp lý an toàn - An tâm hợp tác
                    </div>
                    <ul class="left-eco-network">
                        <li>EasyHRM HĐLĐ điện tử đảm bảo tính pháp lý tuyệt đối theo Luật giao dịch điện tử 2005, Nghị
                            định 52/2013/NĐ-CP; Thông tư 05/2016/TT-BLĐTBXH, Luật Lao động 2019</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="elc_form_register">
    <div class="first-div"></div>
    <div class="second-div">
        <div class="container" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-lg-6 d-flex justify-content-center paddingleft12percent"
                    style="height: 100%; flex-direction: column">
                    <div class="easyhrm-elc-experience-title">
                        Trải nghiệm gói EasyHRM <br> HĐLĐ điện tử
                    </div>
                    <ul class="easyhrm-elc-experience">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <g clip-path="url(#clip0_2734_294)">
                                    <path
                                        d="M10 0.625C4.82219 0.625 0.625 4.8225 0.625 10C0.625 15.1775 4.8225 19.375 10 19.375C15.1775 19.375 19.375 15.1775 19.375 10C19.375 4.8225 15.1775 0.625 10 0.625ZM7.82031 15.625L7.81406 15.6187L7.80875 15.625L3.4375 11.125L5.63406 8.88625L7.81437 11.1312L14.3769 4.37531L16.5625 6.62469L7.82031 15.625Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2734_294">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>Tiết kiệm tới 50% chi phí </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <g clip-path="url(#clip0_2734_294)">
                                    <path
                                        d="M10 0.625C4.82219 0.625 0.625 4.8225 0.625 10C0.625 15.1775 4.8225 19.375 10 19.375C15.1775 19.375 19.375 15.1775 19.375 10C19.375 4.8225 15.1775 0.625 10 0.625ZM7.82031 15.625L7.81406 15.6187L7.80875 15.625L3.4375 11.125L5.63406 8.88625L7.81437 11.1312L14.3769 4.37531L16.5625 6.62469L7.82031 15.625Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2734_294">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>Tiết kiệm 10h quản lý mỗi tháng </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <g clip-path="url(#clip0_2734_294)">
                                    <path
                                        d="M10 0.625C4.82219 0.625 0.625 4.8225 0.625 10C0.625 15.1775 4.8225 19.375 10 19.375C15.1775 19.375 19.375 15.1775 19.375 10C19.375 4.8225 15.1775 0.625 10 0.625ZM7.82031 15.625L7.81406 15.6187L7.80875 15.625L3.4375 11.125L5.63406 8.88625L7.81437 11.1312L14.3769 4.37531L16.5625 6.62469L7.82031 15.625Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2734_294">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>Nâng cao uy tín doanh nghiệp </li>
                    </ul>
                </div>
                <div style="position: absolute; right: 0; top: -35%" class="col-md-12 col-lg-6 col-sm-12">
                    <form id="esi-form-register">
                        <div class="esi-form elc-form">
                            <div class="esi-form-title">
                                Đăng ký nhận tư vấn miễn phí
                            </div>
                            <div class="esi-form-element elc-form-element">
                                <div class="esi-form-label elc-form-label">
                                    Họ tên
                                </div>
                                <input placeholder="Ví dụ: Nguyễn Văn A" type="text" name="hoten" id="">
                            </div>
                            <div class="esi-form-element elc-form-element">
                                <div class="esi-form-label elc-form-label">
                                    Email
                                </div>
                                <input placeholder="Ví dụ: Demo@softdreams.com" type="text" name="email" id="">
                            </div>
                            <div class="esi-form-element elc-form-element">
                                <div class="esi-form-label elc-form-label">
                                    Số điện thoại
                                </div>
                                <input placeholder="Ví dụ: 0123456789" type="text" name="phonenumber" id="">
                            </div>
                            <div class="esi-form-element elc-form-element">
                                <div class="esi-form-label elc-form-label">
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
    </div>
    <div class="third-div"></div>

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