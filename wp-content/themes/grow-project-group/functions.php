<?php
/** Grow Project Group: static brochure theme, no custom backend. */
if (!defined('ABSPATH')) { exit; }
function gpg_theme_setup() {
 add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('editor-styles'); add_theme_support('html5', array('search-form','gallery','caption','style','script'));
}
add_action('after_setup_theme','gpg_theme_setup');
function gpg_theme_assets() {
 wp_enqueue_style('gpg-style',get_stylesheet_uri(),array(),'1.0.0');
 wp_enqueue_script('gpg-site',get_template_directory_uri().'/assets/js/site.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','gpg_theme_assets');
/** Create editable WordPress page records for the static templates on theme activation. Existing pages are never overwritten. */
function gpg_seed_pages() {
 $pages=array(
  'home'=>'Home','developments'=>'Our Developments','twin-street'=>'Twin Street','lot-101'=>'Lot 101','lot-102'=>'Lot 102',
  '75-king-william-street'=>'75 King William Street','mackenzie-street'=>'MacKenzie Street','latrobe-street'=>'Latrobe Street',
  'lifestyle'=>'Locations and Lifestyle','approach'=>'Our Approach','about'=>'About Grow Project Group','team'=>'Project Team',
  'contact'=>'Contact','privacy'=>'Privacy');
 $home_id=0;
 foreach($pages as $slug=>$title) {
  $existing=get_page_by_path($slug,OBJECT,'page');
  $id=$existing?$existing->ID:wp_insert_post(array('post_type'=>'page','post_status'=>'publish','post_name'=>$slug,'post_title'=>$title,'post_content'=>''),true);
  if($slug==='home' && !is_wp_error($id)){$home_id=(int)$id;}
 }
 if($home_id){ update_option('show_on_front','page'); update_option('page_on_front',$home_id); }
 flush_rewrite_rules();
}
add_action('after_switch_theme','gpg_seed_pages');
/** Use native WordPress page blocks when supplied, otherwise retain the designed theme layout. */
function gpg_has_editor_content($post_id) {
 $raw = get_post_field('post_content', $post_id);
 return is_string($raw) && trim($raw) !== '';
}
