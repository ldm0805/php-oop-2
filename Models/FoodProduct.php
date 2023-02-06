<?php
class Food
{
    public $title;
    public $price;
    public $image;
    public $weight;

    public function __construct($title, $price, $image, $weight)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->weight = $weight;
    }
}
