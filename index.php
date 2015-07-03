<?php
  /*
  Plugin Name: Pages to Sitemap
  Plugin URI: http://jonathanmh.com/
  Description: List all pages through a shortcode into a Sitemap
  Version: 0.1
  Author: Jonathan M. Hethey
  Author URI: http://jonathanmh.com
  License: GPLv3
  */
if ( ! class_exists( 'Pages_sitemap' ) ){
class Pages_sitemap {

  public $string;

  public function __construct(){
    add_shortcode('sitemap', array(&$this, 'output'));
  }

  public function get_pages(){
    $args = array (
    'sort_order' => 'asc',
    'hierarchical' => 1,
    'meta_value' => '',
    'authors' => '',
    'child_of' => 0,
    'parent' => -1,
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish',
    'echo' => false,
    'title_li' => ''
  );
  $pages = wp_list_pages($args);
    return $pages;
  }

  public function output(){
    $pages = $this->get_pages();
    return $pages;
  }
}
$pages_sitemap = new Pages_sitemap;
}
