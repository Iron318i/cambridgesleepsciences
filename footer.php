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
<div class="open-account">
    <div class="container">
	<div class="row">
	    <div class="col-auto">
		<h3><?php _e('Open bank accounts online', 'cambridgesleepsciences') ?></h3>
	    </div>
	    <div class="col-auto">
		<a href="<?php the_permalink(74); ?>" class="btn"><?php the_svg("open") ?> <?php _e('ACCOUNT APPLICATION FORMS', 'cambridgesleepsciences') ?></a>
	    </div>
	</div>
    </div>
</div>
<footer class="site-footer">
    <div class="container">
	<div class="row">
	    <div class="col-md-3 col-xl-auto footer-1">
		<?php if (is_active_sidebar('footer-1')) : ?>
		    <?php dynamic_sidebar('footer-1'); ?>
		<?php endif; ?>
	    </div>
	    <div class="col-md-3 col-xl-auto footer-2">
		<?php if (is_active_sidebar('footer-2')) : ?>
		    <?php dynamic_sidebar('footer-2'); ?>
		<?php endif; ?>
	    </div>
	    <div class="col-md-3 col-xl-auto footer-3">
		<?php if (is_active_sidebar('footer-3')) : ?>
		    <?php dynamic_sidebar('footer-3'); ?>
		<?php endif; ?>
	    </div>
	    <div class="col-md-3 col-xl-auto footer-4">
		<?php if (is_active_sidebar('footer-4')) : ?>
		    <?php dynamic_sidebar('footer-4'); ?>
		<?php endif; ?>
	    </div>
	</div>
    </div>
</footer>
<footer class="bottom-footer">
    <div class="container">
	<div class="row">
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
	    <div class="col-auto">
		<ul class="nav social">
		    <?php if (fw_get_db_settings_option('fb')) { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('fb') ?>" target="_blank"><?php the_svg('facebook') ?></a></li>
		    <?php } ?>
		    <?php if (fw_get_db_settings_option('tw')) { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('tw') ?>" target="_blank"><?php the_svg('twitter') ?></a></li>
		    <?php } ?>
		    <?php if (fw_get_db_settings_option('pint')) { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('pint') ?>" target="_blank"><?php the_svg('pinterest') ?></a></li>
		    <?php } ?>
		    <?php if (fw_get_db_settings_option('in')) { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('in') ?>" target="_blank"><?php the_svg('linkedin') ?></a></li>
		    <?php } ?>
		    <?php if (fw_get_db_settings_option('gplus')) { ?>
    		    <li><a href="<?php echo fw_get_db_settings_option('gplus') ?>" target="_blank"><?php the_svg('google-plus') ?></a></li>
		    <?php } ?>
		</ul>
	    </div>
	</div>
    </div>
</footer>
<?php get_template_part('inc/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>