<?php
    session_start();
    $el = "adhesion";
    $titre = null;
    $video = null;
    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlentities($donnee);
        return $donnee;
    }

    if(!empty($_GET)){
        $titre = check($_GET["titre"]);
        $video = check($_GET["video"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Vidéos</title>
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
            <div class="col-10 mx-auto">
                <h2 class="text-center  ">
                    <strong>Adhésion à notre club</strong>
                </h2>
                <h2 class="text-center">Qui ?</h2>
                <p class="text-justify">
                    Toute personne saine physiquement, mentalement et moralement aimant le défi physique, la collaboration et fait travailler son intellectuel pour venir à bout des défis rencontrés sur le terrain et en dehors. C'est une école de la vie qui vous prépare individuellement et collectivement au défis futur. <br>Prêt à vivre l'excitation du handball avec une équipe passionnée et dévouée ? Rejoignez notre club de handball et decouvrez une communauté dynamique ou l'esprit d'equipe et la compétition se rencontrent. Le club est ouvert:  
                </p>
                <div class="row mx-auto my-4">
                    <div class="col-4 d-flex">
                        <img src="images/adh-wax-01.jpeg" alt="La main dans la main" class="img w-75 align-self-end">
                    </div>
                    <div class="col-8 my-5">
                        <h3 class="text-center">
                            <strong>1. Aux amateurs du handball</strong>
                        </h3>
                        <p class="text-center" style="font-size: 16px;">
                            Qui veulent juste apprendre le handball par passion et juste pour jouer avec des amis.
                        </p>
                    </div>
                </div>
                <div class="row mx-auto my-4 bg-light">
                    <div class="col-8 my-5">
                        <h3 class="text-center mt-5">
                            <strong>2. Aux professionnels de handball</strong>
                        </h3>
                        <p class="text-center" style="font-size: 16px;">
                            Qui veulent apprendre le handball pour en faire une profession.
                        </p>
                    </div>
                    <div class="col-4 d-flex">
                        <img src="images/adh-wax-02.jpeg" alt="La main dans la main" class="img w-75 align-self-end">
                    </div>
                </div>
                <div class="row mx-auto my-4">
                    <div class="col-4">
                        <img src="images/adh-wax-03.jpeg" alt="La main dans la main" class="img w-75">
                    </div>
                    <div class="col-8 my-4">
                        <h3 class="text-center">
                            <strong>Avantage 1</strong>
                        </h3>
                        <p class="text-justify" style="font-size: 16px;">
                            En tant que membre de notre club de handball, vous
                            bénéficierez d'une expérience inoubliable sur et en
                            dehors du terrain. Que vous soyez débutant ou joueur expérimenté, 
                            notre club offre des opportunités pour tous les niveaux et tous les âges. Vous serez encadré par des expérimentés qui vous aideront à développer vos
                            compétences techniques, votre endurance et votre
                            stratégie de jeu. 
                        </p> 
                    </div>
                </div>
                <div class="row mx-auto bg-light my-4">
                    <div class="col-8 my-4">
                        <h3 class="text-center">
                            <strong>Avantage 2</strong>
                        </h3>
                        <p class="text-justify" style="font-size: 16px;">
                            En rejoignant notre club, vous ferez partie d'une véritable famille de passionnés de handball. Vous
                            aurez l'occasion de vous faire de nouveaux amis, de partager des moments de camaraderie et de créer
                            des souvenirs durables lors de nos événements sportifs et sociaux.
                        </p> 
                    </div>
                    <div class="col-4">
                        <img src="images/adh-wax-04.jpeg" alt="La main dans la main" class="img w-75">
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-primary py-1 px-5">Adhérer</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>