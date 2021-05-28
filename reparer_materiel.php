<?php
session_start();

require('Connexion_BD.php');

$numero = '';
if(isset($_POST['reparer'])){
  $numero = $_POST['numero'];
}
$newetat = "Dispo";
$reparer = "UPDATE materiel SET EtatM = $newetat WHERE IdentifiantM = '?'";
if($stmt = mysqli_prepare($session, $reparer)){
  mysqli_stmt_bind_param($stmt, 'i', $numero);
  mysqli_stmt_execute($stmt);
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
