<?php
/**
 * The template for displaying search results pages
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
	<div class="h1"><?php echo 'Search'; ?></div>
    </div>
</div>
<div class="container py-3" id="content" tabindex="-1">
    <div class="fw-heading fw-heading-h2 text-center mb-3">
        <h2 class="fw-special-title text-uppercase text-primary"><?php echo 'Search'; ?></h2>
    </div>

    <?php if (have_posts()) : ?>
        <h3 class="page-title text-center">
	    <?php
	    printf(
		    /* translators: %s: query term */
		    esc_html__('Search Results for: %s', 'cambridgesleepsciences'), '<span>' . get_search_query() . '</span>'
	    );
	    ?>
        </h3>
        <div class="mb-2">
	    <?php get_search_form(); ?>
        </div>
	<?php /* Start the Loop */ ?>
	<?php
	while (have_posts()) :
	    the_post();

	    /*
	     * Run the loop for the search to output the results.
	     * If you want to overload this in a child theme then include a file
	     * called content-search.php and that will be used instead.
	     */
	    get_template_part('loop-templates/content', 'search');
	endwhile;
	?>

    <?php else : ?>
	<?php get_template_part('loop-templates/content', 'none'); ?>

    <?php endif; ?>


    <!-- The pagination component -->
    <?php cambridgesleepsciences_pagination(); ?>

</div>
<?php
get_footer();
