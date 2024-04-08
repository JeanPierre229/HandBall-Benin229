<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inscription_joueur.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Inscription_Joueur(e) - WaxangariLabs</title>
</head>
<style>
    #a:hover{
        text-decoration: none;
        color: black;
    }
</style>
<body class="container shadow-lg rounded p-4 m-auto mt-5">
    <header>
        <h1 class="text-center">FICHE DE DETECTION HANDBALL</h1>
    </header>
    <main>
        <form action="submit_inscription_joueur.php" method="post">
            <ol type="I">
                <!-- section I -Identification personnelle- -->
                <section>
                    <h3 class="text-start">
                        <strong><li>Identification</li></strong>
                    </h3>
                    <div class="row">
                        <div class="cadre_profil px-4 py-5 m-5">
                            <a href="" id="a" style="color: black;"><p class="text-center" id="photo">PHOTO 4 * 4</p></a>
                            <input type="file" name="photo_profil" id="photo_profil" style="display: none;">
                        </div>
                        <div class="m-2">
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="nom" class="form-label">Nom : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="nom" id="nom" class="input_edit">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="prenoms" class="form-label">Prénoms : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="prenoms" id="prenoms" class="input_edit">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="naissance" class="form-label">Date et lieu de Naissance : </label>
                                </div>
                                <div class="col-3">
                                    <input type="date" name="date_naissance" id="date_naissance" class="input_naissance">
                                </div>
                                
                                <div class="text-start mt-2">à</div>

                                <div class="col-4">
                                    <input type="text" name="lieu_naissance" id="lieu_naissance" class="input_naissance lieu_naissance">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="sexe" class="form-label">Sexe : </label>
                                </div>
                                <div class="col-8 mt-2">
                                    <div class="row">
                                        <div class="col-4 text-start mx-3">
                                            <span>
                                                <label for="masculin" class="form-label">Masculin : </label>
                                                <input type="radio" name="genre" id="masculin">
                                            </span>
                                        </div>
                                        <div class="col-4 text-center mx-3">
                                            <span>
                                                <label for="feminin" class="form-label">Feminin : </label>
                                                <input type="radio" name="genre" id="feminin">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="ref_cip" class="form-label">Réf. N° CIP : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="ref_cip" id="ref_cip" class="input_edit">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 pt-2">
                                    <label for="contact_parent" class="form-label">Contact des Parents : </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="contact_parent" id="naissance" class="input_edit">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- section II -donnees anthropométriques-->
                <section>
                    <h3 class="text-start">
                        <strong><li>Données anthropométriques</li></strong>
                    </h3>
                    <ol>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="taille" class="form-label"><li>Taille :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="taille" id="taille">
                            </div>
                            <div class="col-1 mx-3">(cm)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="poids" class="form-label"><li>Poids :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="poids" id="poids">
                            </div>
                            <div class="col-1 mx-3">(Kg)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="hauteur_poids" class="form-label"><li>Hauteur sur poids :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="hauteur_poids" id="hauteur_poids">
                            </div>
                            <div class="col-1 mx-3">(Kg/m²)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="imc" class="form-label"><li>IMC :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="imc" id="imc">
                            </div>
                            <div class="col-1 mx-3">(Kg/m²)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="empan" class="form-label"><li>Empan :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="empan" id="empan">
                            </div>
                            <div class="col-1 mx-3">(cm)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="envergure" class="form-label"><li>Envergure :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="envergure" id="envergure">
                            </div>
                            <div class="col-1 mx-3">(cm)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="pointure" class="form-label"><li>Pointure :</li></label>
                            </div>
                            <div class="col-1">
                                <input type="text" class="input_edit1" name="pointure" id="pointure">
                            </div>
                            <div class="col-1 mx-3">(cm)</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-2">
                                <label for="lateralite" class="form-label"><li>Latéralité :</li></label>
                            </div>
                            <div class="col-8 mt-2">
                                <div class="row">
                                    <div class="col-3 text-center mx-3">
                                        <span>
                                            <label for="gaucher" class="form-label">Gaucher : </label>
                                            <input type="radio" name="lateralite" id="gaucher">
                                        </span>
                                    </div>
                                    <div class="col-2 text-center mx-3">
                                        <span>
                                            <label for="droitier" class="form-label">Droitier : </label>
                                            <input type="radio" name="lateralite" id="droitier">
                                        </span>
                                    </div>
                                    <div class="col-3 text-start mx-3">
                                        <span>
                                            <label for="ambidextre" class="form-label">Ambidextre : </label>
                                            <input type="radio" name="lateralite" id="ambidextre">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ol>
                </section>

                <!-- section III -evaluation des capacites physiques- -->
                <section>
                    <h3 class="text-start mt-3">
                        <strong><li>Evaluation des capacités physiques</li></strong>
                    </h3>
                    <ol>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <label for="force" class="form-label"><li>Force :</li></label>
                            </div>
                            <div class="mt-2">
                                <div class="col-4 mt-2 d-inline">
                                    <label for="traction" class="form-label">Traction :</label>
                                </div>
                                <div class="col-2 text-center mx-3 d-inline">
                                    <span>
                                        <label for="pompe" class="form-label">Pompe : </label>
                                        <input type="radio" name="force" id="pompe">
                                    </span>
                                </div>
                                <div class="col-2 text-start mx-3 d-inline">
                                    <span>
                                        <label for="grimpe" class="form-label">Grimpé à la corde : </label>
                                        <input type="radio" name="force" id="grimpe">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <label for="vitesse" class="form-label"><li>Vitesse :</li></label>
                            </div>
                            <div class="mt-2">
                                <div class="col-4 mt-2 d-inline">
                                    <label for="lineaire" class="form-label">Linéaire :</label>
                                </div>
                                <div class="col-2 text-center mx-3 d-inline">
                                    <span>
                                        <label for="vitesse_reaction" class="form-label">5m -> vitesse de réaction : </label>
                                        <input type="radio" name="vitesse" id="vitesse_reaction">
                                    </span>
                                </div>
                                <div class="col-2 text-start mx-3 d-inline">
                                    <span>
                                        <label for="vitesse_acceleration" class="form-label">20m -> vitesse d'accélération : </label>
                                        <input type="radio" name="vitesse" id="vitesse_acceleration">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <label for="endurance" class="form-label"><li>Endurance :</li></label>
                            </div>
                            <div class="mt-2">
                                <div class="col-2 text-center d-inline">
                                    <span>
                                        <label for="course_navette" class="form-label">Course navette jouée : </label>
                                        <input type="radio" name="endurance" id="course_navette">
                                    </span>
                                </div>
                                <div class="col-2 text-center mx-3 d-inline">
                                    <span>
                                        <label for="trente_quinze" class="form-label">30 - 15 (m) : </label>
                                        <input type="radio" name="endurance" id="trente_quinze">
                                    </span>
                                </div>
                                <div class="col-2 text-start mx-3 d-inline">
                                    <span>
                                        <label for="test_yoyo" class="form-label">Test de Yoyo : </label>
                                        <input type="radio" name="endurance" id="test_yoyo">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3 mt-2">
                                <label for="test_detente" class="form-label"><li>Test de détente :</li></label>
                            </div>
                            <div class="col-2 mt-2 text-start d-inline">
                                <span>
                                    <label for="sargent_test" class="form-label">Sargent test : </label>
                                    <input type="checkbox" name="sargent_test" id="sargent_test">
                                </span>
                            </div>
                            
                        </div>
                    </ol>
                </section>

                <!-- section IV -evaluation des competences techniques- -->
                <section>
                    <h3 class="text-start mt-2">
                        <strong><li>Evaluation des compétences techniques</li></strong>
                    </h3>
                    <ol>
                        <div class="row">
                            <div class="col-2"><li>Tir :</li></div>
                            <div class="col-4">Tir sur cible(fixe/mobile) : </div>
                            <div class="col-2">
                                <label for="tir_moyen" class="form-label">Moyen : </label>
                                <input type="radio" name="tir" id="tir_moyen">
                            </div>
                            <div class="col-2">
                                <label for="tir_bon" class="form-label">Bon : </label>
                                <input type="radio" name="tir" id="tir_bon">
                            </div>
                            <div class="col-2">
                                <label for="tir_tres_bon" class="form-label">Très bon : </label>
                                <input type="radio" name="tir" id="tir_tres_bon">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-2"><li>Dribble :</li></div>
                            <div class="col-4">Slalom linéaire : </div>
                            <div class="col-2">
                                <label for="dribble_moyen" class="form-label">Moyen : </label>
                                <input type="radio" name="dribble" id="dribble_moyen">
                            </div>
                            <div class="col-2">
                                <label for="dribble_bon" class="form-label">Bon : </label>
                                <input type="radio" name="dribble" id="dribble_bon">
                            </div>
                            <div class="col-2">
                                <label for="dribble_tres_bon" class="form-label">Très bon : </label>
                                <input type="radio" name="dribble" id="dribble_tres_bon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"><li>Fente :</li></div>
                            <div class="col-4">Situation de 1 # 1 :</div>
                            <div class="col-2">
                                <label for="fente_moyen" class="form-label">Moyen : </label>
                                <input type="radio" name="fente" id="fente_moyen">
                            </div>
                            <div class="col-2">
                                <label for="fente_bon" class="form-label">Bon : </label>
                                <input type="radio" name="fente" id="fente_bon">
                            </div>
                            <div class="col-2">
                                <label for="fente_tres_bon" class="form-label">Très bon : </label>
                                <input type="radio" name="fente" id="fente_tres_bon">
                            </div>
                        </div>
                    </ol>
                </section>

                <!-- section V -evaluation des compétences tactiques- -->
                <section>
                    <h3 class="text-start mt-3">
                        <strong><li>Evaluation des compétences tactiques</li></strong>
                    </h3>
                    <!-- evaluation des competences tactiques sans tableau -->
                    <!--
                    <ol>
                        <div class="col-2 mb-2"><li>Adaptation au jeu :</li></div>
                        <div class="col-3 d-inline mx-2">
                            <label for="non_participe" class="form-label">Ne participe pas au jeu : </label>
                            <input type="radio" name="participe_jeu" id="non_participe">
                        </div>
                        <div class="col-3 d-inline mx-2">
                            <label for="participe" class="form-label">Participe au jeu : </label>
                            <input type="radio" name="participe_jeu" id="participe">
                        </div>
                        <div class="col-3 d-inline mx-2">
                            <label for="participe_toutes_phases" class="form-label">Participe à toutes les phases du jeu : </label>
                            <input type="radio" name="participe_jeu" id="participe_toutes_phases">
                        </div>
                        -->
                        <!--    
                        <div class="col-2 my-2"><li>Prise de décision :</li></div>
                        <ol type="i">
                            <div class="row">
                                <div class="col-3"><li>Tir au but face au Gardien:</li></div>
                                <div class="col-2">
                                    <label for="tir_face_gardien_moyen" class="form-label">Moyen : </label>
                                    <input type="radio" name="tir_face_gardien" id="tir_face_gardien_moyen">
                                </div>
                                <div class="col-2">
                                    <label for="tir_face_gardien_bon" class="form-label">Bon : </label>
                                    <input type="radio" name="tir_face_gardien" id="tir_face_gardien_bon">
                                </div>
                                <div class="col-2">
                                    <label for="tir_tres_bon" class="form-label">Très bon : </label>
                                    <input type="radio" name="tir_face_gardien" id="tir_face_gardien_tbon">
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-3"><li>Passe :</li></div>
                                <div class="col-2">
                                    <label for="passe_moyen" class="form-label">Moyen : </label>
                                    <input type="radio" name="passe" id="passe_moyen">
                                </div>
                                <div class="col-2">
                                    <label for="passe_bon" class="form-label">Bon : </label>
                                    <input type="radio" name="passe" id="passe_bon">
                                </div>
                                <div class="col-2">
                                    <label for="passe_tbon" class="form-label">Très bon : </label>
                                    <input type="radio" name="passe" id="passe_tbon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3"><li>Tir :</li></div>
                                <div class="col-2">
                                    <label for="tir_decision_moyen" class="form-label">Moyen : </label>
                                    <input type="radio" name="tir_decision" id="tir_decision_moyen">
                                </div>
                                <div class="col-2">
                                    <label for="tir_decision_bon" class="form-label">Bon : </label>
                                    <input type="radio" name="tir_decision" id="tir_decision_bon">
                                </div>
                                <div class="col-2">
                                    <label for="tir_decision_tbon" class="form-label">Très bon : </label>
                                    <input type="radio" name="tir_decision" id="tir_decision_tbon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3"><li>Montée / Repli :</li></div>
                                <div class="col-2">
                                    <label for="monte_repli_moyen" class="form-label">Moyen : </label>
                                    <input type="radio" name="monte_repli" id="monte_repli_moyen">
                                </div>
                                <div class="col-2">
                                    <label for="monte_repli_bon" class="form-label">Bon : </label>
                                    <input type="radio" name="monte_repli" id="monte_repli_bon">
                                </div>
                                <div class="col-2">
                                    <label for="monte_repli_tbon" class="form-label">Très bon : </label>
                                    <input type="radio" name="monte_repli" id="monte_repli_tbon">
                                </div>
                            </div>
                        </ol>
                    </ol>
                    -->

                    <!-- evaluation des competences tactiques avec tableau -->
                    <ol>
                        <li>Adaptation au jeu</li>
                        <table class="table table-striped table-secondary">
                            <tr>
                                <td>Ne participe pas au jeu</td>
                                <td>Participe au jeu</td>
                                <td>Participe à toutes les phases du jeu</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="participe" id="ne_participe"></td>
                                <td><input type="radio" name="participe" id="participe"></td>
                                <td><input type="radio" name="participe" id="participe_toutes_phases"></td>
                            </tr>
                        </table>

                        <li>Prise de décision</li>
                        <table class="table table-secondary table-striped">
                            <tr>
                                <td colspan="3">Tir au but face au Gardien</td>
                                <td colspan="3">Passe</td>
                                <td colspan="3">Tir</td>
                                <td colspan="3">Montée / Repli</td>
                            </tr>
                            <tr>
                                <td>Moy</td>
                                <td>Bon</td>
                                <td>Très bon</td>
                                <td>Moy</td>
                                <td>Bon</td>
                                <td>Très bon</td>
                                <td>Moy</td>
                                <td>Bon</td>
                                <td>Très bon</td>
                                <td>Moy</td>
                                <td>Bon</td>
                                <td>Très bon</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="tir_face_gardien" id="tir_face_gardien_moy"></td>
                                <td><input type="radio" name="tir_face_gardien" id="tir_face_gardien_bon"></td>
                                <td><input type="radio" name="tir_face_gardien" id="tir_face_gardien_tbon"></td>
                                <td><input type="radio" name="passe" id="passe__moy"></td>
                                <td><input type="radio" name="passe" id="passe_bon"></td>
                                <td><input type="radio" name="passe" id="passe_tbon"></td>
                                <td><input type="radio" name="tir_decision" id="tir_decision_moy"></td>
                                <td><input type="radio" name="tir_decision" id="tir_decision_bon"></td>
                                <td><input type="radio" name="tir_decision" id="tir_decision_tbon"></td>
                                <td><input type="radio" name="monte_repli" id="monte_repli_moy"></td>
                                <td><input type="radio" name="monte_repli" id="monte_repli_bon"></td>
                                <td><input type="radio" name="monte_repli" id="monte_repli_tbon"></td>
                            </tr>
                        </table>
                    </ol>
                </section>
            </ol>
            
            
            <hr class="my-4">
            <!-- le bouton envoyer  -->
            <div class="text-center m-4">
                <button type="submit" class="btn btn-success w-25 p-2">Envoyer</button>
            </div>
        </form>
    </main>
    
</body>
</html>
<script>
    const before = document.getElementById("nom");
    before.addEventListener('focus', function(){
        before.style.borderStyle = 'none';
    });

    document.getElementById("photo").addEventListener("click", function(){
        document.getElementById("photo_profil").click();
    });
</script>