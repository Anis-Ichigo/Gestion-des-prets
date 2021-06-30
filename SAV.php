<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css" type="text/css">
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    $identifiant = $_SESSION['identifiant'];
    $role_pe = "SELECT * FROM personne WHERE IdentifiantPe = '$identifiant'";
    $resultat = mysqli_query($session, $role_pe);
    foreach ($resultat as $row) {
        $role_user = $row["RolePe"];
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <img src="Bandeau.png" href="https://www.ut-capitole.fr/" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto">

                    <?php
                    if ($role_user == "Responsable") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> Liste des
                                rendez-vous</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable"><i class=" fi-rr-add"></i>
                                Nouvelle réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes
                                réservations</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="Statistiques.html"><i class=" fi-rr-stats"></i> Statistiques</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
                        </li>
                    <?php
                    } else if ($role_user == "Vacataire") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" style="background-color: none; color:black" href="entretien.php"><i class=" fi-rr-computer"></i> <?php echo TXT_ACCUEIL_ENTRETIEN;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE;?></a>
                        </li>
                    <?php
                    } else if ($role_user == "Emprunteur") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="#"><i class=" fi-rr-add"></i> Nouvelle
                                réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="#"><i class="fi-rr-file-check"></i> Mes réservations</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link  active" href="#"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="#"><i class=" fi-rr-interrogation"></i> FAQ</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="#"><i class=" fi-rr-settings"></i> Réglages</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <span class="navbar-text">
                    <div class="mycharts-heading">
                        <div class="element-head">
                            <?php echo $_SESSION['nom']; ?>
                            <a href="deconnexion.php" type="button" class="btn btn-default"><i class="fi-rr-sign-out"></i></a>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </nav>



    <div class="contenu">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="entretien.php"><?php echo TXT_MAJ_PARC;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="RAZ.php"><?php echo TXT_RAZ;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><?php echo TXT_SAV;?></a>
            </li>
        </ul>


        <Table class="table table-striped table-hover">
            <TR>
                <th>
                <?php echo TXT_NUM_MAT;?>
                </th>
                <th>
                <?php echo TXT_EMAIL;?> 
                </Th>
                <th>
                <?php echo TXT_TEL;?> 
                </Th>
                <th>
                <?php echo TXT_TYPEMAT;?> 
                </Th>
                <th>
                <?php echo TXT_DESCRIPTION;?>   
                </Th>
                <th>

                </th>
            </TR>

            <?php
            $query_pb = "SELECT *
                            FROM materiel M, probleme P, personne pe
                            WHERE M.IdentifiantM = P.IdentifiantM
                            AND pe.IdentifiantPe = p.IdentifiantPe
                            AND M.EtatM = 'Non Dispo'
                            AND P.Resolution LIKE 'Non résolu'";
            $result_pb = mysqli_query($session, $query_pb);
            if ($result_pb != NULL) {
                while ($ligne = mysqli_fetch_array($result_pb)) {
            ?>
                    <form action="" method="POST">

                        <TR>
                            <input type="hidden" name="IdentifiantP" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantP'] ?>" readonly>
                            <input type="hidden" name="nom" class="form-control-plaintext" value="<?php echo $ligne['NomPe'] ?>" readonly>
                            <input type="hidden" name="prenom" class="form-control-plaintext" value="<?php echo $ligne['PrenomPe'] ?>" readonly>

                            <td>
                                <input type="text" name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>" readonly>
                            </td>
                            <TD>
                                <input type="text" name="mail" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantPe'] ?>" readonly>
                            </TD>
                            <TD>
                                <input type="text" name="telephone" class="form-control-plaintext" value="<?php echo $ligne['TelPe'] ?>" readonly>

                            </TD>
                            <TD>
                                <input type="text" name="categorie" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>" readonly>

                            </TD>
                            <TD>
                                <input type="text" name="probleme" class="form-control-plaintext" value="<?php echo $ligne['Description'] ?>" readonly>
                            </TD>
                            <td>
                                <input type="submit" class="btn btn-primary btn-sm" name="repondre" value="<?php echo TXT_REPONDRE; ?>">
                                <input type="submit" class="btn btn-secondary btn-sm" name="transferer" value="<?php echo TXT_TRANSFERER;?>">
                            </td>
                        </TR>
                    </form>

            <?php
                }
            }
            ?>

        </Table>

    </div>

    <?php

    if (isset($_POST['transferer'])) {
        $identifiantM = $_POST['numero'];
        $identifiantP = $_POST['IdentifiantP'];

        $transferer = "UPDATE materiel SET EtatM = 'DSI' WHERE IdentifiantM = '$identifiantM'";
        $result = mysqli_query($session, $transferer);
        $transfer = "UPDATE probleme SET Resolution = 'Transféré' WHERE IdentifiantP = '$identifiantP'";
        $result_transfer = mysqli_query($session, $transfer);
        //header('Location: SAV.php');


        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $description = $_POST['probleme'];


        $destinataire = $_POST["IdentifiantPe"];
        $objet = "Remise du matériel pour panne";
        $message = "Veuillez prendre un RDV pour effectuer un nouvel emprunt et pour ramener le matériel deffectueux";
        $headers = 'From: vacataire' . "\r\n" .
            'Reply-To: vacataire' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail("$destinataire", $objet, $message, $headers);


        $destinataire = "responsable@ut-capitole.fr";
        $objet = "Remise du matériel pour panne";
        $message = "Le matériel '$identifiantM', emprunté par '$prenom' ' ' '$nom' doit être envoyé à la DSI pour réparation. Le problème est le suivant : '$description'";
        $headers = 'From: vacataire' . "\r\n" .
            'Reply-To: vacataire' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail("$destinataire", $objet, $message, $headers);

    ?>
        <script type="text/javascript">
            document.location.href = 'SAV.php';
        </script>
    <?php
    }

    if (isset($_POST['repondre'])) {

    ?>

        <?php
        ?>
        <form action="" method="POST">
            <input type="hidden" name="numero" class="form-control-plaintext" value="<?php echo $_POST['numero'] ?>" readonly>

            <div class="modal fade" id="alerte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo "Répondre au problème"; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label for="staticEmail" class="col col-form-label"><?php echo "De"; ?> : </label>
                                <div class="col">
                                    <input type="text" class="form-control-plaintext" name="expediteur" value="<?php echo $identifiant; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col col-form-label"><?php echo "Destinataire"; ?> : </label>
                                <div class="col">
                                    <input type="text" class="form-control-plaintext" name="IdentifiantPe" value="<?php echo $_POST['mail']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="titre" autocomplete="off" placeholder=" " required>
                                <label for="floatingInput"><?php echo TXT_TITRE; ?></label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="floatingTextarea" style="height: 200px" name="description" cols="60" rows="10" autocomplete="off" placeholder=" " required></textarea>
                                <label for="floatingTextarea"><?php echo TXT_DESCRIPTION; ?></label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo TXT_RETOUR; ?>">
                            <input type="submit" class="btn btn-primary" name="envoyer_reponse_probleme" value="<?php echo TXT_ENVOYER; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            echo "<script>
    $(window).load(function() {
        $('#alerte').modal('show');
    });
</script>";

            ?>
        </form>
    <?php
    }

    if (isset($_POST['envoyer_reponse_probleme'])) {
        $resolution = "Problème résolu";
        $identifiantM = $_POST['numero'];
        $date_reparation = strftime('%Y-%m-%d');
        $reparer = "UPDATE probleme SET Resolution = '$resolution', DateResolution = '$date_reparation' WHERE IdentifiantM = '$identifiantM'";
        $result = mysqli_query($session, $reparer);

        $destinataire = $_POST['IdentifiantPe'];
        $objet = $_POST['titre'];
        $message = $_POST['description'];
        $headers = "From: $identifiant" . "\r\n" .
            "Reply-To: $identifiant" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail("$destinataire", $objet, $message, $headers);

    ?>
        <script type="text/javascript">
            document.location.href = 'SAV.php';
        </script>
    <?php
    }

    ?>


</body>

</html>