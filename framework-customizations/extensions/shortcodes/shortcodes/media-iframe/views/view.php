<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var $atts
 */
?>
<div class="embed-responsive embed-responsive-<?php echo $atts['ratio']; ?>">
    <iframe class="embed-responsive-item" src="<?php echo $atts['map_iframe']; ?>"></iframe>
</div>
