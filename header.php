<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php echo fw_get_db_settings_option('gtag_js') ?>
	<?php wp_head(); ?>
    </head>
    <body <?php body_class('header-hide'); ?> <?php cambridgesleepsciences_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<header class="site-header">
	    <nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
		    <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo get_template_directory_uri() ?>/img/main-logo.png" srcset="<?php echo get_template_directory_uri() ?>/img/main-logo-2x.png 2x" class="img-fluid" alt="<?php bloginfo('name'); ?>"></a>
		    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="toggle-icon"><i></i><i></i><i></i><i></i></span>
			<span class="btn-text"><?php _e('Menu', 'cambridgesleepsciences'); ?></span>
		    </button>
		    <div id="navbarNavDropdown" class="collapse navbar-collapse">
			<?php
			wp_nav_menu(
				array(
				    'theme_location' => 'primary',
				    'container' => 'false',
				    'menu_class' => 'navbar-nav main',
				    'fallback_cb' => '',
				    'menu_id' => 'main-menu',
				    'walker' => new cambridgesleepsciences_WP_Bootstrap_Navwalker(),
				)
			);
			?>
		    </div>
		</div>
	    </nav>
	</header>