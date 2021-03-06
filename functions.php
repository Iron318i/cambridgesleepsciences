<?php

/**
 * Cambridge-Sleep-Sciences functions and definitions
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

$cambridgesleepsciences_includes = array(
    '/theme-settings.php', // Initialize theme default settings.
    '/setup.php', // Theme setup and custom theme supports.
    '/enqueue.php', // Enqueue scripts and styles.
    '/template-tags.php', // Custom template tags for this theme.
    '/pagination.php', // Custom pagination for this theme.
    '/hooks.php', // Custom hooks.
    '/extras.php', // Custom functions that act independently of the theme templates.
    '/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker.
    '/editor.php', // Load Editor functions.
    '/disable-comments.php',
    '/svg-support.php',
);

foreach ($cambridgesleepsciences_includes as $file) {
    require_once get_template_directory() . '/inc' . $file;
}