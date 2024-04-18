<?php

    require_once('Database.class.php');

    class Product{
        public static function create_product($name, $id_category, $image, $description, $quantity, $price){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('INSERT INTO productos(name, id_category, image, description, quantity, price)
            VALUES(:name, :id_category, :image, :description, :quantity, :price)');

            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':id_category', $id_category);
            $stmt->bindparam(':image', $image);
            $stmt->bindparam(':description', $description);
            $stmt->bindparam(':quantity',$quantity);
            $stmt->bindparam(':price', $price);

            if ($stmt->execute()) {
                header('HTTP/1.1 201 Producto creado correctamente');
            } else {
                header('HTTP/1.1 404 Producto no se ha creado correctamente');
            }
        }

        public static function delete_product_by_id ($id){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('DELETE FROM productos WHERE id=:id');
            $stmt->bindparam(':id', $id);

            if ($stmt->execute()) {
                header('HTTP/1.1 201 Producto borrado correctamente');
            } else {
                header('HTTP/1.1 404 Producto no se ha podido borrar correctamente');
            }

        }

        public static function get_all_products(){
            $database = new Database();
            $conn = $database->getConnection();
            $stmt = $conn->prepare('SELECT * FROM productos');

            if ($stmt->execute()) {
                $result = $stmt->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 Producto creado correctamente');
            } else {
                header('HTTP/1.1 404 no se ha podido consultar los produtoc');
            }
        }

        public static function update_products($id, $name, $id_category, $image, $description, $quantity, $price){
            $database = new Database();
            $conn = $database->getConnection();
            $stmt = $conn->prepare('UPDATE productos SET name=:name, id_category=:id_category, image=:image, description=:description, quantity=:quantity, price=:price WHERE id=:id');
            
            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':id_category', $id_category);
            $stmt->bindparam(':image', $image);
            $stmt->bindparam(':description', $description);
            $stmt->bindparam(':quantity',$quantity);
            $stmt->bindparam(':price', $price);
            $stmt->bindparam(':id', $id);

            if ($stmt->execute()) {
                header('HTTP/1.1 201 Producto actualizado correctamente');
            } else {
                header('HTTP/1.1 404 no se ha podido actualizar los produtoc');
            }
        }
    }

?>