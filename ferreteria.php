<?php
/* [CONFIGURATION] */
require("config.php");

/* [CONNECT TO DB] */
$db = mysqli_connect($host ,$user,$password,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
<title>Ferreteria</title>
<meta name="description" content="Cart demo">
<meta name="author" content="Code Boxx">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- [BOOTSTRAP + JQUERY] -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<!-- [JS] -->
<script src="cart.js"></script>

<!-- [STYLE] -->
<style>
header.-f{ background:#d32213; }
footer.container{ background:#eaeaea; }
header.container, footer.container{ padding:20px; }
#products img{ max-width:100%; }
#alert, #cart{ display:none; }

</style>
<link rel="stylessheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylessheet" href="ferreteria.css">
</head>
<body>

<div class="collapse bg-inverse" id="navbarHeader">
<div class="container">
<div class="row">
<div class="col-sm-8 py-4">
<h4 class="text-white">About</h4>
<p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
</div>
<div class="col-sm-4 py-4">
<h4 class="text-white">Contact</h4>
<ul class="list-unstyled">
<li><a href="#" class="text-white">Follow on Twitter</a></li>
<li><a href="#" class="text-white">Like on Facebook</a></li>
<li><a href="#" class="text-white">Email me</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="navbar navbar-inverse bg-inverse">
<div class="container d-flex justify-content-between">
<a href="#" class="navbar-brand">Ferreteria Prat</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>
</div>

<section class="jumbotron text-center">
<div class="container">
<h1 class="jumbotron-heading">Ferreteria Prat</h1>
<p class="lead text-muted">Somos una empresa familiar con más de 32 años de experiencia en el rubro Ferretero en la ciudad de Antofagasta, con un amplio conocimiento del medio, conservando la atención de la Ferretería tradicional de antaño, con modernos procesos acordes a nuestros tiempos, lo que hasta la fecha nos hace mantener altos estándares en atención personalizada a nuestros cliente.</p>
<img src = "images//jmm2ferrete.jpg"/>
</div>
</section>

<div class="album text-muted">
<div class="container">

<div class="row">
<?php

$stmt = $db->query('SELECT * FROM `products`');
while ($row = $stmt->fetch_assoc()){ ?>
			<div class="card">
				<img src="images/<?=$row['product_image']?>"/>
				<h3><?=$row['product_name']?></h3>
				<div>$<?=$row['product_price']?></div>
				<div><?=$row['product_description']?></div>
				<div class="btn btn-success" onclick="addToCart(<?=$row['product_id']?>);">Agregar al carro</div>
			</div>
		<?php
		} ?></div>

      </div>
    </div>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

</body>
</html>