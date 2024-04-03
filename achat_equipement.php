<?php
    // session_start();
    $el = "achat";
    function achat($nm_img, $alt, $titre_img, $prix){
        echo '<div class="text-center mx-auto">
                        <img src="' .$nm_img. '" alt="' .$alt. '" class="img w-75">
                        <h5>' .$titre_img. '</h5>
                        <h6>Prix : ' .$prix. ' FCFA</h6>
                        <button class="btn btn-primary px-5 py-0">Acheter</button>
            </div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat d'équipement</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="images/head-icon.png">
</head>
<body>
    <header>
        <?php require "header.php"; ?>
    </header>
    <main class="container-fluid">
        <div class="row">
        <?php require "aside.php"; ?>
            <div class="col-10">
                <h2 class="text-center">
                    <strong>Achat d'équipement sportif pour le HandBall</strong>
                </h2>
                <div class="row px-3 mx-3 my-3">
                    <?php achat("images/ballon-handball.png", "Un ballon de HandBall", "Ballon de HandBall", 7000); ?>
                    <span class="mx-3"></span>
                    <?php achat("images/maillot.png", "Un maillots", "Maillots", 3000); ?>
                    <?php achat("images/chaussure.png", "Une chaussure de handball", "Chaussure handball", 5000); ?>
                </div>
                <div class="row px-3 mx-3 my-3">
                    <?php achat("images/protege.png", "Un protège tibia", "Protège Tibia", 7000); ?>
                    <span class="mx-3"></span>
                    <?php achat("images/poignet.png", "Une bande de poignet", "Bande poignet", 7000); ?>
                    <?php achat("images/genou.png", "Une genouillère", "Genouillère", 7000); ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>