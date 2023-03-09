<?php include "Episode-11.view.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episode 11</title>
</head>
<body>
    <h1><?= $bussiness['name'] ?></h1>

    <ul>
        <?php foreach($bussiness['category'] as $category) : ?>
            <li>
                <?= $category; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>