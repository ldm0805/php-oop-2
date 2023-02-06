<?php

class AnimalFood extends AllProducts
{
    public $race;
    public $weight;
    public $ingredients;

    public function __construct($title, $price, $image, $weight, $race, $ingredients)
    {
        parent::__construct($title, $price, $image);
        $this->race = $race;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
