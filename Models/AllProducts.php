<?php
class AllProducts
{
    public $title;
    public $price;
    public $image;
    public function __construct($title, $price, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }
}
