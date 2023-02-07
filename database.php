<?php
include __DIR__ . './Models/AllProducts.php';
include __DIR__ . './Models/AnimalFood.php';
include __DIR__ . './Models/AnimalAccessory.php';
include __DIR__ . './Models/AnimalGame.php';

//Cibo
$productChild1 = new AnimalFood("Royal Canin Mini Adult", "43,99",  "https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg", "Cane", "545g",  ["Prosciutto", "Riso"]);
$productChild2 = new AnimalFood("Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "44,99",  "https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/800/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg", "Cane", "600g", ["Manzo, Cereali"]);
$productChild3 = new AnimalFood("Almo Nature Cat Daily Lattina", "34,99",  "https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Coniglio-400.jpg", "Gatto", "400g", ['Tonno', 'Pollo', 'Prosciutto']);
$productChild4 = new AnimalFood("Mangime Per Pesci Guppy in Fiocchi", "2,95",  "https://www.pets-house.it/6903-large_default/tetra-guppy-fiocchi-100-ml.jpg", "Pesce", "30g", ["Pesci e sottoprodotti dei pesci", "Cereali", "Lieviti", "Alghe"]);
// $arrayProductChildsFood = [$productChild1, $productChild2, $productChild3, $productChild4];

//Accessori
$productChild5 = new AnimalAccessory("Voliera Wilma in Legno", "184,99",  "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610", "Uccello",  "Legno", "M: L 83 x P 67 x H 153 cm",);
$productChild6 = new AnimalAccessory("Cartucce Filtranti per Filtro EasyCrystal", "2,29", "https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg", "Pesce",  "Materiale Espanso", "ND");
// $arrayProductChildsAccessories = [$productChild5, $productChild6];

//Giochi
$productChild7 = new AnimalGame("Kong Classic", "13,49",  "https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg", "Cane", "Galleggia e Rimbalza", "8,5 x 10cm", "Legno");
$productChild8 = new AnimalGame("Topini di peluche Trixie",  "4,99",  "https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/8/800/42535_trixie_plueschmaus_weiss_hs_02_8.jpg", "Gatto", "Morbido con codina in corda", "8,5 cm x 10cm");
// $arrayProductChildsGames = [$productChild7, $productChild8];

//Array che comprende tutti i figli
$arrayProductChilds = [$productChild1, $productChild2, $productChild3, $productChild4, $productChild5, $productChild6, $productChild7, $productChild8];



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
            return '<i class="fa-solid fa-dove"></i>';
            break;
    }
}
