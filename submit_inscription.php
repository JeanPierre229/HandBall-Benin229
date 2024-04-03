<?php
    session_start();
    $_SESSION['mailError'] = null;
    $nomPrenoms = null;
    $motDePasse = null;
    if(!empty($_POST) && isset($_POST)){
        if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
            $nomPrenoms = check($_POST['nom_prenoms']);
            $motDePasse = check($_POST['motDePasse']);
            $motDePasse = sha1($motDePasse);

            $connect = new PDO('mysql: host=localhost; dbname=handball', 'root',"");
            $requete = $connect->prepare("
                INSERT INTO users(nom_prenoms, ville, age, mail, motDePasse, valcheck)
                VALUES(?, ?, ?, ?, ?, ?);
            ");
            $requete->execute(
                array(
                    $nomPrenoms, $_POST['ville'], $_POST['age'], $_POST['mail'], 
                    $motDePasse, $_POST['check']
                    )
            );
            header("Location: connexion.php");
        }else{
            $_SESSION['mailError'] = "Votre mail n'est pas valide !";
            header('Location: inscription2.php');
        }
        
    }
    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlspecialchars($donnee);
        return $donnee;
    }
?>