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
	<div class="h1"><?php echo 'BLOG'; ?></div>
    </div>
</div>
<div class="container pt-3">
    <div class="fw-heading fw-heading-h2 text-center mb-3">
        <h2 class="fw-special-title text-uppercase text-primary"><?php echo 'BLOG'; ?></h2>
    </div>
</div>
<div class="container single-container mb-3" id="content" tabindex="-1">
    <?php
    while (have_posts()) {
	the_post();
	get_template_part('loop-templates/content', 'single');
    }
    echo do_shortcode('[Sassy_Social_Share]');
    ?>
</div><!-- #content -->
<section class="related-articles pb-3">
    <div class="container">
	<div class="fw-heading fw-heading-h2 text-center mb-3">
	    <h2 class="fw-special-title text-uppercase text-primary"><?php _ex('RECENT POSTS', 'cambridgesleepsciences') ?></h2>
	</div>
	<div class="row">
	    <?php
	    $args = array(
		'posts_per_page' => 3,
		'post_type' => 'post',
		'post__not_in' => array($post->ID)
	    );

	    $query = new WP_Query($args);

	    if ($query->have_posts()) :
		while ($query->have_posts()) :
		    $query->the_post();
		    get_template_part('loop-templates/content', get_post_format());
		endwhile;
		?>
	    <?php endif; ?>
	    <?php wp_reset_postdata(); ?>
	</div>
    </div>
</section>
<?php
get_footer();