<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="page-header">
    <picture>
	<source media="(min-width:768px)" srcset="<?php echo wp_get_attachment_image_url(fw_get_db_settings_option('ph_blog')["attachment_id"], 'page-header-large') ?>">
	<img src="<?php echo wp_get_attachment_image_url(fw_get_db_settings_option('ph_blog')["attachment_id"], 'page-header-md') ?>" alt="<?php the_title() ?>">
    </picture>
    <div class="container">
	<div class="h1"><?php
	    if (is_404()) {
		echo '404';
	    } elseif (is_search()) {
		echo 'Search';
	    } else {
		echo 'BLOG';
	    }
	    ?></div>
    </div>
</div>
<div class="container py-3" id="content" tabindex="-1">
    <div class="fw-heading fw-heading-h2 text-center mb-3">
        <h2 class="fw-special-title text-uppercase text-primary"><?php
	    if (is_404()) {
		echo '404';
	    } elseif (is_search()) {
		echo 'Search';
	    } else {
		echo 'BLOG';
	    }
	    ?></h2>
    </div>
    <?php
    if (have_posts()) {
	// Start the Loop.
	?>
        <div class="row">
	    <?php
	    while (have_posts()) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part('loop-templates/content', get_post_format());
	    }
	    ?>
        </div><!-- .row -->
	<?php
    } else {
	get_template_part('loop-templates/content', 'none');
    }
    ?>
    <!-- The pagination component -->
    <?php cambridgesleepsciences_pagination(); ?>
</div><!-- #content -->
<?php
get_footer();
