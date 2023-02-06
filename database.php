<?php
include __DIR__ . './Models/AllProducts.php';
include __DIR__ . './Models/AnimalFood.php';
include __DIR__ . './Models/AnimalAccessory.php';

$productChild1 = new AnimalFood("Royal Canin Mini Adult", "43,99",  "https://picsum.photos/200", "545g", "Cane", "Prosciutto Riso");
$productChild2 = new AnimalFood("Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "44,99",  "https://picsum.photos/200", "600g", "Cane", "Manzo, Cereali");
$productChild3 = new AnimalFood("Almo Nature Cat Daily Lattina", "34,99",  "https://picsum.photos/200", "400g", "Gatto", "Tonno, Pollo, Prosciutto");
$productChild4 = new AnimalFood("Mangime Per Pesci Guppy in Fiocchi", "2,95",  "https://picsum.photos/200", "30g", "Pesce", "Pesci e sottoprodotti dei pesci, Cereali, Lieviti,Alghe");

$arrayProductChilds = [$productChild1, $productChild2, $productChild3, $productChild4];
