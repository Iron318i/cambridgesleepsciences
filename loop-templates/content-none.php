<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<section class="no-results not-found">


    <h1 class="page-title"><?php esc_html_e('Nothing Found', 'cambridgesleepsciences'); ?></h1>


    <div class="page-content">

	<?php
	if (is_home() && current_user_can('publish_posts')) :

	    $kses = array('a' => array('href' => array()));
	    printf(
		    /* translators: 1: Link to WP admin new post page. */
		    '<p>' . wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cambridgesleepsciences'), $kses) . '</p>', esc_url(admin_url('post-new.php'))
	    );

	elseif (is_search()) :

	    printf(
		    '<p>%s<p>', esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cambridgesleepsciences')
	    );
	    get_search_form();

	else :

	    printf(
		    '<p>%s<p>', esc_html__('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cambridgesleepsciences')
	    );
	    get_search_form();

	endif;
	?>
    </div><!-- .page-content -->

</section><!-- .no-results -->
