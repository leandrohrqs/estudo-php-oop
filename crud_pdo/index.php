<?php

require_once "vendor/autoload.php";

$product = new \App\Model\Product();
$product->setId(5);
$product->setName('Janela');
$product->setDescription("Janela com bordas pretas");

$productDao = new \App\Model\ProductDao();
$productDao->delete($product->getId());
$productDao->read();

foreach ($productDao->read() as $product) {
    echo $product['id'] . " - " . $product['name']. "<br>" . $product['description'] . "<hr>";
}