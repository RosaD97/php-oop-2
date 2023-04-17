<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';



// Food
$royal_canin = new Food('Royal Canin Mini Adult', '43,99', 'Cane', '545', 'prosciutto, riso');
$almo_nature = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44,99', 'Cane', '600', 'manzo, cereali');
$almo_nature_cat = new Food('Almo Nature Cat Daily Lattina', '34,99', 'Gatto', '400', 'tonno, pollo, prosciutto');
$mangime_pesci = new Food('Mangime per Pesci Guppy in Fiocchi', '2,95', 'Pesce', '30', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

// Accessory
$voliera = new Accessory('Voliera Wilma in Legno', '184,99', 'Uccello', 'Legno', 'M: L83 x P 67 x H 153 cm');
$cartucce = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', '2,29', 'Pesce', 'Materiale espanso', 'ND');

// Game
$kong = new Accessory('Kong Classic', '13,49', 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
$topini = new Accessory('Topini di peluche Trixie', '4,99', 'Gatto', 'Morbido con la codina in corda', '8,5 cm x 10 cm');


var_dump($royal_canin, $almo_nature, $almo_nature_cat, $mangime_pesci);
var_dump($voliera, $cartucce);
var_dump($kong, $topini);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>

<body>
    <h1>ciao</h1>
</body>

</html>