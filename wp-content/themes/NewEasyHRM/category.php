<?php get_header(); ?>
<style>
    .item-news {
        padding: 10px;
        margin-bottom: 30px;
    }

    .post-title {
        color: black;
        font-size: 18px;
        font-weight: 700;
    }

    .img {
        margin-bottom: 10px;
    }

    .lh2-date {
        margin-top: 10px;
    }

    .post-description {
        margin-bottom: 10px;
    }
</style>
<div class="container">
    <div class="hrm-title f-flex justify-content-center">Tin tức</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-lg-4">
                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                            <div class="item-news">
                                <div class="row">
                                    <div class="col-12 img">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt=""></a>
                                    </div>
                                    <div class="col-12 text">
                                        <a class="post-title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <div class="post-description">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="lh2-date">
                                            <i class="fas fa-calendar-alt"></i>
                                            <?php
                                            echo get_the_date('d/m/Y');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; else: ?>
                    <p>Không có</p>
                <?php endif; ?>
                <!-- <div class="lh2-pagging col-12">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-backward"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-forward"></i></a>
                            </li>

                        </ul>
                    </div> -->
            </div>
        </div>
        <!-- <div class="col-lg-4">
           Side bar
        </div> -->
    </div>
</div>
<?php get_footer(); ?>