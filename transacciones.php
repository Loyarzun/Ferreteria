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
				<th>Nombre</th>
				<th>Fecha</th>
				<th>Email</th>
			</tr>
			<tr ng-repeat="x in names track by $index">
                                <td id = '{{$index + 1}}' >{{x.order_id}}</td>
				<td id='row_name'>{{x.order_name}}</td>
				<td>{{x.order_date}}</td>
				<td>{{x.order_email}}</td>
                                
                                <td><a ng-click="saveData(x.order_id)" data-fajax="false" href="http://localhost/Transacciones/order.php" data-transition="slidefade">ver detalle</a></td>
			</tr>
		</table>
	</div>
</div>
<!-- Script -->  
<script>
    var app = angular.module("sa_display", []);
    app.controller("controller", function($scope, $http) {
        $scope.display_data = function() {
            $http.get("display.php")
                .success(function(data) {
                    $scope.names = data;
                });
        };
        $scope.saveData = function(entrada){
            localStorage.id = entrada;
        };
    });
</script> 
</body>  
</html>
