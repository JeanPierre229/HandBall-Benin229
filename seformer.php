<?php
    $el = "seformer";
    function view_img($img, $txt, $url_video, $duree = 10){
        echo '<div class="px-1 py-3 mx-2" id="person">
                        <img src="' .$img. '" alt="" class="img">
                        <h5 class="text-center px-4">
                            ' .$txt. '
                        </h5>
                        <span class="px-4">Durée: ' .$duree. '</span>
                        <div class="text-right mx-5 container"><a href="video.php?titre=' .$txt. '&video=' .$url_video. '"><button id="bouton" class="btn btn-primary mx-5">Suivre</button></a></div>
               </div>';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se former</title>
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
                <h2 class="text-start mx-5">
                    <strong>Suivez nos formations pour améliorer votre niveau</strong>
                </h2>
                <div class="row px-3 mx-3 my-3">
                    <?php view_img("images/wax-person-01.png", "Les règles fondamentales", "video/BLACK CLOVER 001 VF.mp4"); ?>
                    <span class="mx-3"></span>
                    <?php view_img("images/wax-person-02.png", "Les techniques individuelles", "video/02L-1.mkv"); ?>
                </div>
                <div class="row px-3 mx-3 my-3">
                    <?php view_img("images/wax-person-03.png", "Les situations de jeu collectif", "video/02L-2.mkv") ?>
                    <span class="mx-3"></span>
                    <?php view_img("images/wax-person-04.png", "Les situations du gardien de mains", "video/02L-3.mkv") ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>