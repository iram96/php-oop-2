<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Toy.php';



// $b = new Product('Sabbia Gatto', '22€', 34234242223515 , 35, 'Catsan', 'bla bla blaa bla bla', 'Cat' );
$a = new Toy ('Sabbia Gatto', '22€', 34234242223515 , 35, 'Catsan', 'bla bla blaa bla bla', 'Cat' , 'sassi', '40cm', '5kg', '20cm');

$cart = ['ciao'];

function addItem($selected){
    $cart[] = $selected;
};

function getCart($cart){
    
    var_dump($cart);
}


var_dump(addItem($a));

var_dump($cart);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">

        <?php foreach( $a as $item) : ?>
            <h3><?php echo $item ?> </h3>
        <?php endforeach?>
        <button onclick='addItem($a)'>Aggiungi</button>
        <button onclick='getCart($cart)'>Cart</button>
    </div>
    <script src='script.js'></script>
</body>
</html>