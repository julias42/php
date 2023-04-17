<?php

class Cart{
    private array $products = [];
    private ?int $totalPrice;
    private int $count;

public function addProducts(Product $product, int $count = 1):void
{
    if($products[$product->getTttle() != undefined])
    {
        $products[$product->getTitle()]++;
    } else {
        $products[$product->getTitle()] = 1;
    };
}

public function removeProduct(Product $product):void
{ 
    unset($this->$products[$product->getTitle()]);
}

public function getProducts():array
{
    return $this->products;
}

public function getTotalPrice(): ?int
{
    return $this->totalPrice;
}

public function totalPrice():void
{
    $this->$totalPrice * $product->getPrice();
}
}