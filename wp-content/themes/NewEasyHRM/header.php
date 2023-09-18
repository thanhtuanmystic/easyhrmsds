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
  <meta property="og:image"
    content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
  <meta property="og:image:secure_url"
    content="https://easyhrm.vn/wp-content/uploads/2023/09/abc.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animation.css" />


  <title>EasyHRM</title>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
    nonce="0Zv46Uwz"></script>
</head>

<body>
  <header style="background-color: #fff">
    <div class="container">
      <nav class="navbar navbar-expand-lg" style="height: 100px">
        <a style="width: 125px" class="navbar-brand" href="https://easyhrm.vn/">
          <img src="<?php echo get_field('logo_hrm', 'option'); ?>" width="100%" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="">
            <img style="width: 20px; height: 20px" src="https://easyhrm.vn/wp-content/uploads/2023/09/683459-200.png"
              alt="" />
          </span>
        </button>
        <style>
          .dropdown {
            position: absolute;
            text-align: left;
            width: 300px;
            display: none;
            padding-top: 10px;
            left: -74%;
            padding-left: 20px;
            top: 100%;
            background-color: #fff;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, .15);
          }

          .children {
            margin-bottom: 5px;

          }

          .children a {
            color: var(--gray-2, #263856);
            font-size: 15px;
          }

          .dp-block {
            display: block !important;
          }

          .categories:hover .dropdown {
            display: block;
          }
        </style>
        <div class="collapse navbar-collapse stroke" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll header-list" style="--bs-scroll-height: 100px">
            <?php
            if (have_rows('categories', 'option')):
              while (have_rows('categories', 'option')):
                the_row();
                ?>
                <li class="categories">
                  <a style="color: var(--gray-2, #263856)" class="hrm_nav-link"
                    href="<?php echo get_sub_field('category_link_to', 'option') ?>">

                    <?php
                    echo get_sub_field('category', 'option');
                    ?>
                  </a>
                  <?php
                  if (have_rows('nav_child', 'option')):
                    ?>
                    <ul class="dropdown">
                      <?php
                      if (have_rows('nav_child', 'option')):
                        while (have_rows('nav_child', 'option')):
                          the_row();
                          ?>
                          <li class="children"><a href="<?php echo get_sub_field('nav-child-link-to', 'option'); ?>">
                              <?php echo get_sub_field('nav-child-name', 'option'); ?>
                            </a></li>
                          <?php
                        endwhile;
                      endif;
                      ?>
                    </ul>
                    <?php
                  endif;
                  ?>

                </li>

                <?php
              endwhile;
            endif;
            ?>
          </ul>
          <!-- <div class="search-icon" style="margin-right: 32px">
              <img
                style="width: 24px; height: 24px"
                src="https://easyhrm.vn/wp-content/uploads/2023/08/image_2023_08_30T03_57_51_033Z.png"
                alt=""
              />
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
      </nav>
    </div>
  </header>