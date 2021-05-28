<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");


if(isset($_POST['suppression'])){
$newetat = "Dispo";
$identifiantM = $_POST['numero'];
$reparer = "UPDATE materiel SET EtatM = $newetat WHERE IdentifiantM = $identifiantM";
$result = mysqli_query($session, $reparer);
}

if(isset($_POST['raz'])){
$newetat = "Dispo";
$identifiantM = $_POST['numero'];
$reparer = "UPDATE materiel SET EtatM = $newetat WHERE IdentifiantM = $identifiantM";
$result = mysqli_query($session, $reparer);
}
header('Location: RAZ.php');
 ?>


 <?php
     $numero = $_POST['numero'];
     function cacherButton($session, $numero){
     $query = "SELECT M.IdentifiantM, E.DateEmprunt,E.DateRetour, M.CategorieM, M.EtatM, P.NomP
               FROM materiel M, emprunt E, probleme P
               WHERE M.IdentifiantM = E.IdentifiantM
               AND M.IdentifiantM = P.IdentifiantM
               AND M.EtatM = 'Non dispo'
               AND P.Resolution = 'Non résolu'";
       $result = mysqli_query($session, $query);
     }
   ?>
   <script>
    function montrerbutton(cacherButton) {
     if (false == $(cacherButton).is(':visible')) {
         document.getElementById('pb').style.display=block;
         }
           else {
         document.getElementById('pb').style.display=none;
           }
         }


   </script>
