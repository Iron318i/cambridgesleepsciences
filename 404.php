<?php
/**
 * The template for displaying 404 pages (not found)
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
	<div class="h1"><?php echo '404'; ?></div>
    </div>
</div>
<div class="container py-5" id="content" tabindex="-1">
    <section class="error-404 not-found py-5">
	<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'cambridgesleepsciences'); ?></h1>
	<p><?php esc_html_e('It looks like nothing was found at this location. ', 'cambridgesleepsciences'); ?></p>
    </section><!-- .error-404 -->
</div><!-- #content -->
<?php
get_footer();
