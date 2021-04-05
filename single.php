<?php
/**
 * The template for displaying all single posts
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
	<div class="h1"><?php echo 'News'; ?></div>
    </div>
</div>
<div class="container single-container py-3" id="content" tabindex="-1">
    <?php
    while (have_posts()) {
	the_post();
	get_template_part('loop-templates/content', 'single');
    }
    ?>
</div><!-- #content -->
<section class="related-articles pb-4">
    <div class="container">
	<div class="row">
	    <?php
	    $args = array(
		'posts_per_page' => 2,
		'post_type' => 'post',
		'post__not_in' => array($post->ID)
	    );

	    $query = new WP_Query($args);

	    if ($query->have_posts()) :
		while ($query->have_posts()) :
		    $query->the_post();
		    get_template_part('loop-templates/content', 'recent');
		endwhile;
		?>
	    <?php endif; ?>
	    <?php wp_reset_postdata(); ?>
	</div>
    </div>
</section>
<?php
get_footer();
