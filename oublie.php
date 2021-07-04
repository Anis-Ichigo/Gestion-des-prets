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
    <link rel="stylesheet" href="connexion.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="main">

    <div class="menu" >
        <div class="form-group" align="center" >
            <img alt="Logo UT1" class="img_logo" src="Bandeau.png" style="width: 100%; margin-top: 1%;">
            <form action="mail_exist.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="identifiant">IDENTIFIANT</label>
                        </td>
                        <td>
                            <input type="email" class="form-control" id="identifiant" name="user" placeholder=" xxx@ut-capitole.fr" required >
                        </td>
                    </tr>
                </table>

                <button type="submit" class="btn btn-primary mb-3"  name="envoyer" style="font-size: 1.25em;">
                    Envoyer
                </button>
                <br>Ou<br>
                <button><a href='Index.html' style='font-size: 1.25em;'>Connecter-vous</a></button>

            </form>


    </div>
</div>
<!-- partial -->
<script  src="./script.js"></script>



</body>

</html>