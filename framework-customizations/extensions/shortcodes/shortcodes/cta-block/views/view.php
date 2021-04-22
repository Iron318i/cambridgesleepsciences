<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="row">
    <?php
    $arr = fw_get_db_settings_option('cta-blocks');
    $counter = 1;
    foreach ($arr as $value) {
	$block_id = $value['cta_link'][0];
	if ($counter < 3) {
	    if (get_the_ID() != $block_id) {
		?>
	        <div class="col-md-6">
	    	<a class="page-block" href="<?php the_permalink($block_id) ?>">
			<?php echo wp_get_attachment_image($value['cta_img']["attachment_id"], 'thumbnail', false, array("class" => 'img-fluid')); ?>
	    	    <div class="p-2 p-md-3">
	    		<h3><?php echo $value['cta_heading'] ?></h3>
	    		<p><?php echo $value['cta_desc'] ?></p>
	    	    </div>
	    	</a>
	        </div>
		<?php
		$counter++;
	    }
	}
    }
    ?>
</div>