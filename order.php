<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Lista de Transacciones</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>  
<body>  
<div id="App1" class="container">
	<h3 align="center">Detalles de Transaccion</h3>
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
<div id="App2" class="container">
    <h3 align="center">Estado Transaccion</h3>
	<div ng-app="state_display" ng-controller="controller" ng-init="display_data2()">
		<table class="table table-bordered">
			<tr>
				<th>Estado</th>
                                
				 
			</tr>
			<tr ng-repeat="y in state">
				<td>{{y.order_state}}</td>
                                <td><a ng-click="finalizada()" data-fajax="false" href="http://localhost/Sample/order.php" data-transition="slidefade">marcar como finalizada</a></td>
				<td><a ng-click="cancelada()" data-fajax="false" href="http://localhost/Sample/order.php" data-transition="slidefade">marcar como cancelada</a></td>
                                <td><a ng-click="pendiente()" data-fajax="false" href="http://localhost/Sample/order.php" data-transition="slidefade">marcar como pendiente</a></td>
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
    var app = angular.module("state_display", []);
    app.controller("controller", function($scope, $http) {
        $scope.display_data2 = function() {
            $http.post("display3.php",{data3: { id2: localStorage.getItem("id") }})
                .success(function(data3) {
                    console.log(status + ' - ' + data3);
                    $scope.state = data3;
                });
        }
        $scope.finalizada = function() {
            $http.post("update_state_finalizada.php",{data4: { id2: localStorage.getItem("id") }})
                .success(function(data4) {
                    console.log(status + ' - ' + data4);
                    
                });
        }
        $scope.cancelada = function() {
            $http.post("update_state_cancelada.php",{data4: { id2: localStorage.getItem("id") }})
                .success(function(data4) {
                    console.log(status + ' - ' + data4);
                    
                });
        }
        $scope.pendiente = function() {
            $http.post("update_state_pendiente.php",{data4: { id2: localStorage.getItem("id") }})
                .success(function(data4) {
                    console.log(status + ' - ' + data4);
                    
                });
        }
    });
    angular.bootstrap(document.getElementById("App2"), ['state_display']);
</script> 
</body>  
</html>    