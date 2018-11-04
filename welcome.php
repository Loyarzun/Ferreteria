<?php
include('session.php');
?>
<html>
   
   <head>
      <title>Bienvenido </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h2><a href = "transacciones.php">Transacciones</a></h2>
      <h3><a href = "logout.php">Cerrar Sersion</a></h3>
   </body>
   
</html>