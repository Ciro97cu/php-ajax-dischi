<?php
include "php/data.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--***** link montserrat *****-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--***** bootstrap css only *****-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--***** link my css file *****-->
    <link rel="stylesheet" href="css/main.css">
    <!--***** link favicon *****-->
    <link rel="shortcut icon" href="img/spotify-svg.svg" type="image/x-icon">
    <title>PHP AJAX DISCHI</title>
</head>

<body>

    <header class="container-fluid py-2">
        <div class="wrapper_logo">
            <img src="img/spotify-svg.svg" alt="spotify-logo" />
        </div>
    </header>

    <main>
        <div class="container-sm">
            <div class="row gy-4 justify-content-around pt-5">
                <?php foreach ($arrayDisc as $disc) { ?>
                    <div class="text-white song_card text-center p-3">
                        <img src="<?= $disc['poster'] ?>" alt="<?= $disc['author'] ?>" class="w-100" />
                        <h4><?= $disc["title"] ?></h4>
                        <p><?= $disc["author"] ?></p>
                        <p><?= $disc["year"] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>