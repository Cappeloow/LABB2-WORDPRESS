<?php
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


?>