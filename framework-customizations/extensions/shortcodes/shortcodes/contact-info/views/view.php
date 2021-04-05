<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="contact-info">
    <div class="info-box">
	<div class="img">
	    <?php echo wp_get_attachment_image($atts['image_hours']["attachment_id"], 'thumbnail'); ?>
	</div>
	<div class="content">
	    <h3>Store Hours</h3>
	    <?php echo $atts['hours']; ?>
	</div>
    </div>
    <div class="info-box mt-2 mt-md-4">
	<div class="img">
	    <?php echo wp_get_attachment_image($atts['image_location']["attachment_id"], 'thumbnail'); ?>
	</div>
	<div class="content">
	    <h3>Location</h3>
	    <?php echo $atts['location']; ?>
	</div>
    </div>
</div>