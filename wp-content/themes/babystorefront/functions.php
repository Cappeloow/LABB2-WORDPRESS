<?php
function my_custom_styles()
{
    wp_enqueue_style('my-custom-styles', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_custom_styles');


function isDownloadable()
{
    global $product;
    if ($product->is_downloadable()) {
        echo "<h1 class='downloadable-product'>DETTA ÄR EN NEDLADDNINGSBARPRODUKT</h1>";

    }
}
add_action('woocommerce_before_single_product_summary', 'isDownloadable', 10);

add_action('woocommerce_before_shop_loop', 'my_custom_category_dropdown', 20);



function my_custom_category_dropdown()
{
    $args = array(
        'taxonomy' => 'product_cat',
        'show_option_all' => 'Alla kategorier',
        'orderby' => 'name',
        'class' => 'category-dropdown',
        'name' => 'product_cat',
        'value_field' => 'slug',
        'selected' => isset($_GET['product_cat']) ? $_GET['product_cat'] : '',
        'show_count' => 1,
        'hierarchical' => true,
        'depth' => 3,
        'echo' => 0,
        'value' => 'slug'
    );

    // Generate the dropdown list of product categories
    $category_dropdown = wp_dropdown_categories($args);

    // Add the "change" event listener to the dropdown and update the URL when a new category is selected
    $category_dropdown = str_replace('<select', '<select onchange="if (this.value) window.location.href=this.value"', $category_dropdown);

    // Output the dropdown
    echo $category_dropdown;

    // Reset the query
    wp_reset_query();
}

function display_sale_days()
{
    global $product;
    if ($product->is_on_sale()) {
        echo '<span class="onsale-star">★</span> ';
    }
}
add_action('display_sale_days', 'display_sale_days');

function modify_woocommerce_sale_badge($html, $post, $product)
{
    $html = '<span class="onsale">SISTA CHANSEN!</span>';
    return $html;
}
add_filter('woocommerce_sale_flash', 'modify_woocommerce_sale_badge', 10, 3);

function remove_result_count()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
}
add_action('init', 'remove_result_count');


?>