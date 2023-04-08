<?php

class Product {
    private array $components = [];
    private string $title;
    private float $price = 0.0;

    function __construct(string $title, float $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function setTitle(string $title):void
    {
        $this->title = $title;
    }
    
    public function setPrice(float $price):void
    {
        $this->price = $price;
    }

}
