<?php 

    require_once('../includes/Product.class.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['id_category']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['quantity']) && isset($_POST['price'])
) {
    Product::update_products($_POST['id'], $_POST['name'], $_POST['id_category'], $_POST['image'], $_POST['description'], $_POST['quantity'], $_POST['price']);
}

?>