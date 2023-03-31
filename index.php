<!-- PHP -->
<?php
require_once __DIR__ . "/models/Food.php"; //classe Food
require_once __DIR__ . "/models/Game.php"; //classe Game
require_once __DIR__ . "/models/Kennel.php"; //classe Kennel
//Cibo
$food = [
    "img" => "https://d2j6dbq0eux0bg.cloudfront.net/images/33879006/2965644321.jpg",
    "name" => "Croccantini",
    "price" => 9.99,
    "category" => "Dog",
    "grams" => 1000,
    "kcal" => 450,
    "fat" => 30,
    "carbo" => 50,
    "protein" => 20
];
//Gioco
$game = [
    "img" => "https://www.bauzaar.it/media/catalog/product/g/i/gioco-mouse-topo-in-peluche-longhair-pad-5-cm_1.png?width=700&heigth=700&store=default&image-type=image",
    "name" => "Topo",
    "price" => 19.99,
    "category" => "Cat",
    "material" => "Cotton",
    "weight" => 300,
    "heigth" => 30,
    "width" => 70,
    "depth" => 50
];
//Cuccia
$kennel = [
    "img" => "https://cdn.manomano.com/images/images_products/3326852/P/54080068_1.jpg",
    "name" => "Cuccia",
    "price" => 99.99,
    "category" => "Dog",
    "material" => "Plastic",
    "color" => "grey",
    "weight" => 1100,
    "heigth" => 95,
    "width" => 99,
    "depth" => 99
];
$foodObj = new Food($food["img"], $food["name"], $food["price"], $food["category"], $food["grams"], $food["kcal"], $food["fat"], $food["carbo"], $food["protein"]); //istanza di Food
$gameObj = new Game($game["img"], $game["name"], $game["price"], $game["category"], $game["material"], $game["weight"], $game["heigth"], $game["width"], $game["depth"]); //istanza di Game
$kennelObj = new Game($kennel["img"], $kennel["name"], $kennel["price"], $kennel["category"], $kennel["material"], $kennel["color"], $kennel["weight"], $kennel["heigth"], $kennel["width"], $game["depth"]); //istanza di Kennel
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae23fa42a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <!-- Header -->
    <header class="main-header">
    </header>
    <!-- Main -->
    <main class="main-content">
        <!-- Container -->
        <div class="container">
            <!-- Lista -->
            <ul class="list">
                <!-- Elemento della lista -->
                <li class="list-item">
                    <!-- Carta -->
                    <div class="card">
                        <!-- Testa della carta -->
                        <div class="card__head">
                            <!-- Immagine -->
                            <img class="card__img" src="<?= $foodObj->getImg() ?>" alt="">
                        </div>
                        <!-- Corpo della carta -->
                        <div class="card__body">
                            <!-- Titolo -->
                            <h2 class="card__title">
                                <?= $foodObj->getName() ?>
                                <!-- Icona -->
                                <span class="icon">
                                    <?php
                                    if ($foodObj->getCategory() == "Dog") {
                                        echo "<i class=\"fa-solid fa-dog\"></i>";
                                    } else if ($foodObj->getCategory() == "Cat") {
                                        echo "<i class=\"fa-solid fa-cat\"></i>";
                                    }
                                    ?>
                                </span>
                            </h2>
                            <!-- Prezzo -->
                            <h3 class="card__price">
                                <?= $foodObj->getPrice() ?>€
                            </h3>
                            <!-- Tipologia -->
                            <h4 class="card__type">
                                <?= get_class($foodObj) ?>
                            </h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>