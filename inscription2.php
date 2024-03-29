<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription (2/2)</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container mx-auto my-3">
            <div class="row">
                <div class="col-6">
                    <img src="images/wax-03.png" alt="Un entraîneur" class="img">
                </div>
                <div class="col-6">
                    <div>
                        <h2 class="text-primary">Inscription (2/2)</h2>
                    </div>
                    <div>
                        <form action="#" method="post">
                            <div class="mt-2">
                                <label class="form-label"for="nm_p">Noms et Prénoms</label>
                                <input class="form-control" type="text" placeholder="John Doe" name="nm_p" id="nm_p" required>
                            </div>
                            <div class="mt-2">
                                <label class="form-label"for="ville">Ville</label>
                                <input class="form-control" type="text" placeholder="Ex: Parakou" name="ville" id="ville" required>
                            </div>
                            <div class="mt-2">
                                <label class="form-label"for="age">Age</label>
                                <input class="form-control" type="text" placeholder="Ex: 17" name="age" id="age" required>
                            </div>
                            <div class="mt-2">
                                <label class="form-label"for="mail">Adresse Email</label>
                                <input class="form-control" type="text" placeholder="Veuillez entrer votre adresse email" name="mail" id="mail" required>
                            </div>
                            <div class="mt-2">
                                <label class="form-label"for="motDePasse">Mot de Passe</label>
                                <input class="form-control" type="password" placeholder="Votre Mot de Passe" name="motDePasse" id="motDePasse" required>
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" name="connect">
                                <span>Restez connecté</span>
                            </div>
                            <div class="mt-2">
                                <a href="connexion.php" class="text-light"><button class="btn btn-primary form-control">M'inscrire</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>