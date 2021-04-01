<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row">
    <?php
    $arr = $atts['persons'];
    foreach ($arr as $key => $value) {
	?>
        <div class="col-12 col-md-6">
    	<div class="team-member mb-lg-3">
		<?php if ($value['image']): ?>
		    <div class="mb-2"><?php echo wp_get_attachment_image($value['image']["attachment_id"], 'person', false, array("class" => "card-img")); ?></div>
		<?php endif; ?>
    	    <h3><?php echo $value['heading']; ?></h3>
		<?php if ($value['position'] != ""): ?>
		    <p class="position"><?php echo $value['position']; ?></p>
		<?php endif; ?>
    	    <p>  <?php echo $value['descriprion']; ?></p>

    	</div>
        </div>
	<?php
    }
    ?>
</div>