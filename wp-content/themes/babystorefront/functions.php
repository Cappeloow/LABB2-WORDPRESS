<?php
function isDownloadable()
{
    global $product;
    if ($product->is_downloadable()) {
        echo "<h1 class='downloadable-product'>DETTA ÄR EN NEDLADDNINGSBARPRODUKT</h1>";

    }
}
add_action('woocommerce_before_single_product_summary', 'isDownloadable', 10);

function my_custom_product_filters()
{
    $args = array(
        'taxonomy' => 'product_cat',
        'show_option_all' => 'Kategorier',
        'orderby' => 'name',
        'class' => 'cat_filter',
        'name' => 'product_cat',
        'value_field' => 'slug',
        'selected' => isset($_GET['product_cat']) ? $_GET['product_cat'] : '',
    );
    wp_dropdown_categories($args);
}
add_action('woocommerce_after_shop_loop', 'my_custom_product_filters', 9);
add_action('woocommerce_before_shop_loop', 'my_custom_product_filters', 9);



?>