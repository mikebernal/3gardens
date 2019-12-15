<?php

function content_types() {

  register_post_type('service', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'services'
    ),
    'has_archive' => true, 
    'public'     => true,
    'labels'     => array(
              'name' => 'Services',
     'singular_name' => 'Service',
      'add_new_item' => 'Add New Service',
      'edit_item'    => 'Edit Service',
      'all_items'    => 'All Services'
    ),
    'menu_icon' => 'dashicons-hammer'
  ));

  register_post_type('service_type', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array(
      'slug' => 'service-type'
    ),
    'has_archive' => true, 
    'public'     => true,
    'labels'     => array(
              'name' => 'Service Types',
     'singular_name' => 'Service Type',
      'add_new_item' => 'Add New Service Type',
      'edit_item'    => 'Edit Service Type',
      'all_items'    => 'All Service Types'
    ),
    'menu_icon' => 'dashicons-rest-api'
  ));

  register_post_type('project', array(
    'supports' => array('title', 'excerpt'),
    'rewrite' => array(
      'slug' => 'projects'
    ),
    'has_archive' => true, 
    'public'     => true,
    'labels'     => array(
              'name' => 'Projects',
     'singular_name' => 'Project',
      'add_new_item' => 'Add New Project',
      'edit_item'    => 'Edit Project',
      'all_items'    => 'All Projects'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));

}

add_action('init', 'content_types');