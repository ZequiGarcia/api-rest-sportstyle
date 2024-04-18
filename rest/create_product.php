<?php 

    require_once('../includes/Product.class.php');


    if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['name']) && isset($_POST['id_category']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['quantity']) && isset($_POST['price'])
) {
    Product::create_product($_POST['name'], $_POST['id_category'], $_POST['image'], $_POST['description'], $_POST['quantity'], $_POST['price']);
}

?>