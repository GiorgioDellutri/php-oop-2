<?php
require_once __DIR__ . '/models/Product.php';
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
    <main>
        <h1>Prodotti(<?php Product::getCount() ?>)</h1>
        <?php
        $testProdotto = new Product('Cuccia', 20, 12.5, 'caishjkj');
        var_dump($testProdotto);
        ?>
    </main>
</body>

</html>