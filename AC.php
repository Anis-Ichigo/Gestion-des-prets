<?php 
require('decide-lang.php'); 
if (!$_SESSION['identifiant']) {
    header("Location: Index.html");
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title> Avis de confidentialité </title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
  <main>
      <?php echo AC;?>
    <form>
      <center>
        <input type = "button" value = "<?php echo TXT_RETOUR;?>"  onclick = "history.go(-1)">
      </center>
    </form>
  </main>
</body>
