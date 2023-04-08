<?php

class Cart{
    private array $products = [];

public function addProducts(Product $product, int $count = 1):void
{
    $this->products[$product->getTitle()] = $count;
}

public function removeProduct(Product $product):void
{
    unset($this->$products[$product->getTitle()]);
}
public function getProducts():array
{
    return $this->products;
}
}