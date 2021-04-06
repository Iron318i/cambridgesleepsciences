<?php if (!defined('FW')) die('Forbidden'); ?>
<?php $class = !empty($atts['color']) ? "btn-{$atts['color']}" : ''; ?>
<?php $class .= !empty($atts['size']) ? " {$atts['size']}" : ''; ?>
<?php $class .= $atts['arrow'] ? " btn-arr" : ''; ?>

<div class="btn-wrp">
    <a href="<?php echo do_shortcode($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="btn <?php echo esc_attr($class); ?>">
	<span><?php echo do_shortcode($atts['label']); ?></span>
	<?php
	if ($atts['arrow']) {
	    the_svg('right-arrow');
	}
	?>
    </a>
</div>