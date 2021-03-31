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
	    <div class="col-md-4 footer-1">
		<p class="mb-lg-2"><a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo get_template_directory_uri() ?>/img/main-logo.png" srcset="<?php echo get_template_directory_uri() ?>/img/main-logo-2x.png 2x" class="img-fluid" alt="<?php bloginfo('name'); ?>"></a></p>
		<p>Cambridge Sleep Sciences combines the principles of science with cutting-edge technology to enhance brain activity during sleep and develop innovative products that improve quality of life and re-energises lives. </p>
		<p>Cambridge Sleep Sciences Ltd is a subsidiary of the Barkby Group Plc.</p>
	    </div>
	    <div class="col-md-4 footer-2">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'footer',
			    'container' => false,
			    'container_class' => false,
			    'menu_id' => 'footer-menu',
			    'menu_class' => 'nav',
			)
		);
		?>
	    </div>
	    <div class="col-md-4 footer-3">
	    </div>
	</div>
    </div>
</footer>
<footer class="bottom-footer">
    <div class="container">
	<div class="row">
	    <div class="col-12 col-md-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'copyright',
			    'container' => false,
			    'container_class' => false,
			    'menu_id' => 'copyright-menu',
			    'menu_class' => 'nav',
			)
		);
		?>
	    </div>
	    <div class="col-12 col-md-auto">Copyright © <?php echo date('Y') ?> Cambridge Sleep Sciences. All rights reserved.</div>
	</div>
    </div>
</footer>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>