<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Toy.php';

$b = new Product('Sabbia Gatto', '22€', 34234242223515 , 35, 'Catsan', 'bla bla blaa bla bla', 'Cat' );
$a = new Toy ('Sabbia Gatto', '22€', 34234242223515 , 35, 'Catsan', 'bla bla blaa bla bla', 'Cat' , 'sassi', '40cm', '5kg', '20cm')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach( $a as $item) : ?>
        <h3><?php echo $item ?> </h3>
    <?php endforeach?>
    
</body>
</html>