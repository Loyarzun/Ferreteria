function hideMessage(){
// hideMessage() : hides the system message bar

	$('#alert').hide().html("");
}

function addToCart(id){
// addToCart() : add an item to the cart
// PARAM id : product id

	$.ajax({
		url: "ajax-cart.php",
		method: "POST",
		data: { 
			product_id:id,
			request:"add"
		}
	}).done(function() {
		$('#alert').html("Producto Agregado").show();
		setTimeout(hideMessage, 2000);
	});
}

function toggleCart(){
// toggleCart() : show/hide the cart

	var cart = $('#cart'),
		products = $('#products');
	// CART IS OPEN
	// HIDE CART, SHOW PRODUCTS
	if (cart.is(":visible")) {
		cart.hide();
		products.show();
	}

	// CART IS CLOSED
	// HIDE PRODUCTS, SHOW CART
	else {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			dataType: "html",
			data: { 
				request:"show"
			}
		}).done(function(res) {
			products.hide();
			cart.html(res).show();
		});
	}
}

function qtyCart(id){
// qtyCart() : change product quantity
// PARAM id : product id

	var qty = parseInt($('#qty_'+id).val());
	if ($.isNumeric(qty)) {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request:"qty",
				product_id:id,
				qty:qty
			}
		}).done(function(res) {
			$('#alert').html("Quantity changed").show();
			setTimeout(hideMessage, 2000);
			$('#cart').hide();
			toggleCart();
		});
	} else {
		alert("Please enter a valid number");
	}
}


function cartCheckout(){
// cartCheckout() : process checkout

	// GET CUSTOMER DETAILS
	var name = $('#co_name').val(),
	    email = $('#co_email').val(),
		err = "";

	// FORM CHECK
	if (name=="") { err += "Please enter your name\n"; }
	if (email=="") { err += "Please enter your email\n"; }
	if (err=="") {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request : "checkout",
				name : name,
				email : email
			}
		}).done(function(res) {
			$('#cart').html("THANK YOU! We have received your order");
			// OR YOU CAN REDIRECT TO A THANK YOU PAGE
			// window.location="http://site.com/thank-you.php";
		});
	} else {
		alert(err);
	}
}

function EditarProducto(id){
    $.ajax({
		url: "ajax-cart.php",
		method: "POST",
		data: { 
			product_id:id,
			request:"editar"
		}
	}).done(function() {
		$('#alert').html("Producto eliminado").show();
		setTimeout(hideMessage, 10000);
	});
}

function anadir(){
	// toggleCart() : show/hide the cart

		var formulario = $('#formulario'),
			products = $('#products');
		// CART IS OPEN
		// HIDE CART, SHOW PRODUCTS
		if (formulario.is(":visible")) {
			formulario.hide();
			products.show();
		}

		// CART IS CLOSED
		// HIDE PRODUCTS, SHOW CART
		else {
			$.ajax({
				url: "ajax-cart.php",
				method: "POST",
				dataType: "html",
				data: { 
					request:"anadir"
				}
			}).done(function(res) {
				products.hide();
				formulario.html(res).show();
			});
		}
	}

function agregar(){
// cartCheckout() : process checkout

	// GET CUSTOMER DETAILS
	var name = $('#prod_name').val(),
	    desc = $('#prod_desc').val(),
            price = $('#prod_precio').val(),
		err = "";

	// FORM CHECK
	if (name=="") { err += "Favor ingresar nombre\n"; }
	if (desc=="") { err += "Favor agregar descripcion\n"; }
        if (price=="") { err += "Favor agregar precio\n"; }
	if (err=="") {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request : "agregarprod",
				name : name,
				desc : desc,
                                price : price
			}
		}).done(function(res) {
			$('#formulario').html("Producto creado");
			// OR YOU CAN REDIRECT TO A THANK YOU PAGE
			// window.location="http://site.com/thank-you.php";
		});
	} else {
		alert(err);
	}
}