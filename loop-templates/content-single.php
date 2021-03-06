<?php
/**
 * Single post partial template
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header mb-2">
	<p class="post-date"><?php echo get_the_date(); ?></p>
	<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
    <div class="entry-content mt-2">
	<?php
	echo wpautop($post->post_content);
	?>
	<?php
	wp_link_pages(
		array(
		    'before' => '<div class="page-links">' . __('Pages:', 'cambridgesleepsciences'),
		    'after' => '</div>',
		)
	);
	?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
