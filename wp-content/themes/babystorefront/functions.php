<?php
function isDownloadable()
{
    global $product;
    if ($product->is_downloadable()) {
        echo "<h1 class='downloadable-product'>DETTA ÄR EN NEDLADDNINGSBARPRODUKT</h1>";

    }
}
add_action('woocommerce_before_single_product_summary', 'isDownloadable', 10);




?>