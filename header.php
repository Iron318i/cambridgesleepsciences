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
/*
  if (!is_user_logged_in()) {
  // wp_redirect('https://www.ibanknevis.com/');
  // exit;
  }
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BF2GM788YY"</script>
	<script>
	    window.dataLayer = window.dataLayer || [];
	    function gtag() {
		dataLayer.push(arguments);
	    }
	    gtag('js', new Date());
	    gtag('config', 'G-BF2GM788YY');
	</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
	<!-- Google Tag Manager --><script>(function (w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
		var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	    })(window, document, 'script', 'dataLayer', 'GTM-M6PCJ7C');</script><!-- End Google Tag Manager -->
    </head>
    <body <?php body_class('header-hide'); ?> <?php cambridgesleepsciences_body_attributes(); ?>>
	<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6PCJ7C"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php do_action('wp_body_open'); ?>
	<div class="top-bar">
	    <a href="<?php the_permalink(74); ?>" class="account-link"><?php the_svg('credit-card') ?><?php _e('Open Bank Accounts Online', 'cambridgesleepsciences') ?></a>
	    <a href="<?php echo fw_get_db_settings_option('scl') ?>" class="login-link"><?php the_svg('login') ?> Secure Customer Login</a>
	</div>
	<header class="site-header">
	    <nav class="navbar navbar-expand-xl navbar-light">
		<div class="container-fluid">
		    <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg" alt="<?php bloginfo('name'); ?>"></a>
		    <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", fw_get_db_settings_option('phone')); ?>" class="phone">
			<?php the_svg('smartphone') ?>
			<span><span class="text"><?php _e('Stay in touch', 'cambridgesleepsciences') ?></span><br><span class="num"><?php echo fw_get_db_settings_option('phone') ?></span></span>
		    </a>
		    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="toggle-icon"><i></i><i></i><i></i><i></i></span>
			<span class="btn-text"><?php _e('Menu', 'hmbank'); ?></span>
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