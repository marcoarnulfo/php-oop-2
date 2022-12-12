<?php

/**
 Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 L'e-commerce vende prodotti per animali.
 //I prodotti sono categorizzati, le categorie sono Cani o Gatti.
 //I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

 */

require_once __DIR__ . '/Models/Item.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Products.php';


/*
$item = new Item('Knabber Mix Original', new Category('gatto', 'https://cdn-icons-png.flaticon.com/512/616/616430.png'), 'Cibo', 'Lorem ipsum', '1.99$');
*/

$items = [
    $item = new Item(new Product('Cuccia', 'Lorem cuccia', 'https://shop-cdn-m.mediazs.com/bilder/letto/basic/7/400/icon_topseller_1_68__7.jpg', '20.00$'), new Category('Cane', 'https://cdn-icons-png.flaticon.com/512/616/616408.png')),
    $item1 = new Item(new Product('Knabber Mix', 'Lorem croccantini', 'https://shop-cdn-m.mediazs.com/bilder/felix/party/mix/snack/per/gatti/6/400/52416_pla_felix_knabbermix_original_6.jpg', '4.99$'), new Category('Gatto', 'https://cdn-icons-png.flaticon.com/512/616/616430.png')),
    $item2 = new Item(new Product('Toybrush', 'Spazzolino giocattolo per cani', 'https://cdn.shopify.com/s/files/1/0460/5653/8280/products/toybrush-lo-spazzolino-giocattolo-per-cani-613151_720x.jpg?v=1654056548', '25.99$'), new Category('Cane', 'https://cdn-icons-png.flaticon.com/512/616/616408.png')),
    $item3 = new Item(new Product('Cuccia', 'Lorem cuccia', 'https://shop-cdn-m.mediazs.com/bilder/letto/basic/7/400/icon_topseller_1_68__7.jpg', '4.99$'), new Category('Cane', 'https://cdn-icons-png.flaticon.com/512/616/616408.png')),
    $item4 = new Item(new Product('Cuccia', 'Lorem cuccia', 'https://shop-cdn-m.mediazs.com/bilder/letto/basic/7/400/icon_topseller_1_68__7.jpg', '4.99$'), new Category('Cane', 'https://cdn-icons-png.flaticon.com/512/616/616408.png')),
    $item5 = new Item(new Product('Cuccia', 'Lorem cuccia', 'https://shop-cdn-m.mediazs.com/bilder/letto/basic/7/400/icon_topseller_1_68__7.jpg', '4.99$'), new Category('Cane', 'https://cdn-icons-png.flaticon.com/512/616/616408.png')),
];


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
        <?php foreach ($items as $element){ ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $element->get_product()->get_img() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->get_product()->get_name() ?></h5>
                        <div>
                        <?php echo $element->get_category()->get_name() ?>
                            <img src="<?php echo $element->get_category()->get_icon() ?>" alt="">
                        </div>
                        <p class="card-text"><?php echo $element->get_product()->get_description() ?></p>
                        <p class="card-text"><?php echo $element->get_product()->get_price() ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div >
            <?php }?>
        </div>
    </div>
</body>

</html>