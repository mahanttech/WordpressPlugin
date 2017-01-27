<?php
/**
 * Plugin Name: My Facebook Tags
 * Plugin URI: http://mahanttech.com
 * Description: This plugin adds some Facebook Open Graph tags to our single posts.
 * Version: 1.0.0
 * Author: Vatsal Shah
 * Author URI: http://mahanttech.com
 * License: GPL2
 */
 
add_action( 'wp_head', 'my_facebook_tags' );
function my_facebook_tags() {
  echo 'I am in the head section';
}