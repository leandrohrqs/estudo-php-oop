<?php

class Products
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class Cart
{
    public $products;

    public function addToCart(Products $product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        foreach ($this->products as $product)
        {
            echo $product->name . "<br>";
            echo "R$ ". $product->price . "<hr>";
        }
    }
}

$product1 = new Products("Notebook", 1900);
$product2 = new Products("Smartphone", 750);

$cart = new Cart();
$cart->addToCart($product1);
$cart->addToCart($product2);

$cart->getProducts();