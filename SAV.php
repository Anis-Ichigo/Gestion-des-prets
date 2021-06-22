<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>

<!DOCTYPE html>
<html>

<head>
    <title>SAV</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
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
                            <a class="nav-link active" href="entretien.php"><i class=" fi-rr-computer"></i> Entretien
                                machine</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes
                                réservations</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
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
                <a class="nav-link " href="entretien.php">Mise a jour du parc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="RAZ.php">RAZ des machines </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">SAV</a>
            </li>
        </ul>

        <Table class="table table-striped table-hover">
            <TR>
                <th>
                    Numéro du materiel
                </th>
                <th>
                    Email
                </Th>
                <th>
                    Tel
                </Th>
                <th>
                    Appareil concerné
                </Th>
                <th>
                    Description du problème
                </Th>
                <th>

                </th>
            </TR>

            <?php
            $query_pb = "SELECT *
                        FROM materiel M, emprunt E, probleme P, personne pe
                        WHERE M.IdentifiantM = E.IdentifiantM
                        AND M.IdentifiantM = P.IdentifiantM
                        AND pe.IdentifiantPe = e.IdentifiantPe
                        AND pe.IdentifiantPe = p.IdentifiantPe
                        AND M.EtatM = 'Non Dispo'
                        AND P.Resolution LIKE 'Non résolu'";
            $result_pb = mysqli_query($session, $query_pb);
            if ($result_pb != NULL) {
                while ($ligne = mysqli_fetch_array($result_pb)) {
            ?>
                    <form action="reparer_materiel.php" method="POST">

                        <TR>
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
                                <input type="submit" class="btn btn-primary btn-sm" name="reparation" value="Problème résolu">
                                <input type="submit" class="btn btn-secondary btn-sm" name="transferer" value="Transférer">

                            </td>
                        </TR>
                    </form>

            <?php
                }
            }
            ?>

        </Table>

    </div>


</body>

</html>