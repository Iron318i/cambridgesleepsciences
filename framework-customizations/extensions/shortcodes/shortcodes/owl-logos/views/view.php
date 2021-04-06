<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="owl-carousel owl-theme logo">
    <?php
    $arr = $atts['logos'];
    foreach ($arr as &$value) {
	echo wp_get_attachment_image($value["attachment_id"], 'logo');
    }
    ?>
</div>