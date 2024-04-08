<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(empty($_SESSION)){ ?>
        <script>
            var confirmation = confirm("Veuillez vous connecter d'abord !");
            if(confirmation){
                <?php header('Location: connexion.php'); ?>
            }
        </script>
    <?php  } ?>
</body>
</html>