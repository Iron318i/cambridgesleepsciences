<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
$style = '';
if ($atts['mw'] > 0) {
    $style = 'style="max-width: ' . $atts['mw'] . 'px;"';
}
$custome_class = ( isset($atts['class']) && $atts['class'] ) ? ' ' . $atts['class'] . '' : '';
$custome_class .= ($atts['centered']) ? ' mx-auto' : '';
$custome_class .= ( isset($atts['fsz']) && $atts['fsz'] ) ? ' ' . $atts['fsz'] . '' : '';
$custome_class .= ( isset($atts['color']) && $atts['color'] ) ? ' ' . $atts['color'] . '' : '';
?>
<div class="text-block<?php echo!empty($atts['justify_content']) ? ' text-justify' : ''; ?> <?php echo $custome_class ?>" <?= $style ?>>
    <?php
    echo do_shortcode($atts['text']);
    ?>
</div>