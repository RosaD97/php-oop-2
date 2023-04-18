<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Category.php';


$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');

// var_dump($category_dog);

try {
    // Food
    $royal_canin = new Food(10, 'Royal Canin Mini Adult', 43.99, $category_dog, '#', 545, 'prosciutto, riso');
    $almo_nature = new Food(20, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $category_dog, '#', 600, 'manzo, cereali');
    $almo_nature_cat = new Food(30, 'Almo Nature Cat Daily Lattina', 34.99, $category_cat, '#', 400, 'tonno, pollo, prosciutto');
    $mangime_pesci = new Food(40, 'Mangime per Pesci Guppy in Fiocchi', 2.95, $category_fish, '#', 30, 'Pesci, sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    // Accessory
    $voliera = new Accessory(50, 'Voliera Wilma in Legno', 18.99, $category_bird, '#', 'Legno', 'M: L83 x P 67 x H 153 cm');
    $cartucce = new Accessory(60, 'Cartucce Filtranti per Filtro EasyCrystal', 2.29, $category_fish, '#', 'Materiale espanso', 'ND');

    // Toy
    $kong = new Toy(70, 'Kong Classic', 13.49, $category_dog, '#', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
    $topini = new Toy(80, 'Topini di peluche Trixie', 4.99, $category_cat, '#', 'Morbido con la codina in corda', '8,5 cm x 10 cm');
} catch (Exception $error) {
    echo $error->getMessage();
}

$products = [$royal_canin, $almo_nature, $almo_nature_cat, $mangime_pesci, $voliera, $cartucce, $kong, $topini];
$title = 'shooooP';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Boolshop</title>
</head>

<body>
    <div class="container d-flex align-items-center flex-column">
        <h1 class="my-4"> <?php echo $title ?></h1>
        <div class="row d-flex justify-content-center">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">

                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                            <h4><?php echo $product->get_category()->get_info(); ?> </h4>
                            <div class="card-text"><?php echo 'Prezzo: ', $product->get_price(); ?>$</div>
                            <?php if (method_exists($product, 'get_ingredients') && method_exists($product, 'get_peso')) : ?>
                                <div class="card-text">Ingredienti: <?php echo $product->get_ingredients(); ?></div>
                                <div class="card-text">Peso netto: <?php echo $product->get_peso(); ?>g</div>
                            <?php endif; ?>

                            <?php if (method_exists($product, 'get_material') && method_exists($product, 'get_dimension')) : ?>
                                <div class="card-text">Materiale: <?php echo $product->get_material(); ?></div>
                                <div class="card-text">Dimensioni: <?php echo $product->get_dimension(); ?></div>
                            <?php endif; ?>

                            <?php if (method_exists($product, 'get_features') && method_exists($product, 'get_dimension')) : ?>
                                <div class="card-text">Caratteristiche: <?php echo $product->get_features(); ?></div>
                                <div class="card-text">Dimensioni: <?php echo $product->get_dimension(); ?></div>
                            <?php endif; ?>

                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>