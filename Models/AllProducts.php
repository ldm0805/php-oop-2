<?php
class AllProducts
{
    public $title;
    public $price;
    public $image;
    public $race;

    public function __construct($title, $price, $image, $race)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->race = $race;
    }
}
function changeIcon($race)
{
    switch ($race) {
        case 'Cane':
            return '<i class="fa-solid fa-dog"></i>';
            break;
        case 'Gatto':
            return '<i class="fa-solid fa-cat"></i>';
            break;
        case 'Pesce':
            return '<i class="fa-solid fa-fish-fins"></i>';
            break;
        default:
            return '<i class="fa-solid fa-kiwi-bird"></i>';
            break;
    }
}
