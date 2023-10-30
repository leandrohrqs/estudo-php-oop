<?php
require 'classes/Product.php';
require 'models/Product.php';

use models\Product as productModel;
use classes\Product as productClass;

$product = new productModel();
$product->getDetails();
echo "<br>";
$product2 = new productClass();
$product2->getDetails();
