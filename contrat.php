<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contrat</title>
</head>

<body>

    <img src="miage.jpg" alt="" style="width: 15%; margin: 2% 2% 2% 7%">
    <?php
    $informations = "SELECT MAX(emprunt.IdentifiantE) AS 'DernierContrat', materiel.IdentifiantM AS 'IdentifiantM', materiel.CategorieM AS 'CategorieM', emprunt.DateRetour AS 'DateRetour', modele.IdentifiantMo AS 'IdentifiantMo', modele.Marque AS 'Marque', emprunt.DateEmprunt AS 'DateEmprunt', emprunt.IdentifiantE AS 'IdentifiantE', personne.PrenomPe AS 'PrenomPe', personne.NomPe AS 'NomPe'
    FROM personne, materiel, emprunt, modele
    WHERE emprunt.IdentifiantM = materiel.IdentifiantM
    AND emprunt.IdentifiantPe = personne.IdentifiantPe
    AND materiel.IdentifiantMo = modele.IdentifiantMo
    AND emprunt.Contrat LIKE 'a signer'
    GROUP BY emprunt.IdentifiantE, materiel.IdentifiantM, materiel.CategorieM, emprunt.DateRetour, modele.IdentifiantMo, modele.Marque, emprunt.DateEmprunt, emprunt.IdentifiantE, personne.PrenomPe, personne.NomPe";
    $result = mysqli_query($session, $informations);

    foreach ($result as $row) {
        $IdentifiantM = $row['IdentifiantM'];
        $CategorieM = $row['CategorieM'];
        $date_retour = strftime('%d/%m/%Y', strtotime($row['DateRetour']));;
        $modele = $row['IdentifiantMo'];
        $marque = $row['Marque'];
        $date_emprunt = strftime('%d/%m/%Y', strtotime($row['DateEmprunt']));
        $IdentifiantE = $row['IdentifiantE'];
    }
    ?>

    <p style="margin: 1% 7% 5% 7%; font-size: 1.10em; text-align: justify" >
        Je soussigné(e) <b><?php echo $_SESSION['nom']?></b> , déclare recevoir <b><?php if ($CategorieM == "Ordinateur") { ?>
                                                                                  un<?php echo $CategorieM; ?>
                                                                                  <?php } else{ ?>
                                                                                  une <?php echo $CategorieM; ?>
                                                                                  <?php }  ?>
        </b> N° <b><?php echo $IdentifiantM ?></b> Je m’engage à restituer le matériel à tout moment si le responsable de la
        formation en a besoin ou avant le<b> <?php echo $date_retour ?></b> dans le pire des cas.<br><br>
        Le prêt comprend : <br>
        <?php if ($CategorieM == "Ordinateur") { ?>
                            Un <b><?php echo $CategorieM.' '.$modele ?></b> de la marque : <b><?php echo $marque ?></b> et une sacoche.

                            <?php } else{ ?>
                            Une <b><?php echo $CategorieM.' '.$modele ?></b> de la marque : <b><?php echo $marque ?></b> et une sacoche.
                            <?php }  ?>


    </p>


    <form action="profil.php" method="POST" style=" font-size: 1.10em ;text-align: justify">
        <input type="hidden" name="IdentifiantE" value="<?php echo $IdentifiantE ?>" readonly>
        <div class="float-end" style="margin: 1% 3% 5% 5%" >
            <input type="text"  name="date_contrat" size="20" class="form-control-plaintext" value="<?php echo  "Fait le " . strftime('%d/%m/%Y', strtotime('now')) ?>" readonly>
        </div>
        <br><br><br>
        <div class="form-check" style="margin: 1% 7% 0% 7% ;">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">
                Je certifie sur l'honneur être d'accord avec le présent contrat.
            </label>
        </div>
        <div class="form-check mb-3" style="margin: 0% 7% 5% 7% ;">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
            <label class="form-check-label" for="flexCheckChecked">
                En cochant cette case, je consent à l'utilisation de ma signature électronique, je certifie qu'elle est valide et a le même effet qu'une signature écrite sur une copie
                papier de ce document.
            </label>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto mb-5">
        <input type="submit" class="btn btn-primary" value="Valider" name="valider_contrat">
        </div>
    </form>



</body>

</html>
