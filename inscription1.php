<?php 
    function view($img, $description, $url){
        echo "<div class='col-4 px-1'>";
            echo "<div class='text-center'>";
                echo '<a href="' .$url. '">"<img src="'.$img. '" alt=""></a>';
            echo '</div>';
            echo '<div>';
                echo '<p class="text-center">';
                    echo $description;
                echo '</p>';
            echo '</div>';
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waxangari_Labs-Inscription2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/head-icon.png">
</head>
<body>
    <section>
    <div class="container mt-3">
        <div class="col-12">
            <div class="text-center text-primary">
                <h1>Inscription (1/2)</h1>
            </div>
            <div class="text-center mt-3">
                <h3>Choisir votre statut de vous mieux à l'aune</h3>
            </div>
            <div class="row mt-3">
                <?php view("images/wax-ins-01.png", "Je suis parent de joueur", "inscription_parent.php")?>
                <?php view("images/wax-ins-02.png", "Joueur", "inscription_joueur.php")?>
                <?php view("images/wax-ins-03.png", "Entraineur", "inscription_entraineur.php")?>
            </div>
            <div class="mt-3 text-center">
                <a href="connexion.php"><button class="btn btn-primary px-5">Connexion</button></a>
            </div>
        </div>
    </div>
    </section>
    
</body>
</html>