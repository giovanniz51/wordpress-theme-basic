<?php get_header("splash"); ?>

<div id="primary" class="content-area excerpt">

    <main id="main" class="site-main" role="main">
        <div class="author-bio">
            <h1><?php the_archive_title() ?> Posts Only </h1>
            <p>
                <?php echo category_description(); ?>
            </p>
        </div>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part("template-parts/content", "posts") ?>
        <?php endwhile; else : ?>
        <?php get_template_part("template-parts/content", "none") ?>
        <?php endif; ?>
        <?php echo paginate_links() ?>
        <p>Template: category.php</p>
    </main>

</div>


<?php get_footer("splash"); ?>