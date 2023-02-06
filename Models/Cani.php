<?php

class FoodProduct extends Food
{
    public $race;

    public function __construct($title, $price, $image, $weight, $race)
    {
        parent::__construct($title, $price, $image, $weight, $race);
        $this->race = $race;
    }
}

$product = new FoodProduct("Royal canin", "50",  "https://picsum.photos/200", "600", "cane");
echo '<pre>';
var_dump($product);
echo "Product Title: " . $product->title . "\n";
echo "Product race: " . $product->race . "\n";
echo "Product Image: " . $product->image . "\n";
echo "Product weight: " . $product->weight . "\n";
