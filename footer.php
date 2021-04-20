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
		<h4>Connect  with  Us</h4>
		<h5>Cambridge Sleep Sciences:</h5>
		<ul class="nav">
		    <li><a href="<?php echo fw_get_db_settings_option('css_yt') ?>" target="_blank"><?php the_svg('youtube') ?></a></li>
		    <li><a href="<?php echo fw_get_db_settings_option('css_in') ?>" target="_blank"><?php the_svg('linkedin') ?></a></li>
		</ul>
		<h5>SleepHub:</h5>
		<ul class="nav">
		    <li><a href="<?php echo fw_get_db_settings_option('sh_fb') ?>" target="_blank"><?php the_svg('facebook') ?></a></li>
		    <li><a href="<?php echo fw_get_db_settings_option('sh_insta') ?>" target="_blank"><?php the_svg('instagram') ?></a></li>
		    <li><a href="<?php echo fw_get_db_settings_option('sh_tw') ?>" target="_blank"><?php the_svg('twitter') ?></a></li>
		    <li><a href="<?php echo fw_get_db_settings_option('sh_yt') ?>" target="_blank"><?php the_svg('youtube') ?></a></li>
		    <?php if (fw_get_db_settings_option('sh_in') != "") { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('sh_in') ?>" target="_blank"><?php the_svg('linkedin') ?></a></li>
		    <?php } ?>
		</ul>
		<p class="uk"><?php the_svg('united-kingdom') ?> United Kingdom</p>
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
	    <div class="col-12 col-md-auto">Copyright © <?php echo date('Y') ?> Cambridge Sleep Sciences Ltd. All rights reserved.</div>
	</div>
    </div>
</footer>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>