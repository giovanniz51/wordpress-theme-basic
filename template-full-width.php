<?php 
 // Template Name: Full Width Page
 // Template Post Type: page
?>
<?php get_header(); ?>

<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">
        <h1><?php wp_title("") ?></h1>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <?php get_template_part("template-parts/content", "page") ?>
        <?php endwhile; else : ?>
        <?php get_template_part("template-parts/content", "none") ?>
        <?php endif; ?>
        <?php echo paginate_links() ?>
        <p>Template: template-full-width.php</p>
    </main>

</div>

<?php get_footer(); ?>