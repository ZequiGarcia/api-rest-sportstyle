<?php 

    require_once('../includes/Product.class.php');

    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'
    && isset($_GET['id'])) {
        Product::delete_product_by_id($_GET['id']);
}

?>