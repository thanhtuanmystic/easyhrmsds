<?php get_header(); ?>
<style>
    .entry-title {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .entry-meta {
        font-style: italic;
        color: #888;
        margin-bottom: 15px;
    }

    .entry-content {
        margin-bottom: 20px;
    }

    .page-links {
        margin-top: 20px;
    }

    /* Styling for links */
    a {
        color: #1e90ff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Additional styling can be added for images, blockquotes, etc. based on your design preferences */
</style>
<div class="container">
    <div class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-header">
                        <div class="hrm-title d-flex justify-content-center">
                            <?php the_title(); ?>
                        </div>
                        <div class="entry-meta">
                            <span class="posted-on">Ngày đăng:
                                <?php echo get_the_date(); ?>
                            </span>
                            <br>
                            <span class="byline">Tác giả:
                                <?php the_author(); ?>
                            </span>
                        </div>
                    </div>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>