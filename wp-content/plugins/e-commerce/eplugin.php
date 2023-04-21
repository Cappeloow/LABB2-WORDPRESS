<?php
/**
* Plugin Name: My Category Display Plugin
* Plugin URI: http://www.yourwebsite.com/my-category-display-plugin/
* Description: Displays the 3 categories in your WooCommerce store
* Version: 1.0
* Author: Casper Wernersson
*/

function display_categories()
{
    $categories = get_categories(
        array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
            'number' => 3,
        )
    );

    echo '<ul class="ulOfCategories">';
    foreach ($categories as $category) {
        echo '<li class="categoryCss"><a href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
    }
    echo '</ul>';

}

add_shortcode('display_categories', 'display_categories');