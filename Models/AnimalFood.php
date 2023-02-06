<?php

class AnimalFood extends AllProducts
{
    public $race;
    public $weight;

    public function __construct($title, $price, $image, $weight, $race)
    {
        parent::__construct($title, $price, $image);
        $this->race = $race;
        $this->weight = $weight;
    }
}

$product = new AnimalFood("Royal canin", "50",  "https://picsum.photos/200", "600", "cane");
echo '<pre>';
var_dump($product);
