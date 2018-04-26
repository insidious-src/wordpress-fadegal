<?php defined ('ABSPATH') or die ('Access denied!');

/*
 * Plugin Name: Fadegal
 * Plugin URI:  https://bitbucket.org/softtech-bg/fadegal/
 * Description: Universal lightweight JavaScript Slider/Carousel/Gallery/Navigator
 * Version:     1.7
 * Author:      Kiril Petrov
 * Author URI:  https://insidious-src.tech/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fadegal
 * Domain Path: /languages
 */

require_once 'includes/class-plugin.php';
require_once 'widget-collection.php'    ;
require_once 'main.php'                 ;

if (!isset ($fadegal_plugin)) $fadegal_plugin = new WP\Plugin (__FILE__);

// =====================================================

function fadegal_activate ()
{
    global $fadegal_plugin, $fadegal_config, $jquery_fadegal_config;

    // add options and settings tabs
    $fadegal_plugin->add_settings ('general'  , $fadegal_config       );
    $fadegal_plugin->add_settings ('instances', $jquery_fadegal_config);

    flush_rewrite_rules ();
}

function fadegal_widgets ()
{
    register_widget ('WP\MediaCollection');
}

function fadegal_deactivate ()
{
    global $fadegal_plugin;

    // remove settings tabs
    $fadegal_plugin->remove_settings ('general'  );
    $fadegal_plugin->remove_settings ('instances');

    flush_rewrite_rules ();
}

function fadegal_uninstall ()
{
    global $fadegal_plugin, $fadegal_config, $jquery_fadegal_config;

    // remove options
    $fadegal_plugin->remove_options ($fadegal_config       );
    $fadegal_plugin->remove_options ($jquery_fadegal_config);
}

?>
