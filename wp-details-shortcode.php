<?php
/*
Plugin Name: WP Details Shortcode
Plugin URI: https://github.com/investblog/details_shortcode
Description: This plugin adds a shortcode for the HTML5 details element with customizable styles.
Version: 1.0
Author: Invest Blog
Author URI: https://investblog.io
License: GPLv2 or later
Text Domain: wp-details-shortcode
*/
function details_shortcode( $atts, $content = null ) {
  $atts = shortcode_atts( array(
    'title' => '',
    'text_color' => '#000',
    'cursor' => 'pointer',
  ), $atts );

  $title = $atts['title'];
  $text_color = $atts['text_color'];
  $cursor = $atts['cursor'];

  $output = '<details>';
  
  if ( $title ) {
    $output .= '<summary style="color: ' . esc_attr( $text_color ) . '; cursor: ' . esc_attr( $cursor ) . ';">' . esc_html( $title ) . '</summary>';
  }

  $output .= do_shortcode( $content );
  $output .= '</details>';

  return $output;
}

add_shortcode( 'details', 'details_shortcode' );
