<?php

 $idioma=$_GET['var_idioma'];
 echo $idioma;

 if ($idioma == 2)
{
        include('idiomas/eng.php');
}
else
{
    include('idiomas/esp.php');
}

?>


<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions" lang="es">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Polideportivo, Polideportivo plata, deportes, alberca, natación">
  <meta name="keywords" content="deportes, alberca, polideportivo, upp, pachuca">
  <meta name="author" content="David Luna">

  <title>UPP - POLIDEPORTIVO PLATA</title>

  <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="./imu/prettyPhoto.css" rel="stylesheet">
  <!-- iconos -->
  <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="./imu/animate.css" rel="stylesheet">
  <link href="./imu/main.css" rel="stylesheet">
  <link href="./imu/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="./images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/apple-touch-icon-144-precomposed.fw.png">

  <!-- Estilo SEP HIDALGO -->
  <link href="./seph/style.css" rel="stylesheet">

</head>
<!--/head-->

<body>

  <!-- Logos e imagen de hidalgo -->
  <?php include ('./seph/hf/header.html'); ?>

  <!-- Menu principal superior -->
  <?php include ('./coreFRONT/contenido.html'); ?>

  <!-- footer de gobierno del estado -->
  <?php include ('./seph/hf/footer.html'); ?>
  


  <script type="text/javascript" src="./imu/jquery_004.js"></script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="./imu/smoothscroll.js"></script>
  <script type="text/javascript" src="./imu/jquery_002.js"></script>
  <script type="text/javascript" src="./jquery/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="./imu/jquery_003.js"></script>
  <script type="text/javascript" src="./imu/main.js"></script>

</body>

</html>
