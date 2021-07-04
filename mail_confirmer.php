<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="connexion.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="main">

    <div class="menu" >
        <div class="form-group" align="center" >
            <img alt="Logo UT1" class="img_logo" src="Bandeau.png" style="width: 100%; margin-top: 1%;">
            <?php
                $user=$_POST['user'];
                $mdp=$_POST['mdp'];
                $mdp_saisir=sha1($_POST['mdp_nouveau']);

                    if (isset($_POST['confirmer'])){
                        if($mdp_saisir== $mdp ){

                            $query = "UPDATE personne SET Mot_de_passePe = ? WHERE IdentifiantPe = '$user'";
                            $result = mysqli_prepare($session, $query);
                            mysqli_stmt_bind_param($result, 's', $mdp);
                            mysqli_stmt_execute($result);

                            ?>
                            <button><a href='Index.html' style='font-size: 1.25em;'>Connecter-vous</a></button>
            <?php


                        }else{
                            echo "<h2 style='font-size: 1.5em'>Mauvais code</h2><br>
                  
                  <button><a href='oublie.php' style='font-size: 1.25em;'>Merci de recommencer.</a></button><br>
                    ";
                            echo "<p style='font-size:1.3em'>Ou </p>
                     <form action='Page_Inscription.php' method='post' >
                        <button type='submit' name='creer_compte' class='compte' style='font-size: 1.25em;'>Créer un compte.</button>
                     </form>
                    ";
        }
                    }
    ?>
        </div>
    </div>
</div>

</body>
</html>