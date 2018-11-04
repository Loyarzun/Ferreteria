<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Lista de Transacciones</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>  
<body>  
<div class="container">
	<h3 align="center">Lista de Transacciones</h3>
	<div ng-app="sa_display" ng-controller="controller" ng-init="display_data()">
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
                                
			</tr>
			<tr ng-repeat="y in products">
				<td>{{y.product_id}}</td>
				<td>{{y.product_name}}</td>
				<td>{{y.product_price}}</td>
				<td>{{y.quantity}}</td>
			</tr>
		</table>
	</div>
</div>
<!-- Script -->  
<script>
    var app = angular.module("sa_display", []);
    app.controller("controller", function($scope, $http) {
        $scope.display_data = function() {
            $http.post("display2.php",{data2: { id2: localStorage.getItem("id") }})
                .success(function(data2) {
                    console.log(status + ' - ' + data2);
                    $scope.products = data2;
                });
        }
    });
</script> 
</body>  
</html>    