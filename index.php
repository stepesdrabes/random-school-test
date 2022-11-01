<?php
include_once 'shoes_database.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoeShop</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>
<body>

<div id="main-page-content">
    <div id="shoes">
        <?php foreach ($shoes as $key => $shoe): ?>
            <a href="shoe.php?id=<?= $key ?>">
                <div class="shoe">
                    <h1 class="title"><?= $shoe['name'] ?></h1>
                    <img class="image" src="<?= $shoe['images'][0] ?>" alt="<?= $shoe['name'] ?>">
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<script>
    const shoes = document.getElementsByClassName("shoe")

    window.addEventListener('mousemove', event => {
        Array.prototype.forEach.call(shoes, function (element) {
            const image = element.getElementsByClassName("image")[0]

            if (image != null) {
                image.style.top = (event.y + 25) + "px"
                image.style.left = (event.x + 25) + "px"
            }
        });
    });
</script>

</body>
</html>