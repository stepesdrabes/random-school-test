<?php
include_once 'shoes_database.php';

$id = $_GET['id'];
$shoe = $shoes[$id]

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $shoe['name'] ?> | ShoeShop</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>
<body>

<div id="shoe-page-content">
    <div id="images" class="content-column">
        <div id="images">
            <?php foreach ($shoe['images'] as $image): ?>
                <img class="image" src="<?= $image ?>" alt="img">
            <?php endforeach; ?>
        </div>
    </div>

    <div id="description" class="content-column">
        <h1 class="title"><?= $shoe['name'] ?></h1>
        <div class="column-wrapper">
            <p class="section-description">Dostupné velikosti</p>
            <div class="sizes">
                <?php foreach ($shoe["sizes"] as $size): ?>
                    <div class="size">
                        <p><?= $size ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="column-wrapper">
            <p class="section-description">Cena s DPH</p>
            <h1 class="rainbow-text price"><?= $shoe['price'] ?> Kč</h1>
        </div>
    </div>
</div>

</body>
</html>