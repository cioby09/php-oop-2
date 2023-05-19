<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/categories.php";
require_once __DIR__ . "/models/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooleanPetShop</title>

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class="text-center">
        <h1>BooleanPetShop</h1>
    </header>

    <main class="overflow-auto">
        <div class="container p-3">
            <div class="row row-cols-3">
                <?php foreach ($products as $product) { ?>
                    <div class="col g-4">
                        <div class="card p-3">
                            <img src="<?php echo $product->img; ?>" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $product->name; ?></h2>
                                <p class="card-text"><?php echo $product->description; ?></p>
                                <p class="card-text">Prezzo: <?php echo $product->price; ?></p>
                                <p class="card-text">Tipo: <?php echo $product->type; ?></p>
                                <p class="card-text">Categoria: <?php echo $product->category; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>