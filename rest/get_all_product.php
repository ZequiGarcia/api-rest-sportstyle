<?php

// Terminar si la solicitud es OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Incluir la clase Product para acceder a su funcionalidad
require_once('../includes/Product.class.php');

// Manejar la solicitud GET para obtener todos los productos
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Llamar al método correspondiente en la clase Product
    Product::get_all_products();
}
?>
