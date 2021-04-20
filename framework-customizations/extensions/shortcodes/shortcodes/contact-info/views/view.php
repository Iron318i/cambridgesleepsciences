<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="contact-info">
    <?php echo $atts['info']; ?>
    <div class="info-box mt-2">
	<?php the_svg('email') ?>
	<div class="content">
	    <strong>For any media enquiries, please contact us at:</strong><br>
	    <a href="mailto:<?php echo antispambot(fw_get_db_settings_option('email')) ?>" class="mailto"><?php echo antispambot(fw_get_db_settings_option('email')) ?></a>
	</div>
    </div>
    <div class="info-box mt-2">
	<?php the_svg('placeholder') ?>
	<div class="content">
	    <strong>Mailing Address:</strong><br>
	    <span style="font-size: 1rem;"><?php echo fw_get_db_settings_option('address') ?></span>
	</div>
    </div>
</div>