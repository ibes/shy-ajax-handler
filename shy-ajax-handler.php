<?php
/*
Plugin Name: Shy Ajax Handler
Plugin URI: https://sebastian-gaertner.com
Description: Only load necessary plugins for ajax responses
Version: 0.1.0
Author: Sebastian Gärtner
Author URI: https://sebastian-gaertner.com
License: GPLv2
*/

function shy_ajax_handler_define_active_plugins( $plugins ) {

  // skip if not ajax
  if ( !defined( 'DOING_AJAX' ) || !DOING_AJAX || !isset( $_REQUEST['action'] ) ) {
    return $plugins;
  }

  switch ( $_REQUEST['action'] ) {

    // case 'shy_example':
    //   $plugins = array(
    //       'plugin_dir/plugin_file.php',
    //       'other_plugin_dir/other_plugin_file.php',
    //     );
    //   break;

    default:
      break;
  }

  return $plugins;
}

add_filter( 'option_active_plugins', 'shy_ajax_handler_define_active_plugins', 2 );
