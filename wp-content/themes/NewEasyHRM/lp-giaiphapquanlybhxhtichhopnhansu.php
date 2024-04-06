<?php
/*
Template name: Landing Page - Giải pháp quản lý BHXH tích hợp nhân sự
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải pháp quản lý BHXH tích hợp nhân sự</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="icon" href="https://easyhrm.vn/wp-content/uploads/2023/07/cropped-A5.png" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&display=swap"
        rel="stylesheet" />
    <meta property="og:image" content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
    <meta property="og:image:secure_url" content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
        nonce="0Zv46Uwz"></script>
</head>
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
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        height: 80px;
        display: flex;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
        z-index: 9999;
    }


    ul {
        margin: 0;
        padding: 0;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    .left-header ul {
        display: flex;
        align-items: center;

    }

    .left-header ul li {
        margin-right: 56px;
        color: var(--Gray-2, #263856);
        text-align: center;
        font-family: Nunito Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .left-header ul li:hover {
        opacity: 0.8;
    }

    .left-header ul li a {
        color: inherit;
    }

    .right-header {
        display: flex;
        flex-direction: row-reverse;
    }

    .primary-btn {
        display: flex;
        padding: 10px 47px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        background: var(--gradient, linear-gradient(287deg, #F15922 12.78%, #F6921E 95.8%));

        /* 4 */
        box-shadow: -1px 9px 10px 0px rgba(241, 89, 34, 0.20);
        color: #FFF;
        text-align: center;
        font-family: Nunito Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .primary-btn:hover {
        opacity: 0.8;
        cursor: pointer;
    }

    #hero_section {
        background-image: url('https://easyhrm.vn/wp-content/uploads/2023/12/Frame-2609378.png');
        background-size: cover;
        padding: 80px 0;
    }

    .our_product {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .hero_section-left .title {
        color: var(--Blue1, #172D58);
        font-family: Nunito Sans;
        font-size: 36px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: uppercase;
        margin-top: 60px;
    }

    .hero_section-left .title span {
        background: var(--Secondary-Cam-Gardient, linear-gradient(270deg, #F15922 0%, #F6921E 90%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: Nunito Sans;
        font-size: 36px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: uppercase;
    }

    .hero_section-left ul {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .hero_section-left ul li {
        color: var(--Basic-1, #151F2F);
        font-family: Nunito Sans;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        display: flex;
        gap: 16px;
    }

    .hero_section-right {
        height: 760px;
        flex-shrink: 0;
        border-radius: 32px;
        background: var(--Blue2, #2951A0);
        margin-top: 60px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


    .hero_section-right .title {
        color: #FFF;
        text-align: center;
        font-family: Nunito Sans;
        font-size: 28px;
        font-style: normal;
        font-weight: 800;
        line-height: 140%;
        /* 48px */
        margin-bottom: 16px;
        width: 90%;
    }

    .form-register {
        width: 90%;
        height: 615px;
        flex-shrink: 0;
        border-radius: 24px;
        background: #FFF;
        padding: 28px 25px;
    }

    .form-register .form-label {
        color: var(--Gray-2, #263856);
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .form-row {
        margin-bottom: 20px;

    }

    .form-control {
        border-radius: 8px;
    }

    .form-control input,
    .form-control select {
        width: 100%;
        border: none;
        padding: 8px 0 8px 16px;
        color: var(--gray-4, #9BA3B1);
        font-family: Nunito Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;

    }

    .lp-title {
        color: var(--Orange-2, #F26522);
        text-align: center;
        font-family: Nunito Sans;
        font-size: 36px;
        font-style: normal;
        font-weight: 800;
        line-height: 211%;
        /* 75.96px */
        text-transform: uppercase;
    }

    #solution {
        padding: 80px 0;
    }

    .solution-box {
        display: flex;
        padding: 24px 20px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 16px;
        border: 2px solid var(--Cam-2, #F26522);
    }

    .solution-box .title {
        color: var(--Secondary-Xanh-navy, #172D58);
        font-family: Nunito Sans;
        font-size: 28px;
        font-style: normal;
        font-weight: 800;
        /* 59.08px */
    }

    .solution-box ul {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 20px;
    }

    .solution-box ul li {
        display: flex;
        gap: 16px;
        color: #000;
        text-align: center;
        font-family: Nunito Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    #easyhrm_solution {}

    .lp-subtitle {
        color: var(--Secondary-Xanh-navy, #172D58);
        text-align: center;
        font-family: Nunito Sans;
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: 211%;
        /* 50.64px */
    }

    .easyhrm_solution-image {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 24px;
        margin-bottom: 80px;
    }

    .featured-content .title {
        color: var(--Orange-2, #F26522);
        font-family: Nunito Sans;
        font-size: 28px;
        font-style: normal;
        font-weight: 800;
        /* 59.08px */
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 18px;
    }

    .featured-content ul {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .featured-content ul li {
        display: flex;
        gap: 16px;
        color: var(--Basic-1, #151F2F);
        font-family: Nunito Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .featured {
        margin-bottom: 80px;
    }

    #easyhrm_partner {
        padding: 80px;
    }

    .easyhrm_partner-img {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #easyhrm_price {
        position: relative;
    }

    .price-btn {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    footer {
        background: #F6F6F6;
        padding: 80px 0;
    }

    .footer-left .slogan {
        color: var(--Cam-2, #F26522);
        font-family: Nunito Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: uppercase;
        margin-top: 16px;
        margin-bottom: 16px;
    }

    .footer-left ul {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .footer-left ul li {
        display: flex;
        gap: 16px;
        color: var(--Basic-en, #000);
        font-family: Nunito Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 211%;
        /* 29.54px */
    }

    .another-product {
        color: #000;
        font-family: Nunito Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 211%;
        /* 29.54px */
        margin-top: 20px;
        margin-bottom: 20px;
    }

    /* Responsive  */
    @media(max-width: 1000px) {
        .header-btn {
            display: none;
        }
    }

    @media(max-width: 760px) {
        header {
            display: none;
        }

        #hero_section {
            padding: 0;
        }
    }

    @media(max-width: 480px) {

        .hero_section-left .title,
        .hero_section-left .title span {
            font-size: 20px;
        }
        .hero_section-left ul li {
            font-size: 16px;
        }
        .hero_section-right .title {
            font-size: 20px;
        }
        .our_product {
            display: none;
        }
        .lp-title  {
            font-size: 20px;
        }
        .solution-box .title {
            font-size: 20px;
        }
        .lp-subtitle  {
            font-size: 20px;
        }
        .featured-content .title  {
            font-size: 20px;
        }
        #easyhrm_partner {
            padding-bottom: 20px !important;
        }
    }

    /* write your CSS code here 90949ca6 */
    /*them nut call*/
    :root {
        --phone-text-color: #f00;
        /* màu chữ */
        --phone-icon-color: coral;
        --phone-bg-color: #52bebd;
        /* màu nền nút gọi */
        --phone-text-bg-color: #eeeb7c;
        /* màu nền text */
        --phone-border-color: #47a862;
        /* màu vòng tròn */
        --phone-hover-color: #f86e00;
        /* màu vòng tròn re chuột */
        --phone-hover2-color: red;
        /* màu vòng tròn re chuột */
    }

    .fone {
        font-size: 19px;
        /* chữ cạnh nút gọi */
        color: var(--phone-text-color);
        line-height: 40px;
        font-weight: bold;
        padding-left: 48px;
        /* cách bên trái cho chữ */
        margin: 0 0;
    }

    .fix_tel {
        position: fixed;
        bottom: 50px;
        left: 4rem;
        z-index: 999;
    }

    .fix_tel a {
        text-decoration: none;
        display: block;
    }

    .tel {
        background: var(--phone-text-bg-color);
        width: 205px;
        height: 40px;
        position: relative;
        overflow: hidden;
        background-size: 40px;
        border-radius: 28px;
        border: none
    }

    .ring-alo-phone {
        background-color: transparent;
        cursor: pointer;
        height: 80px;
        position: absolute;
        transition: visibility 0.5s ease 0s;
        visibility: hidden;
        width: 80px;
        z-index: 200000 !important;
    }

    .ring-alo-phone.ring-alo-show {
        visibility: visible;
    }

    .ring-alo-phone.ring-alo-hover,
    .ring-alo-phone:hover {
        opacity: 1;
    }

    .ring-alo-ph-circle {
        animation: 1.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim;
        background-color: transparent;
        border: 2px solid rgba(30, 30, 30, 0.4);
        border-radius: 100%;
        height: 70px;
        left: 10px;
        opacity: 0.1;
        position: absolute;
        top: 12px;
        transform-origin: 50% 50% 0;
        transition: all 0.5s ease 0s;
        width: 70px;
    }

    .ring-alo-phone.ring-alo-active .ring-alo-ph-circle {
        animation: 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
        -webkit-animation: 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
    }

    .ring-alo-phone.ring-alo-static .ring-alo-ph-circle {
        animation: 2.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
    }

    .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle,
    .ring-alo-phone:hover .ring-alo-ph-circle {
        border-color: var(--phone-border-color);
        opacity: 0.5;
    }

    .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle,
    .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle {
        border-color: var(--phone-hover2-color);
        opacity: 0.5;
    }

    .ring-alo-phone.ring-alo-green .ring-alo-ph-circle {
        border-color: var(--phone-border-color);
        opacity: 0.5;
    }

    .ring-alo-ph-circle-fill {
        animation: 2.3s ease-in-out 0s normal none infinite running ring-alo-circle-fill-anim;
        background-color: #000;
        border: 2px solid transparent;
        border-radius: 100%;
        height: 30px;
        left: 30px;
        opacity: 0.1;
        position: absolute;
        top: 33px;
        transform-origin: 50% 50% 0;
        transition: all 0.5s ease 0s;
        width: 30px;
    }

    .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle-fill,
    .ring-alo-phone:hover .ring-alo-ph-circle-fill {
        background-color: var(--phone-hover-color);
        opacity: 0.75 !important;
    }

    .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle-fill,
    .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle-fill {
        background-color: var(--phone-hover-color);
        opacity: 0.75 !important;
    }

    .ring-alo-phone.ring-alo-green .ring-alo-ph-circle-fill {
        background-color: var(--phone-hover-color);
        opacity: 0.75 !important;
    }

    .ring-alo-ph-img-circle {
        animation: 1s ease-in-out 0s normal none infinite running ring-alo-circle-img-anim;
        border: 2px solid transparent;
        border-radius: 100%;
        height: 30px;
        left: 30px;
        opacity: 1;
        position: absolute;
        top: 33px;
        transform-origin: 50% 50% 0;
        width: 30px;
    }

    .ring-alo-phone.ring-alo-hover .ring-alo-ph-img-circle,
    .ring-alo-phone:hover .ring-alo-ph-img-circle {
        background-color: var(--phone-text-bg-color);
    }

    .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-img-circle,
    .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-img-circle {
        background-color: var(--phone-hover2-color);
    }

    .ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle {
        background-color: var(--phone-bg-color);
    }

    @keyframes ring-alo-circle-anim {
        0% {
            opacity: 0.1;
            transform: rotate(0deg) scale(0.5) skew(1deg);
        }

        30% {
            opacity: 0.5;
            transform: rotate(0deg) scale(0.7) skew(1deg);
        }

        100% {
            opacity: 0.6;
            transform: rotate(0deg) scale(1) skew(1deg);
        }
    }

    @keyframes ring-alo-circle-img-anim {
        0% {
            transform: rotate(0deg) scale(1) skew(1deg);
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg);
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg);
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg);
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg);
        }

        50% {
            transform: rotate(0deg) scale(1) skew(1deg);
        }

        100% {
            transform: rotate(0deg) scale(1) skew(1deg);
        }
    }

    @keyframes ring-alo-circle-fill-anim {
        0% {
            opacity: 0.2;
            transform: rotate(0deg) scale(0.7) skew(1deg);
        }

        50% {
            opacity: 0.2;
            transform: rotate(0deg) scale(1) skew(1deg);
        }

        100% {
            opacity: 0.2;
            transform: rotate(0deg) scale(0.7) skew(1deg);
        }
    }

    .ring-alo-ph-img-circle a img {
        padding: 1px 0 12px 1px;
        width: 30px;
        position: relative;
        top: -1px;
    }

    @keyframes tilt-shaking {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(5deg);
        }

        50% {
            transform: rotate(0eg);
        }

        75% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .rise-shake {
        animation: tilt-shaking 0.5s infinite;
    }
</style>

<body>
    <div class="fix_tel">
        <div class="div rung rise-shake">
            <a target="_blank" href="https://zalo.me/1647287051622286895">
                <img style="width: 50px;
                margin-bottom: 2rem;
                border: 1px solid #ccc;
                border-radius: 2rem;" src="http://easyposs.vn/wp-content/uploads/2023/10/Logo-Zalo-Arc.webp" alt="">
            </a>
        </div>
        <div class="div rung rise-shake">
            <a target="_blank" href="https://www.facebook.com/messages/t/113784485150350">
                <img style="width: 50px;
                margin-bottom: 2rem;
                border: 1px solid #ccc;
                border-radius: 2rem;"
                    src="https://easyhrm.vn/wp-content/uploads/2024/02/Facebook_Messenger_logo_2020.svg_.png" alt="">
            </a>
        </div>
        <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon"
            style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle">
            </div>
            <div class="ring-alo-ph-circle-fill">
            </div>
            <div class="ring-alo-ph-img-circle">
                <a href="tel:0916 825 201 "><img class="lazy"
                        src="https://easyhrm.vn/wp-content/uploads/2024/02/call.png" alt="G"></a>
            </div>
        </div>
        <div class="tel">
            <a href="tel:0916 825 201 ">
                <p class="fone">
                    0916 825 201
                </p>
            </a>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-header">
                        <ul>
                            <li><a href=""><img src="https://easyhrm.vn/wp-content/uploads/2024/03/Group-2609350.png"
                                        alt=""></a></li>
                            <li><a href=""><img src="https://easyhrm.vn/wp-content/uploads/2023/12/Layer_1.png"
                                        alt=""></a></li>
                            <li><a class="scroll-link" href="#solution">Giải pháp</a></li>
                            <li><a target="_blank" href="https://easyhrm.vn/easyhrm-standard/#standard_price">Báo
                                    giá</a></li>
                            <li><a class="scroll-link" href="#easyhrm_partner">Khách hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-header">
                        <a target="_blank" href="https://app.easyhrm.vn/trial-registration">
                            <div class="primary-btn header-btn">
                                Trải nghiệm ngay
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="hero_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="hero_section-left">
                        <div class="title">
                            Giải pháp quản lý Bảo hiểm xã hội
                            <span>tích hợp nhân sự thông minh</span>
                        </div>
                        <ul>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path d="M6.66797 16.0002L13.3346 22.6668L26.668 9.3335" stroke="#119626"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Quản lý, lưu trữ hồ sơ nhân sự chi tiết, khoa học</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path d="M6.66797 16.0002L13.3346 22.6668L26.668 9.3335" stroke="#119626"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Tích hợp sẵn 39+ mẫu quy định, hợp đồng chuẩn pháp lý</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="32 " height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path d="M6.66797 16.0002L13.3346 22.6668L26.668 9.3335" stroke="#119626"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Đầy đủ 28+ nghiệp vụ bảo hiểm xã hội điện tử</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path d="M6.66797 16.0002L13.3346 22.6668L26.668 9.3335" stroke="#119626"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Nhân viên chủ động kiểm soát thông tin, quyền lợi</li>
                        </ul>
                        <img style="max-width: 100%"
                            src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609357.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="hero_section-right">
                        <div class="title">
                            Ưu đãi chỉ từ 589K/năm <br>
                            Tặng ngay 6 tháng sử dụng
                        </div>
                        <div class="form-register">
                            <form id="landingpage_form" action="">
                                <div class="form-row">
                                    <div class="form-label">Họ tên</div>
                                    <div class="form-control">
                                        <input name="hoten" type="text" placeholder="Nhập họ tên">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Số điện thoại</div>
                                    <div class="form-control">
                                        <input name="phonenumber" type="text" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Email</div>
                                    <div class="form-control">
                                        <input name="email" type="text" placeholder="Nhập Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Chức vụ</div>
                                    <div class="form-control">
                                        <select name="chucvu" id="">
                                            <option value="khac">Chọn chức vụ</option>
                                            <option value="hrm">HRM</option>
                                            <option value="ke_toan">Kế toán</option>
                                            <option value="ceo">CEO</option>
                                            <option value="khac">Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-label">Tên doanh nghiệp/ Mã số thuế</div>
                                    <div class="form-control">
                                        <input name="taxcode" type="text"
                                            placeholder="Nhập tên doanh nghiệp/ mã số thuế">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <style>
                                        .load-2 {
                                            text-align: center;
                                            display: none;
                                        }

                                        .line {
                                            display: inline-block;
                                            width: 15px;
                                            height: 15px;
                                            border-radius: 15px;
                                            background-color: #4b9cdb;
                                        }

                                        .load-2 .line:nth-last-child(1) {
                                            animation: loadingB 1.5s 1s infinite;
                                        }

                                        .load-2 .line:nth-last-child(2) {
                                            animation: loadingB 1.5s 0.5s infinite;
                                        }

                                        .load-2 .line:nth-last-child(3) {
                                            animation: loadingB 1.5s 0s infinite;
                                        }

                                        @keyframes loadingB {
                                            0 {
                                                width: 15px;
                                            }

                                            50% {
                                                width: 35px;
                                            }

                                            100% {
                                                width: 15px;
                                            }
                                        }

                                        #openModalBtn:hover,
                                        #openModalBtn2:hover {
                                            cursor: pointer;
                                            opacity: 0.8;
                                        }
                                    </style>
                                    <div id="loading" class="load-2">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <button class="submit_form_ungtuyen" style="border: none; width: 100%"
                                        type="submit">
                                        <div class="primary-btn">
                                            Nhận ưu đãi
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="our_product">
        <h2>Hệ sinh thái của chúng tôi</h2>
        <img src="https://easyhrm.vn/wp-content/uploads/2024/03/Frame-427322958-1.png" alt="">
    </div>
    <section id="solution">
        <div class="container">
            <div class="lp-title">
                Giải pháp quản lý Bảo hiểm xã hội bạn đang sử dụng Liệu có đáp ứng Được?
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="solution-box">
                        <div class="title">
                            Phần mềm BHXH thông thường
                        </div>
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Dữ liệu rời rạc, phải nhập tay từ file excel lên hệ thống</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Không tự động dự toán số tiền thu - chi BHXH,</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>Thiếu khả năng tổng hợp biến động và đối soát theo kỳ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="solution-box">
                        <div class="title">
                            Cổng dịch vụ miễn phí
                        </div>
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Nghiệp vụ phức tạp, giao diện khó thao tác</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Khả năng hỗ trợ, xử lý tình huống khẩn cấp thấp</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                    fill="none">
                                    <path d="M9.83203 9.33301L23.1654 22.6663M9.83203 22.6663L23.1654 9.33301"
                                        stroke="#FF0000" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Thường xuyên gặp lỗi, bảo trì hệ thống</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="easyhrm_solution">
        <div class="container">
            <div class="lp-title">
                Giải pháp EasyHRM Standard 3 trong 1
            </div>
            <div class="lp-subtitle">
                Cùng trong hệ sinh thái với EasyInvoice, giải pháp quản lý BHXH tích hợp nhân sự EasyHRM khắc phục tất
                cả nhược điểm của công cụ quản lý BHXH thông thường hiện nay, đem đến trải nghiệm số hoàn toàn khác
                biệt!
            </div>
        </div>
        <div class="easyhrm_solution-image">
            <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Frame-1-1.png" alt="">
        </div>
        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="64" viewBox="0 0 63 64"
                                    fill="none">
                                    <circle cx="31.5" cy="32.4551" r="31.5" fill="#FEF6F2" />
                                    <path
                                        d="M24.5547 40.7884V39.3995C24.5547 35.5642 27.6638 32.4551 31.4991 32.4551C35.3344 32.4551 38.4436 35.5642 38.4436 39.3995V40.7884"
                                        stroke="#F16623" stroke-width="2" stroke-linecap="round" />
                                    <path
                                        d="M31.4987 32.4549C33.7999 32.4549 35.6654 30.5895 35.6654 28.2882C35.6654 25.9871 33.7999 24.1216 31.4987 24.1216C29.1974 24.1216 27.332 25.9871 27.332 28.2882C27.332 30.5895 29.1974 32.4549 31.4987 32.4549Z"
                                        stroke="#F16623" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44 20.7884V44.1217C44 44.582 43.6269 44.9551 43.1667 44.9551H19.8333C19.3731 44.9551 19 44.582 19 44.1217V20.7884C19 20.3282 19.3731 19.9551 19.8333 19.9551H43.1667C43.6269 19.9551 44 20.3282 44 20.7884Z"
                                        stroke="#F16623" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Hợp nhất, số hóa thông tin nhân sự toàn diện
                            </div>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Theo sát tình hình nhân sự realtime,
                                    hỗ trợ quản lý tổng quan (thông báo hợp đồng, danh sách nhân viên,...)
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Lưu trữ không giới hạn toàn bộ dữ liệu nhân sự
                                    (hồ sơ, nhân thân, thông tin thai sản,..)
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Dữ liệu được quản lý đa chiều, liên tục được nhân viên
                                    chủ động cập nhật (lưu lịch sử chỉnh sửa)
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Có sẵn mẫu hợp đồng, quyết định, ban hành
                                    nội bộ nhanh chóng (cho phép tích hợp ký số)
                                </li>
                                <li>
                                    <a class="scroll-link" href="#hero_section">
                                        <div class="primary-btn">
                                            Tư vấn ngay
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-image">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-33982.png"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34061.png"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34080-1.png"
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
        </div>
        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-image">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609387.png"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-631783.png"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609374-1.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </body>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <div class="title">
                                <img style="max-width: 100%"
                                    src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-33866.png" alt="">
                                Thực hiện hồ sơ, thủ tục
                                bảo hiểm xã hội trực tuyến
                            </div>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Tổng hợp danh sách nộp và chi trả BHXH định kỳ tự động cập nhật
                                    trực tiếp trên hệ thống
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Danh sách thủ tục rõ ràng, có sẵn mẫu kê khai từng hạng mục tiện lợi
                                    (thủ tục thu, chi, sổ thẻ)
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Kiểm soát thu - chi BHXH của doanh nghiệp, đối soát với
                                    BHXH Việt Nam đưa ra cảnh báo chênh lệch
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>Tra cứu C12 tiện lợi, kiểm soát biến động nhân sự đóng BHXH
                                    qua từng tháng
                                </li>
                                <li>
                                    <a class="scroll-link" href="#hero_section">
                                        <div class="primary-btn">
                                            Tư vấn ngay
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="64" viewBox="0 0 63 64"
                                    fill="none">
                                    <circle cx="31.5" cy="31.5967" r="31.5" fill="#FEF6F2" />
                                    <path
                                        d="M31 29.0391C33.7614 29.0391 36 26.8005 36 24.0391C36 21.2776 33.7614 19.0391 31 19.0391C28.2386 19.0391 26 21.2776 26 24.0391C26 26.8005 28.2386 29.0391 31 29.0391Z"
                                        stroke="#F26522" stroke-width="2" />
                                    <path
                                        d="M41 38.4141C41 41.5203 41 44.0391 31 44.0391C21 44.0391 21 41.5203 21 38.4141C21 35.3078 25.4775 32.7891 31 32.7891C36.5225 32.7891 41 35.3078 41 38.4141Z"
                                        stroke="#F26522" stroke-width="2" />
                                </svg> Nhân viên chủ động kiểm soát thông tin cá nhân
                            </div>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Nộp hồ sơ trực tuyến dễ dàng, theo dõi tình trạng các giấy tờ
                                    và nhận yêu cầu hoàn thiện từ HR
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Quản lý  thông tin cá nhân chi tiết, yêu cầu chỉnh sửa thông tin
                                    khi có sai sót trực tiếp trên hệ thống
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                        fill="none">
                                        <path d="M6.66797 16.1657L13.3346 22.8324L26.668 9.49902" stroke="#119626"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> Theo dõi trạng thái tham gia Bảo hiểm trực tiếp trên hệ thống
                                    (đợt kê khai, phương án điều chỉnh, mức lương điều chỉnh,...)
                                </li>
                                <li>
                                    <a class="scroll-link" href="#hero_section">
                                        <div class="primary-btn">
                                            Tư vấn ngay
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-image">

                            <body>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-2609388.png"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-34018.png"
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
        </div>
    </section>
    <section id="easyhrm_benefit">
        <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Frame-631820.png" alt="">
    </section>
    <section id="easyhrm_partner">
        <div class="container">
            <div class="lp-title">CÁC KHÁCH HÀNG ĐÃ LỰA CHỌN EASYHRM</div>
            <div class="easyhrm_partner-img">
                <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Group-254.png" alt="">
            </div>
        </div>
    </section>
    <section id="easyhrm_price">
        <img style="max-width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/12/Frame-2609368.png" alt="">
        <a class="scroll-link" href="#hero_section">
            <div class="primary-btn price-btn ">Nhận ưu đãi ngay</div>
        </a>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="logo">
                            <img style="max-width: 100%"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/Rectangle.png" alt="">
                        </div>
                        <div class="slogan">Dễ dàng tự động hóa quản trị nhân sự</div>
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <g clip-path="url(#clip0_984_1031)">
                                        <path
                                            d="M12 2.41699C14.3869 2.41699 16.6761 3.3652 18.364 5.05303C20.0518 6.74086 21 9.03004 21 11.417C21 14.491 19.324 17.007 17.558 18.812C16.6755 19.7039 15.7128 20.5126 14.682 21.228L14.256 21.518L14.056 21.651L13.679 21.891L13.343 22.096L12.927 22.338C12.6445 22.4988 12.325 22.5833 12 22.5833C11.675 22.5833 11.3555 22.4988 11.073 22.338L10.657 22.096L10.137 21.776L9.945 21.651L9.535 21.378C8.42298 20.6253 7.38707 19.7659 6.442 18.812C4.676 17.006 3 14.491 3 11.417C3 9.03004 3.94821 6.74086 5.63604 5.05303C7.32387 3.3652 9.61305 2.41699 12 2.41699ZM12 8.41699C11.606 8.41699 11.2159 8.49459 10.8519 8.64535C10.488 8.79612 10.1573 9.0171 9.87868 9.29567C9.6001 9.57425 9.37913 9.90496 9.22836 10.2689C9.0776 10.6329 9 11.023 9 11.417C9 11.811 9.0776 12.2011 9.22836 12.565C9.37913 12.929 9.6001 13.2597 9.87868 13.5383C10.1573 13.8169 10.488 14.0379 10.8519 14.1886C11.2159 14.3394 11.606 14.417 12 14.417C12.7956 14.417 13.5587 14.1009 14.1213 13.5383C14.6839 12.9757 15 12.2126 15 11.417C15 10.6213 14.6839 9.85828 14.1213 9.29567C13.5587 8.73306 12.7956 8.41699 12 8.41699Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_984_1031">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.416992)" />
                                        </clipPath>
                                    </defs>
                                </svg>Nhà khách ATS, số 8 Phạm Hùng, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M18.3274 22.9166C17.4124 22.9166 16.1271 22.5856 14.2024 21.5103C11.862 20.1978 10.0516 18.9861 7.72383 16.6644C5.47946 14.4214 4.38727 12.9692 2.85868 10.1877C1.1318 7.04703 1.42618 5.40078 1.75524 4.69718C2.14712 3.85624 2.72555 3.35328 3.47321 2.85406C3.89787 2.57582 4.34727 2.33732 4.81571 2.14156C4.86258 2.1214 4.90618 2.10218 4.94508 2.08484C5.17712 1.98031 5.52868 1.82234 5.97399 1.99109C6.27118 2.10265 6.53649 2.33093 6.9518 2.74109C7.80352 3.58109 8.96743 5.45187 9.3968 6.37062C9.68508 6.98984 9.87587 7.39859 9.87633 7.85703C9.87633 8.39374 9.60633 8.80765 9.27868 9.25437C9.21727 9.33828 9.15633 9.41843 9.09727 9.49624C8.74055 9.96499 8.66227 10.1005 8.71383 10.3423C8.81837 10.8284 9.5979 12.2755 10.879 13.5537C12.1601 14.832 13.5654 15.5623 14.0534 15.6664C14.3056 15.7203 14.4438 15.6387 14.9276 15.2694C14.997 15.2164 15.0682 15.1616 15.1427 15.1067C15.6424 14.735 16.0371 14.472 16.5612 14.472H16.564C17.0201 14.472 17.4106 14.6698 18.0574 14.9961C18.9012 15.4217 20.8282 16.5706 21.6734 17.4233C22.0845 17.8377 22.3137 18.102 22.4257 18.3987C22.5945 18.8455 22.4356 19.1956 22.332 19.43C22.3146 19.4689 22.2954 19.5116 22.2752 19.5589C22.0779 20.0265 21.838 20.475 21.5585 20.8986C21.0602 21.6439 20.5554 22.2209 19.7126 22.6133C19.2798 22.818 18.8062 22.9217 18.3274 22.9166Z"
                                        fill="black" />
                                </svg> 091 682 52 01</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M4 20.417C3.45 20.417 2.97933 20.2213 2.588 19.83C2.19667 19.4387 2.00067 18.9677 2 18.417V6.41699C2 5.86699 2.196 5.39633 2.588 5.00499C2.98 4.61366 3.45067 4.41766 4 4.41699H20C20.55 4.41699 21.021 4.61299 21.413 5.00499C21.805 5.39699 22.0007 5.86766 22 6.41699V18.417C22 18.967 21.8043 19.438 21.413 19.83C21.0217 20.222 20.5507 20.4177 20 20.417H4ZM12 13.417L20 8.41699V6.41699L12 11.417L4 6.41699V8.41699L12 13.417Z"
                                        fill="black" />
                                </svg>contact@easyhrm.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-right">
                        <div class="logo">
                            <img style="max-width: 100%"
                                src="https://easyhrm.vn/wp-content/uploads/2023/12/68c9596f-23b1-42d4-8f62-20dc21a9f602-3.png"
                                alt="">
                        </div>
                        <div class="another-product">Các sản phẩm khác của chúng tôi</div>
                        <div class="row">
                            <div style="margin-bottom: 20px" class="col-lg-6">
                                <a target="_blank" href="https://easyinvoice.vn/"> <img style="max-width: 100%"
                                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Isolation_Mode.png"
                                        alt=""></a>
                            </div>
                            <div class="col-lg-6">
                                <a target="_blank" href="https://easybooks.vn/"><img style="max-width: 100%"
                                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Isolation_Mode-2.png"
                                        alt=""></a>
                            </div>
                            <div class="col-lg-6">
                                <a target="_blank" href="https://easydocs.vn/"> <img style="max-width: 100%"
                                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Isolation_Mode-1.png"
                                        alt=""></a>
                            </div>
                            <div class="col-lg-6">
                                <a target="_blank" href="https://easyca.vn/"><img style="max-width: 100%"
                                        src="https://easyhrm.vn/wp-content/uploads/2023/12/Isolation_Mode-3.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {});
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    $(document).ready(function () {
        // Bắt sự kiện click cho các liên kết có lớp "scroll-link"
        $('.scroll-link').on('click', function (e) {
            e.preventDefault();
            // Lấy vị trí của phần tử cần scroll đến
            const targetId = $(this).attr('href').substring(1);
            const targetElement = $('#' + targetId);
            // Scroll đến vị trí của phần tử
            $('html, body').animate({
                scrollTop: targetElement.offset().top - $('header').outerHeight() - 150
            }, 500);
        });
    });
</script>
<script>
    $(document).ready(function () {
        //khai báo nút submit form
        var submitt = $("#landingpage_form").find("button[type='submit']");

        //khi thực hiện kích vào nút submit
        submitt.click(function () {
            //khai báo các biến
            var hoten = $("input[name='hoten']").val();
            var email = $("input[name='email']").val();
            var phonenumber = $("input[name='phonenumber']").val();
            var taxcode = $("input[name='taxcode']").val();
            //
            if (hoten == "") {
                alert("Vui lòng nhập tên");
                return false;
            }
            if (email == "") {
                alert("Vui lòng nhập email");
                return false;
            }

            if (phonenumber == "") {
                alert("Vui lòng nhập điện thoại");
                return false;
            }
            if (taxcode == "") {
                alert("Vui lòng nhập mã số thuế");
                return false;
            }
            if (phonenumber.length < 10) {
                alert("Vui lòng số điện thoại chính xác!");
                return false;
            }
            if (taxcode.length < 10) {
                alert("Vui lòng nhập đầy đủ mã số thuế!");
                return false;
            }
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
                alert("Địa chỉ Email không hợp lệ, hãy nhập lại");
                return false;
            }
            $("#loading").show();
            $('.submit_form_ungtuyen').hide();

            // $("#formdkdt img").css("display", "block");

            var data = $("form#landingpage_form").serialize();

            $.ajax({
                type: "POST",
                url: "<?php bloginfo('template_directory') ?>/sendmail.php",
                data: data,
                success: function (data) {
                    console.log(data);
                    $("#landingpage_form").html(data);
                },
            });
            return false;
        });
    });
</script>

</html>