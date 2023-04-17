<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';




// Food
$royal_canin = new Food('Royal Canin Mini Adult', 43.99, 'Cane', 545, ['prosciutto', 'riso']);
$almo_nature = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'Cane', 600, ['manzo', 'cereali']);
$almo_nature_cat = new Food('Almo Nature Cat Daily Lattina', 34.99, 'Gatto', 400, ['tonno', 'pollo', 'prosciutto']);
$mangime_pesci = new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'Pesce', 30, ['Pesci', 'sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);

// Accessory
$voliera = new Accessory('Voliera Wilma in Legno', 18.499, 'Uccello', 'Legno', 'M: L83 x P 67 x H 153 cm');
$cartucce = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'Pesce', 'Materiale espanso', 'ND');

// Toy
$kong = new Toy('Kong Classic', 13.49, 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
$topini = new Toy('Topini di peluche Trixie', 4.99, 'Gatto', 'Morbido con la codina in corda', '8,5 cm x 10 cm');

// var_dump($royal_canin, $almo_nature, $almo_nature_cat, $mangime_pesci);
// var_dump($voliera, $cartucce);
$products = [$royal_canin, $almo_nature, $almo_nature_cat, $mangime_pesci, $voliera, $cartucce, $kong, $topini];
$title = 'shooooP';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Boolshop</title>
</head>

<body>
    <div class="container d-flex align-items-center flex-column">
        <h1 class="my-4"> <?php echo $title ?></h1>

        <div class="row d-flex justify-content-center">
            <?php foreach ($products as $product) : ?>
                <div class="col-3 border border-secondary m-3">
                    <div class="d-flex justify-content-center mt-1">
                        <!-- Img di prova -->
                        <img  style="height: 300px;" src="img/cane.jpg" alt="">
                    </div>
                    <div>
                        <?php foreach ($product as $key => $value) : ?>
                            <?php if ($key == 'name') : ?>
                                <h3><?php echo $value ?></h3>
                            <?php elseif ($key == 'category') : ?>
                                <div><?php echo 'Categoria: ', $value ?></div>
                            <?php elseif ($key == 'price') : ?>
                                <div><?php echo 'Prezzo: ', $value, ' €' ?></div>
                            <?php elseif ($key == 'material') : ?>
                                <div><?php echo 'Materiale: ', $value ?></div>
                            <?php elseif ($key == 'features') : ?>
                                <div><?php echo 'Caratteristiche: ', $value ?></div>
                            <?php elseif ($key == 'dimension') : ?>
                                <div><?php echo $value ?></div>
                            <?php elseif ($key == 'peso') : ?>
                                <div><?php echo 'Peso netto: ', $value ?></div>
                            <?php elseif ($key == 'ingredients ') : ?>
                                <div>
                                    <?php foreach ($value as $ingredients) : ?>
                                        <?php echo $value, ' '; ?>
                                    <?php endforeach; ?>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>