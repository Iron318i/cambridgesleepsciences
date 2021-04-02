<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class('post-card'); ?> id="post-<?php the_ID(); ?>">
    <?php
    the_title(
	    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'
    );
    ?>
    <div class="row">
	<div class="col-12 post-img">
	    <?php echo get_the_post_thumbnail($post->ID, 'post-thumb'); ?>
	</div>
	<div class="col-12 entry-content">
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
    </div>
</article>