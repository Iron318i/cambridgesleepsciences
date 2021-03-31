<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<ul class="styled">
    <?php
    $arr = $atts['list'];
    foreach ($arr as $key => $value) {
	?>
        <li><?php the_svg('check') ?> <span class="text"><?php echo $value; ?></span></li>
	    <?php
	}
	?>
</ul>