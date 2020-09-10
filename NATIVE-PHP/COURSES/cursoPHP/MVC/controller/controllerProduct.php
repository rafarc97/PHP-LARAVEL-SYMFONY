 <?php

    require_once("model/modelProduct.php");
    $producto = new modelProduct();
    $matrizProductos = $producto->getProductos();
    require_once("view/viewProduct.php");

?>