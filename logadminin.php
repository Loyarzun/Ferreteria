
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylessheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <title>Inicio de Sesion de Admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method ='post' action="validateadmin.php">
        <h2 class="form-signin-heading">Por Favor Inicie Sesion</h2>
        <label for="inputEmail" class="sr-only">Ingrese su email</label>
        <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>



<!--============================================================= 



<!DOCTYPE html>
<html>
<head>
<title>Iniciar Sesion</title>
<link type="text/css" rel="stylesheet" href="css.css">

</head>
<body>
<form method ='post' action="validateadmin.php">
<pre>
Ingrese su Mail:        <input type="text" name="mail">

Ingrese su Clave:     <input type="password" name="pass">
<br><input type="submit" value="Iniciar Sesion"></br>
</pre>
</form>

</body>
</html>
 -->