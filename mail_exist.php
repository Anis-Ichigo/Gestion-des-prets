<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");

function codestr(){
    $arr=array_merge(range('a','b'),range('A','B'),range('0','9'));
    shuffle($arr);
    $arr=array_flip($arr);
    $arr=array_rand($arr,6);
    $res='';
    foreach ($arr as $v){
        $res.=$v;
    }
    return $res;
}

$code=codestr();
?>

<!DOCTYPE html>
<html>

<head>
    <title>mail</title>
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
            <img alt="Logo UT1" class="img_logo" src="Bandeau.png" style="width: 100%; margin-top: 1%">


<?php
if(isset($_POST['envoyer'])){
    $user=$_POST["user"];

    $id_existe=("
                SELECT IdentifiantPe
                FROM personne
                WHERE IdentifiantPe= '$user'
                ");
    $result=mysqli_query($session, $id_existe);
    $nb_lignes= mysqli_num_rows($result);



    if ($nb_lignes > 0){

        $destinataire =$user ;
        $objet = "Votre nouveau mot de passe";
        $message = $code;
        $headers = "From: pret.responsable@ut-capitole.fr" . "\r\n" .
            "Reply-To: pret.responsable@ut-capitole.fr" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail("$destinataire", $objet, $message, $headers);

        $mdp=sha1($code);


        ?>



                    <form action="mail_confirmer.php" method="post">
                        <input type="hidden" name="mdp" value="<?php echo $mdp; ?>">
                        <input type="hidden" name="user" value="<?php echo $destinataire; ?>">
                        <table>

                            <tr>
                                <label for="code">Nouveau mot de passe</label>
                            </tr>
                            <br>
                            <tr>
                                <label for="code">(le code dans l'email)</label>
                            </tr>

                            <br>
                            <tr>
                                <input type="password"   name="mdp_nouveau" placeholder=" ******" >
                            </tr>

                        </table>
                        <br>

                        <button type="submit"  name="confirmer" style="font-size: 1.25em;">
                            Confirmer
                        </button>
                    </form>





            <?php
        }elseif ($nb_lignes == 0){
                echo "<h2 style='font-size: 1.5em'>Mauvais identifiant</h2><br>
                  <h4 style='font-size: 1.2em'>Veuillez saisir votre e-mail enregistrée.</h4><br>
                  <button><a href='oublie.php' style='font-size: 1.25em;'>Merci de recommencer.</a></button><br>
                    ";
                echo "<p style='font-size:1.3em'>Ou </p>
                     <form action='Page_Inscription.php' method='post' >
                        <button type='submit' name='creer_compte' class='compte' style='font-size: 1.25em;'>Créer un compte.</button>
                     </form>
                    ";
            ?>



        <?php

    }


}
?>

                </div>
            </div>
</div>

            <!-- partial -->
            <script  src="./script.js"></script>

</body>

</html>

