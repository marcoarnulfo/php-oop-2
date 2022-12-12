<?php

/**
 Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 L'e-commerce vende prodotti per animali.
 //I prodotti sono categorizzati, le categorie sono Cani o Gatti.
 //I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

 */

require_once __DIR__ . '/Models/Item.php';



$item = new Item('Knabber Mix Original', 'Gatto', 'Cibo', 'Lorem ipsum', '1.99$');
var_dump($item->get_name());
$item2 = new Item('Letto Basic', 'Cane', 'Cuccia', 'Lorem cuccia', '20.99$');

// https://cdn-icons-png.flaticon.com/512/616/616408.png immagine cane
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Document</title>
    <style>
        img{
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://shop-cdn-m.mediazs.com/bilder/felix/party/mix/snack/per/gatti/6/400/52416_pla_felix_knabbermix_original_6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->get_name() ?></h5>
                        <div>
                        <?php echo $item->get_category() ?>
                            <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="">
                        </div>
                        <p class="card-text"><?php echo $item->get_type() ?></p>
                        <p class="card-text"><?php echo $item->get_description() ?></p>
                        <p class="card-text"><?php echo $item->get_price() ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://shop-cdn-m.mediazs.com/bilder/letto/basic/7/400/icon_topseller_1_68__7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item2->get_name() ?></h5>
                        <div>
                        <?php echo $item2->get_category() ?>
                            <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="">
                        </div>
                        <p class="card-text"><?php echo $item2->get_type() ?></p>
                        <p class="card-text"><?php echo $item2->get_description() ?></p>
                        <p class="card-text"><?php echo $item2->get_price() ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>