<?php
	include("session.php");
	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
<style>


.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
</head>
<body>

<div class="icon-bar">
  <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="registration.php"><i class="fa fa-user"></i></a> //Colocar en cada doc
  <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="container">
  <div class="vertical-center">
  <img src="./images/logo.png" border="2" alt="logo" width="400" height="300">
  <br>
  <b><font size="+6">SISTEMA AMEF <br> Análisis del Modo y Efecto de Fallas</b></font>
  <br>
  
  </div>
</div>

</body>
</html> 