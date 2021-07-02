<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf-8");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Statistiques</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="menu.css" />

    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <?php
    $identifiant = $_SESSION['identifiant'];

    $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = NULL WHERE IdentifiantPe = '$identifiant'");
    $param_categorie = mysqli_query($session, "UPDATE personne SET categorie = '' WHERE IdentifiantPe = '$identifiant'");
    $suivant = mysqli_query($session, "UPDATE personne SET semaine = 0 WHERE IdentifiantPe = '$identifiant'");

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
                        <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> <?php echo LISTE_RDV;?></a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET;?> </a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link" href="Statistiques.php" style="background-color: none; color: black"><i class=" fi-rr-stats"></i> <?php echo STATS;?></a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?> </a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link" href="mes_reservations.php" ><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
                    </li>
                    <li class="nav-item  text-center">
                        <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
                    </li>
                    <?php
                    } else if ($role_user == "Vacataire") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="entretien.php"><i class=" fi-rr-interrogation"></i> Entretien machine</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link  active" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
                        </li>
                    <?php
                    } else if ($role_user == "Emprunteur") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link  active" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="FAQ.php"><i class=" fi-rr-interrogation"></i> FAQ</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
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


    <main>
        <div style="width:45%; text-align:center; margin-right:auto; margin-left:auto;">
            <canvas id="graph" class="chartjs-render-monitor"></canvas>
        </div>
    </main>

    <main>
        <div style="width:45%; text-align:center; margin-right:auto; margin-left:auto;">
            <canvas id="graphe2" class="chartjs-render-monitor"></canvas>
        </div>
    </main>


    <?php
    $stat1 = "SELECT SUM(DATEDIFF(DateRetour, DateEmprunt)) as 'Nombre de jour',materiel.CategorieM as 'categorie' FROM emprunt, materiel WHERE emprunt.IdentifiantM = materiel.IdentifiantM  GROUP BY materiel.CategorieM";
    $resultat_stat1 = mysqli_query($session, $stat1);
    $date = array();
    $categorie = array();
    foreach ($resultat_stat1 as $row) {
        array_push($date, $row['Nombre de jour']);
        array_push($categorie, $row['categorie']);
    }

    ?>

    <script>
        var lb = <?php echo json_encode($date); ?>;
        var dt = <?php echo json_encode($categorie); ?>;


        var ctx = document.getElementById('graph').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: dt,
                datasets: [{
                    data: lb,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(15, 69, 98, 0.2)',
                        'rgba(54, 162, 235, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(15, 69, 98, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "Nombre de jours de réservation par type de matériel"
                    }
                },

                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <form action="" method="POST">
        <label style="width: 10%; margin-right:auto; margin-left:auto; text-align:center; display:block" for="">Type de matériel</label>
        <SELECT size="1" style="width: 10%; margin-right:auto; margin-left:auto;" name="type" onchange="nouvelleCategorie()" id="categorie" class="form-select mb-3">
            <?php
            $categories = ("SELECT * FROM materiel GROUP BY CategorieM");
            $result_categories = mysqli_query($session, $categories);
            foreach ($result_categories as $row) {
            ?>
                <OPTION><?php echo $row['CategorieM']; ?></OPTION>
            <?php
            }
            ?>
        </SELECT>
        <input type="submit" style="width: 10%; margin-right:auto; margin-left:auto; text-align:center; display:block" name="valider" value="Valider">
    </form>

    <script>
        function nouvelleCategorie() {
            return document.getElementById('categorie').value;
        }
    </script>

    <?php
    $categorie = "Ordinateur";
    if (isset($_POST['valider'])) {
        $categorie = $_POST['type'];
    }

    $stat1 = "SELECT COUNT(materiel.IdentifiantM) as 'nombre',  ( SELECT CASE MONTH(emprunt.DateEmprunt)
    WHEN 1 THEN 'janvier'
    WHEN 2 THEN 'février'
    WHEN 3 THEN 'mars'
    WHEN 4 THEN 'avril'
    WHEN 5 THEN 'mai'
    WHEN 6 THEN 'juin'
    WHEN 7 THEN 'juillet'
    WHEN 8 THEN 'août'
    WHEN 9 THEN 'septembre'
    WHEN 10 THEN 'octobre'
    WHEN 11 THEN 'novembre'
    ELSE 'décembre'
END)  as 'mois', materiel.CategorieM as 'categorie'
FROM emprunt, materiel
WHERE emprunt.IdentifiantM = materiel.IdentifiantM
AND materiel.CategorieM = '$categorie'
GROUP BY materiel.CategorieM, month(emprunt.DateEmprunt)";


    $resultat_stat1 = mysqli_query($session, $stat1);
    $date = array();
    $categorie = array();
    $mois = array();
    foreach ($resultat_stat1 as $row) {
        array_push($date, $row['nombre']);
        array_push($categorie, $row['categorie']);
        array_push($mois, $row['mois']);
    }

    ?>

    <script>
        var lb = <?php echo json_encode($date); ?>;
        var dt = <?php echo json_encode($categorie); ?>;
        var dt_mois = <?php echo json_encode($mois); ?>;



        var ctx = document.getElementById('graphe2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: dt_mois,
                datasets: [{
                    data: lb,
                    label: 'Nb matériel réservé pour ce mois ',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(15, 69, 98, 0.2)',
                        'rgba(54, 162, 235, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(15, 69, 98, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1

                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "Nombre de réservation par mois pour le matériel sélectionné "
                    }
                },

                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <?php
      $stat = "SELECT AVG(TIMESTAMPDIFF(DAY, DateProbleme, DateResolution)) as 'moyenne' FROM probleme, materiel WHERE probleme.IdentifiantM = materiel.IdentifiantM AND materiel.EtatM != 'DSI'";
      $resultat = mysqli_query($session, $stat);
      $tps = mysqli_fetch_array($resultat);
     ?>

     <main>
         <div style="width:45%; text-align:center; margin-right:auto; margin-left:auto;">
           <div><p>Temps moyen de résolution des problèmes par le vacataire (en jours) :</p></div>
           <div><?php echo $tps['moyenne']?></div>
         </div>
     </main>

<?php
     $stat2 ="SELECT AVG(DATEDIFF(now(), DateRetour)) as 'moyenne2' FROM emprunt, materiel WHERE emprunt.IdentifiantM = materiel.IdentifiantM AND materiel.EtatM = 'Non dispo' AND emprunt.EtatE = 'Rendu'";
     $resultat_2 = mysqli_query($session, $stat2);
     $moyenne = mysqli_fetch_array($resultat_2);
?>

<main>
    <div style="width:45%; text-align:center; margin-right:auto; margin-left:auto;">
      <div><p>Temps moyen de remise en service RAZ (en jours) :</p></div>
      <div><?php echo $moyenne['moyenne2']?></div>
    </div>
</main>

<main>
    <div style="width:45%; text-align:center; margin-right:auto; margin-left:auto;">
        <canvas id="graphe3" class="chartjs-render-monitor"></canvas>
    </div>
</main>

<form action="" method="POST">
    <label style="width: 10%; margin-right:auto; margin-left:auto; text-align:center; display:block" for="">Type de matériel</label>
    <SELECT size="1" style="width: 10%; margin-right:auto; margin-left:auto;" name="type2" onchange="nouvelleCategorie()" id="categorie" class="form-select mb-3">
        <?php
        $categories = ("SELECT * FROM materiel GROUP BY CategorieM");
        $result_categories = mysqli_query($session, $categories);
        foreach ($result_categories as $row) {
        ?>
            <OPTION><?php echo $row['CategorieM']; ?></OPTION>
        <?php
        }
        ?>
    </SELECT>
    <input type="submit" style="width: 10%; margin-right:auto; margin-left:auto; text-align:center; display:block" name="valider2" value="Valider">
</form>

<script>
    function nouvelleCategorie() {
        return document.getElementById('categorie').value;
    }
</script>

<?php
$categorie = "Ordinateur";
if (isset($_POST['valider2'])) {
    $categorie = $_POST['type2'];
}

  $stat3 = "SELECT WEEKOFYEAR(emprunt.DateEmprunt) as 'semaine', COUNT(materiel.IdentifiantM) as 'Nombre', materiel.CategorieM as 'categorie' FROM emprunt, materiel WHERE emprunt.IdentifiantM = materiel.IdentifiantM AND materiel.CategorieM = '$categorie' GROUP BY WEEKOFYEAR(emprunt.DateEmprunt), materiel.CategorieM ";
  $resultat3 = mysqli_query($session, $stat3);

  $semaine = array();
  $jour =  array();
  $categorie = array();

  foreach ($resultat3 as $row) {
      array_push($semaine, $row['semaine']);
      array_push($jour, $row['Nombre']);
      array_push($categorie, $row['categorie']);
  }

?>

<script>
    var lb = <?php echo json_encode($jour); ?>;
    var dt = <?php echo json_encode($categorie); ?>;
    var dt_semaine = <?php echo json_encode($semaine); ?>;



    var ctx = document.getElementById('graphe3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',

        data: {
            labels: dt_semaine,
            datasets: [{
                data: lb,
                label: 'Nombre de matériel emprunté cette semaine',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(15, 69, 98, 0.2)',
                    'rgba(54, 162, 235, 0.2)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(15, 69, 98, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1

            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Nombre de réservation par semaine pour le matériel sélectionné "
                }
            },

            scales: {
                y: {
                    beginAtZero: true
                }
            }
          }
      });



  </script>
</body>

</html>
