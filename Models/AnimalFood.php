<?php

class AnimalFood extends AllProducts
{
    public $weight;
    public $ingredients;

    public function __construct($title, $race, $price, $image, $weight, $ingredients)
    {
        parent::__construct($title, $race, $price, $image);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
