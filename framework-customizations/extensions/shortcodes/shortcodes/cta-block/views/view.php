<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="row">
    <div class="col-md-6">
	<a class="page-block" href="<?php echo fw_get_db_settings_option('cta_link_1') ?>">
	    <?php echo wp_get_attachment_image(fw_get_db_settings_option('cta_img_1')["attachment_id"], 'thumbnail', false, array("class" => 'img-fluid')); ?>
	    <div class="p-2 p-md-3">
		<h3><?php echo fw_get_db_settings_option('cta_heading_1') ?></h3>
		<p><?php echo fw_get_db_settings_option('cta_desc_1') ?></p>
	    </div>
	</a>
    </div>
    <div class="col-md-6">
	<a class="page-block" href="<?php echo fw_get_db_settings_option('cta_link_2') ?>">
	    <?php echo wp_get_attachment_image(fw_get_db_settings_option('cta_img_2')["attachment_id"], 'thumbnail', false, array("class" => 'img-fluid')); ?>
	    <div class="p-2 p-md-3">
		<h3><?php echo fw_get_db_settings_option('cta_heading_2') ?></h3>
		<p><?php echo fw_get_db_settings_option('cta_desc_2') ?></p>
	    </div>
	</a>
    </div>
</div>