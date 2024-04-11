<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE ACCEUIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="icon" href="images/head-icon.png"> -->
</head>
<style>
    .hauteur{
        height: 100%vh;
    }
</style>
<body>
    <section>
        <div class="container mx-auto my-4">
            <div class="row hauteur">
                <div id="carouselExampleInterval" class="carousel slide col-12 col-lg-6 col-md-6 container-fluid" data-bs-ride="carousel">
                    <div class="carousel-inner w-100">
                        <div class="carousel-item active">
                            <img src="images/welcome-01.jpeg" data-bs-interval="500" class="d-block w-100 img border border-light rounded-2" style="height: 90vh;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/welcome-03.jpeg" data-bs-interval="500" class="d-block w-100 img border border-light rounded-2" style="height: 90vh;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/welcome-04.jpeg" data-bs-interval="500" class="d-block w-100 img border border-light rounded-2" style="height: 90vh;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/welcome-05.jpeg" data-bs-interval="500" class="d-block w-100 img border border-light rounded-2" style="height: 90vh;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden text-dark bg-primary">Next</span>
                    </button>
                </div>
                <div class="col-12 col-lg-6 col-md-6 ctn-img my-5">
                    <div class="mx-5 px-5 my-2">
                        <img src="images/welcome-02.jpeg" alt="Joueur en l'aire" class="img w-100 border border-light rounded-2">
                    </div>
                    <div class="text-center">
                        <h1 class="text-primary">HandballBenin</h1>
                        <p>
                            Application d'inscription de handball au Bénin
                        </p>
                        <p class="my-2">
                            <span class="my-5">
                                <a href="inscription1.php" class="text-light"><button class="btn btn-primary px-5 my-2">M'inscrire</button></a>
                            </span>
                            <span class='mx-2 my-2'>
                                <a href="connexion.php" class="text-light"><button class="btn btn-primary px-5">Me Connecter</button></a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>