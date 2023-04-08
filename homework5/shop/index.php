<?php

require_once 'Cart.php';
require_once 'Product.php';

$mouse = new Product('Мышь', 1500);
$keyboard = new Product('Клавиатура', 1000);

$cart = new Cart();
$cart->addProducts($mouse, 3);
$cart->addProducts($keyboard, 5);

print_r($cart->getProducts());