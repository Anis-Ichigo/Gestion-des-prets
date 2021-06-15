<?php require('decide-lang.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>CGU</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
  <main>
  <center>  <h1> <?php echo TXT_ACCUEIL_CGU;?> </h1></center>
    <h2> <?php echo CGU;?> </h2>
      <b> <?php echo CGU1;?> </b> <?php echo CGU2;?> </br>
      <b> <?php echo CGU3;?> </b> <?php echo CGU4;?> </br>
      <b> <?php echo CGU5;?> </b>  <?php echo CGU6;?></br>
      <b> <?php echo CGU7;?> </b>  <?php echo CGU8;?></br>
      <b> <?php echo CGU9;?> </b> <?php echo CGU10;?> </br>
        <?php echo CGU11;?>

    <form>
      <center>
        <input type = "button" value = "<?php echo TXT_RETOUR;?>"  onclick = "history.go(-1)">
      </center>
    </form>
  </main>
</body>
