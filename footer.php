<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer class="site-footer">
    <div class="container">
	<div class="row">
	    <div class="col-md-3 col-xl-auto footer-1">
	    </div>
	    <div class="col-md-3 col-xl-auto footer-2">
	    </div>
	    <div class="col-md-3 col-xl-auto footer-3">
	    </div>
	</div>
    </div>
</footer>
<footer class="bottom-footer">
    <div class="container">
	<div class="row">
	    <div class="col-auto">Copyright © <?php echo date('Y') ?> Cambridge Sleep Sciences. All rights reserved.</div>
	    <div class="col-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'footer',
			    'container' => false,
			    'container_class' => false,
			    'menu_id' => 'footer-menu',
			)
		);
		?>
	    </div>
	</div>
    </div>
</footer>
<?php get_template_part('inc/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>