<?php
function my_theme_setup() {
    add_theme_support('title-tag'); // Auto add <title>
    register_nav_menus(['primary' => 'Main Menu']); // Enable navigation
}
add_action('after_setup_theme', 'my_theme_setup');
