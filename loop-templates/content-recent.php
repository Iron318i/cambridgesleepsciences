<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="col-md-6">
    <article <?php post_class('post-recent'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-img mb-1">
	    <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
	</div>
	<?php
	the_title(
		sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'
	);
	?>
	<div class="entry-content">
	    <?php the_excerpt(); ?>
	    <?php
	    wp_link_pages(
		    array(
			'before' => '<div class="page-links">' . __('Pages:', 'cambridgesleepsciences'),
			'after' => '</div>',
		    )
	    );
	    ?>
	</div>
    </article>
</div>