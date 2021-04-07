<?php
include_once "Models/product.php";
include_once "Services/productManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();

$laptop = new Product("Laptop",100000);
$mobile = new Product("Mobile",250000);

$productManager->add($laptop);
$productManager->add($mobile);

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
    echo $product->getPrice() ."<br/>";
}
