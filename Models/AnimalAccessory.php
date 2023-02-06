<?php

class AnimalAccessory extends AllProducts
{
    public $material;
    public $dimension;

    public function __construct($title, $price, $image, $material, $dimension)
    {
        parent::__construct($title, $price, $image);
        $this->material = $material;
        $this->dimension = $dimension;
    }
}

$product = new AnimalAccessory("Royal canin", "50",  "https://picsum.photos/200", "Legno", "Dimensioni");
