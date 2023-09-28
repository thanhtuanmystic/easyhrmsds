<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="icon" href="https://easyhrm.vn/wp-content/uploads/2023/07/cropped-A5.png" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&display=swap"
        rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
    <meta property="og:image:secure_url" content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animation.css" />


    <title>EasyHRM</title>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
        nonce="0Zv46Uwz"></script>
</head>
<style>
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Nunito Sans;

    }

    body {
        min-height: 100vh;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        height: 100px;
        background: #fff;
        z-index: 99;
    }

    nav .navbar {
        height: 100%;
        max-width: 1250px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: auto;
        /* background: red; */
        padding: 0 50px;
    }

    .navbar .logo a {
        font-size: 30px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    nav .navbar .nav-links {
        line-height: 70px;
    }

    nav .navbar .links {
        display: flex;
    }

    nav .navbar .links li {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        list-style: none;
        padding: 0 14px;
    }

    nav .navbar .links li a {
        height: 100%;
        text-decoration: none;
        white-space: nowrap;
        color: var(--gray-2, #263856);


        font-size: 16px;
        font-style: normal;
        font-weight: 700;
    }

    nav .navbar .links li a:hover {
        color: orangered;
    }

    .links li:hover .htmlcss-arrow,
    .links li:hover .js-arrow {
        transform: rotate(180deg);
    }

    nav .navbar .links li .arrow {
        /* background: red; */
        height: 100%;
        width: 22px;
        line-height: 70px;
        text-align: center;
        display: inline-block;
        color: var(--gray-2, #263856);
        ;
        transition: all 0.3s ease;
    }

    nav .navbar .links li .sub-menu {
        position: absolute;
        min-width: 240px;
        top: 70px;
        left: 0;
        line-height: 40px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 4px 4px;
        display: none;
        z-index: 2;
    }

    nav .navbar .links li:hover .htmlCss-sub-menu,
    nav .navbar .links li:hover .js-sub-menu {
        display: block;
    }

    .navbar .links li .sub-menu li {
        padding: 0 22px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .navbar .links li .sub-menu a {
        color: var(--gray-2, #263856);
        font-size: 15px;
        font-weight: 500;
    }

    .navbar .links li .sub-menu a:hover {
        color: orangered;
    }

    .navbar .links li .sub-menu .more-arrow {
        line-height: 40px;
    }

    .navbar .links li .htmlCss-more-sub-menu {
        /* line-height: 40px; */
    }

    .navbar .links li .sub-menu .more-sub-menu {
        position: absolute;
        top: 0;
        left: 100%;
        border-radius: 0 4px 4px 4px;
        z-index: 1;
        display: none;
    }

    .links li .sub-menu .more:hover .more-sub-menu {
        display: block;
    }

    .navbar .search-box {
        display: flex;
        position: relative;
        height: 40px;
        min-width: 250px;
    }

    .navbar .search-box i {
        position: absolute;
        height: 100%;
        width: 100%;
        line-height: 40px;
        text-align: center;
        font-size: 22px;
        color: var(--gray-2, #263856);
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .navbar .search-box .input-box {
        position: absolute;
        right: calc(100% - 40px);
        top: 80px;
        height: 60px;
        width: 300px;
        background: #3E8DA8;
        border-radius: 6px;
        opacity: 0;
        pointer-events: none;
        transition: all 0.4s ease;
    }

    .navbar.showInput .search-box .input-box {
        top: 65px;
        opacity: 1;
        pointer-events: auto;
        background: #3E8DA8;
    }

    .search-box .input-box::before {
        content: '';
        position: absolute;
        height: 20px;
        width: 20px;
        background: #3E8DA8;
        right: 10px;
        top: -6px;
        transform: rotate(45deg);
    }

    .search-box .input-box input {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 4px;
        transform: translate(-50%, -50%);
        height: 35px;
        width: 280px;
        outline: none;
        padding: 0 15px;
        font-size: 16px;
        border: none;
    }

    .navbar .nav-links .sidebar-logo {
        display: none;
    }

    .navbar .bx-menu {
        display: none;
    }

    @media (max-width:920px) {
        nav .navbar {
            max-width: 100%;
            padding: 0 25px;
        }

        nav .navbar .logo a {
            font-size: 27px;
        }

        nav .navbar .links li {
            padding: 0 10px;
            white-space: nowrap;
        }

        nav .navbar .links li a {
            font-size: 15px;
        }
    }

    @media (max-width:800px) {
        .featured-big-image {
            width: 100%;
        }

        .signature-customer-img {
            width: 100%
        }

        nav {
            /* position: relative; */
        }

        .navbar .bx-menu {
            display: block;
            color: var(--gray-2, #263856);

        }

        nav .navbar .nav-links {
            position: fixed;
            top: 0;
            left: -100%;
            display: block;
            /* max-width: 270px; */
            width: 100%;
            background: #3E8DA8;
            line-height: 40px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            z-index: 1000;
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-logo .logo-name {
            width: 50%;
            font-size: 25px;
            color: #fff;
        }

        .sidebar-logo i,
        .navbar .bx-menu {
            font-size: 25px;
            color: var(--gray-2, #263856);

        }

        nav .navbar .links {
            display: block;
            margin-top: 20px;
        }

        nav .navbar .links li .arrow {
            line-height: 40px;
        }

        nav .navbar .links li {
            display: block;
        }

        nav .navbar .links li .sub-menu {
            position: relative;
            top: 0;
            box-shadow: none;
            display: none;
        }

        nav .navbar .links li .sub-menu li {
            border-bottom: none;

        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
            position: relative;
            left: 0;
        }

        .navbar .links li .sub-menu .more-sub-menu li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(0deg);
        }

        .navbar .links li .sub-menu .more-sub-menu {
            display: none;
        }

        .navbar .links li .sub-menu .more span {
            /* background: red; */
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: none;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: none;
        }

        .navbar .nav-links.show1 .links .htmlCss-sub-menu,
        .navbar .nav-links.show3 .links .js-sub-menu,
        .navbar .nav-links.show2 .links .more .more-sub-menu {
            display: block;
        }

        .navbar .nav-links.show1 .links .htmlcss-arrow,
        .navbar .nav-links.show3 .links .js-arrow {
            transform: rotate(180deg);
        }

        .navbar .nav-links.show2 .links .more-arrow {
            transform: rotate(90deg);
        }
    }

    @media (max-width:370px) {
        nav .navbar .nav-links {
            max-width: 100%;
        }
    }
</style>

<body>
    <header style="background-color: #fff">
        <nav>
            <div class="navbar">
                <i class='bx bx-menu'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                    </svg>

                </i>
                <div class="logo"><a href="https://easyhrm.vn/"><img style="width: 100%"
                            src="https://easyhrm.vn/wp-content/uploads/2023/02/A5.png" alt=""></a></div>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name">
                            <img style="width: 100%" src="https://easyhrm.vn/wp-content/uploads/2023/02/A5.png" alt="">
                        </span>
                        <i class='bx bx-x'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
                            </svg></i>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">Sản phẩm</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.293 9.293L12 13.586L7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z" />
                                </svg>
                            </i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li class="more">
                                    <span><a href="https://easyhrm.vn/easyhrm-standard/">EasyHRM Standard</a>
                                        <!-- <i class='bx bxs-chevron-right arrow more-arrow'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
                                            </svg>
                                        </i> -->
                                    </span>
                                    <!-- <ul class="more-sub-menu sub-menu">
                                        <li><a href="https://easyhrm.vn/personal-information/">EasyHRM thông tin nhân
                                                sự</a></li>
                                        <li><a href="https://easyhrm.vn/staff-management/">EasyHRM nhân viên</a></li>
                                        <li><a href="https://easyhrm.vn/e-social-insurance/">EasyHRM bảo hiểm xã hội
                                                điện tử</a></li>
                                    </ul> -->
                                </li>
                                <li class="more">
                                    <span><a href="#">EasyHRM Premium</a>
                                        <!-- <i class='bx bxs-chevron-right arrow more-arrow'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
                                            </svg>
                                        </i> -->
                                    </span>
                                    <!-- <ul class="more-sub-menu sub-menu">
                                        <li><a href="#">EasyHRM thông tin nhân
                                                sự</a></li>
                                        <li><a href="#">EasyHRM nhân viên</a></li>
                                        <li><a href="#">EasyHRM bảo hiểm xã hội
                                                điện tử</a></li>
                                        <li><a href="#">EasyHRM quản lý, phê duyệt chấm công</a></li>
                                        <li><a href="#">EasyHRM tiền lương</a></li>

                                    </ul> -->
                                </li>
                                <li class="more">
                                    <span><a href="#">EasyHRM HĐLĐ Điện tử</a>
                                    </span>

                                </li>

                            </ul>
                        </li>

                        <li><a href="#">Khách hàng</a></li>
                        <li><a href="#">Cam kết</a></li>
                        <li><a href="#">Nhà phân phối</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#hrm_consulation_register">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <!-- <i class='bx bx-search'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
                        </svg>
                    </i>
                    <div class="input-box">
                        <input type="text" placeholder="Search...">
                    </div> -->
                    <a href="tel:  <?php echo get_field('left_button_header', 'option') ?>">
                        <button class="hotline-header">
                            <?php echo get_field('left_button_header', 'option') ?>
                        </button>
                    </a>
                    <a href="#hrm_consulation_register">
                        <button class="consulation-header">
                            <?php echo get_field('right_button_header', 'option') ?>
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </header>