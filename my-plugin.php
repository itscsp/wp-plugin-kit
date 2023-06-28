<?php
/**
 * Plugin Name: My Plugin
 * Description: A WordPress plugin with React.
 */

// Enqueue the bundled JavaScript file
function my_plugin_enqueue_scripts() {
  wp_enqueue_script('my-plugin', plugins_url('dist/bundle.js', __FILE__), array(), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'my_plugin_enqueue_scripts');

// Create a menu item in the admin dashboard
function my_plugin_menu() {
  add_menu_page(
    'My Plugin',
    'My Plugin',
    'manage_options',
    'my-plugin',
    'my_plugin_page_callback',
    'dashicons-admin-plugins',
    99
  );
}
add_action('admin_menu', 'my_plugin_menu');

// Callback function to display the plugin page
function my_plugin_page_callback() {
  echo '<div class="wrap">';
  echo '<h1>My Plugin Dashboard</h1>';
  echo '<div id="root"></div>';
  echo '</div>';
}
