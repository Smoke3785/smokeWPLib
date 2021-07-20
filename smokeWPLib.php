<?php
/**
 * Plugin Name: smokeWPLib
 * Description: A collection of changes to Wordpress default behavior for development ease.
 * Plugin URI:  https://github.com/Smoke3784/smokeWPLib
 * Author:      Smoke3785
 * Author URI:  https://github.com/Smoke3785
 */

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );