<?php
    function cadre_mission($img, $alt, $txt){
        echo '<div class="text-center col-4" style="font-size: 12px; font-weight: bold;">
                        <img src="' .$img. '" alt="' .$alt. '" class="img">
                        <p class="container text-center text-justify">' .$txt. '</p>
        </div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <header>
        <?php require "header.php"; ?>
    </header>
    <main class="container-fluid">
        <div class="row">
            <?php require "aside.php"; ?>
            <div class="col">
                <div class="text-start col-9">
                    <h1>Soyez la Bienvenue à <h1>
                    <h1 class="text-primary">Handball Bénin</h1>
                    <p class="" style="font-size: 16px;">Le site numéro 1 de centralisation des joueurs, des clubs et des actualités du Handball au Bénin.</p>
                    <h3>Notre mission</h3>
                </div>
                <div class="row">
                    <?php cadre_mission("images/accueil-01.png", "Calendrier des matchs", "Calendrier des matchs, événements, entraînements") ?>
                    <?php cadre_mission("images/accueil-02.png", "Actualités et interviews", "Actualités, interviews, analyses de matchs") ?>
                    <?php cadre_mission("images/accueil-03.png", "Info Club", "Info clubs, programmes, installations") ?>
                </div>
                <div class="row">
                    <?php cadre_mission("images/accueil-04.png", "Achat d'équipement", "Achat d'équipement sportif de handball") ?>
                    <?php cadre_mission("images/accueil-05.png", "Suivie des enfants", "Suivie des enfants dans les clubs (inscription, performance)") ?>
                    <?php cadre_mission("images/accueil-06.png", "Agent de joueur", "Agent de joueur") ?>
                </div>
            </div>
            <div class="col">
                <img src="images/wax-accueil.png" alt="Une image de Handball player">
            </div>
        </div>
        <div class="text-center">
            <i class="fa fa-angle-down" style="font-size: 30px; font-weight: bold;"></i>
        </div>
    </main>
    <footer class="container">
        <div class="row mx-auto justify-content-center">
            <div class="text-center px-4">
                <p>Résalisation du club</p>
                <strong>20</strong>
            </div>
            <div class="text-center px-4">
                <p>Evénement à venir</p>
                <strong>Finales samedi</strong>
            </div>
            <div class="text-center px-4">
                <p>Joueur de la semaine</p>
                <strong>Ousmane Traoré</strong>
            </div>
            <div class="text-center px-4">
                <p>Statistique des joueurs</p>
                <strong>78 %</strong>
            </div>
        </div>
    </footer>
</body>
</html>