<?php
/*
Plugin Name: Custom plugin
Desription: Ajout des Custom Post Types, Custom Taxonomies & Champs ACF
Author: Thomas Florentin
Version: 1.0
*/

define('PLUGIN_DIR', WP_PLUGIN_DIR.'/custom-plugin');
define('PLUGIN_PATH', '/'.str_replace(ABSPATH, '', PLUGIN_DIR));
define('PLUGIN_URL', WP_PLUGIN_URL.'/custom-plugin');


require_once(PLUGIN_DIR.'/acf.php');

require_once(PLUGIN_DIR.'/cpt/cpt-project.php');

require_once(PLUGIN_DIR.'/taxonomies/tax-projects.php');
