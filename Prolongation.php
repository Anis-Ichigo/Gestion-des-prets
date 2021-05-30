<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Prolongation</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="menu">
            <div>
                <a href="Index.html"><img src="images/logo.jpg" alt="logo"></a>
                <b>Profil</b>
            </div>
            <div><a href="profil.php"><i class="fas fa-users"></i></a><b>Nouvelle réservation</b></div>
            <div><a href="reservation.php"><i class="far fa-plus-square"></i></a><b>Forum</b></div>
            <div><a href="FAQ.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.php"><i class="fas fi-rr-settings"></i></a><b>Valider une réservation</b></div>
            <div><a href="liste_RDV.php"><i class="far fa-check-square"></i></a><b>Suivi</b></div>
            <div><a href="suivi_prets.php"><i class="far fa-handshake"></i></a><b>Statistiques</b></div>
            <div><a href="Statistiques.html"><i class="far fi-rr-stats"></i></a></div>
        </div>
        <div class="contenu">

        <?php
        //$identifiant = $_SESSION['identifiant'];
        $identifiant = '22508753';

        $identifiantM = $_POST['IdentifiantMPR'];

        $res = mysqli_query($session, "SELECT *
            FROM materiel M, personne Pe, emprunt E
            WHERE e.IdentifiantM = m.IdentifiantM
            AND e.IdentifiantPe = Pe.IdentifiantPe
            AND pe.IdentifiantPe = '$identifiant'
            AND M.IdentifiantM = '$identifiantM';");
        while ($tab = mysqli_fetch_assoc($res)) {
        ?>
            <h2>Prolongation de la reservation</h2>

            <form method="POST" action="profil.php">
                <Table>
                    <TR>
                        <TH>
                            Numéro de l'emprunt
                        </TH>
                        <TH>
                            Numéro du materiel
                        </TH>
                        <TH>
                            Type de matériel
                        </TH>
                        <TH>
                            Date de retrait
                        </TH>
                        <TH>
                            Date de retour actuelle
                        </TH>

                    </TR>
                    <TR>
                        <TD>
                            <input type="text" class="form-control" autocomplete="off" name="IdentifiantEPR" value="<?php echo $tab['IdentifiantE'] ?>">
                        </TD>
                        <TD>
                            <input type="text" class="form-control" autocomplete="off" name="IdentifiantMPR" value="<?php echo $tab['IdentifiantM'] ?>">
                        </TD>
                        <TD>
                            <input type="text" class="form-control" autocomplete="off" name="CategorieMPR" value="<?php echo $tab['CategorieM'] ?> ">
                        </TD>
                        <TD>
                            <input type="text" class="form-control" autocomplete="off" name="DateRetourPR" value="<?php echo $tab['DateRetour'] ?>">
                        </TD>
                        <TD>
                            <input type="text" class="form-control" autocomplete="off" name="DateEmpruntPR" value="<?php echo $tab['DateEmprunt'] ?>">
                        </TD>
                    </TR>

                </Table>

                <Table>
                    <TR>
                        Veuillez indiquer la nouvelle date de retour souhaitée :
                    </tr>
                    <TR>
                        <input type="date" class="form-control" name="NewDateretour" autocomplete="off">
                    </TR>
                </table>
                <input type="submit" class="btn btn-primary" name="demander_prolongation" value="Valider">
            </form>
        <?php
        }
        ?>
        </div>
    </main>
</body>

</html>