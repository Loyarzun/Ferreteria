<?php
/* [CONFIGURATION] */
require("config.php");
/* [CONNECT TO DB] */
$pdo = new PDO(
	"mysql:host=$host;dbname=$dbname;charset=$charset", 
	$user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
	]
);
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
	header.container{ background:#d32213; }
	footer.container{ background:#eaeaea; }
	header.container, footer.container{ padding:20px; }
	#products img{ max-width:100%; }
	#alert, #cart{ display:none; }
	</style>
</head>
<body>
	<!-- [ALERT] -->
	<div class="alert alert-success" id="alert"></div>

	<!-- [HEADER SECTION] -->
	<header class="container"><div class="row"><div class="col">
		Ferreteria Prat <span onclick="toggleCart();">[Carro]</span>
	</div></div>
        <!--<div class="row"><div class="col">                
                <span onclick="anadir();">[Añadir Producto]</span>
        </div></div> -->
        </header>

	<!-- [PRODUCTS] -->	
	<div id="products" class="container"><div class="row"><?php
	/* [GRAB ALL THE PRODUCTS] */
	// 3 PRODUCTS IN A ROW
	$perrow = 3; $now = 0;
	$stmt = $pdo->query('SELECT * FROM `products`');
	while ($row = $stmt->fetch()){ ?>
		<div class="col-4">
			<img src="images/<?=$row['product_image']?>"/>
			<h3><?=$row['product_name']?></h3>
			<div>$<?=$row['product_price']?></div>
			<div><?=$row['product_description']?></div>
			<div class="btn btn-success" onclick="addToCart(<?=$row['product_id']?>);">Agregar al carro</div>
                        <!-- if(isset($_SESSION['adminid'])){ 
                        <div class="btn btn-success" onclick="EditarProducto(<?=$row['product_id']?>);">Eliminar producto</div>
                        } -->
		</div>
		<?php
		// ROW BREAK
		$now++;
		if ($now==3) {
			echo '</div><div class="row">';
			$now = 0;
		}
	} ?></div></div>

	<!-- [CART] -->
	<div class="container"><div class="row"><div class="col" id="cart"></div></div>
            
        <!-- [QUERY] -->
	<div class="container"><div class="row"><div class="col" id="formulario"></div></div>
	<!-- [FOOTER] -->
	<!--<footer class="container"><div class="row"><div class="col">
		&copy; Copyright My Awesome Site. All rights reserved.
	</div></div></footer> -->
</body>
</html>