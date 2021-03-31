<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="col-md-6 col-lg-4 mb-2">
    <article <?php post_class('post-card'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-img">
	    <?php echo get_the_post_thumbnail($post->ID, 'post-thumb'); ?>
	</div>
	<div class="entry-content">
	    <?php if ('post' === get_post_type()) : ?>
    	    <div class="entry-meta">
		    <?php cambridgesleepsciences_posted_on(); ?>
    	    </div><!-- .entry-meta -->
	    <?php endif; ?>
	    <?php
	    the_title(
		    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'
	    );
	    ?>
	    <?php the_excerpt(); ?>
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
</div>