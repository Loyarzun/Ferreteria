<?php
include('session.php');
?>
<html>
   
   <head>
      <title>Bienvenido </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Cerrar Sersion</a></h2>
   </body>
   
</html>