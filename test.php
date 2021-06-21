<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");



if (isset($_POST['test'])) {
    echo "agzudazdoazhdi" . $_POST['Marque'];
  }
?>