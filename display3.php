<?php
$data3 = json_decode(file_get_contents('php://input'));
 
 $id = intval($data3->data3->id2);
 $conn = mysqli_connect("localhost", "root", "", "tienda");  
 $output = array();  
 $query = "SELECT order_state FROM orders WHERE orders.order_id = $id";  
 $result = mysqli_query($conn, $query);  
 if(mysqli_num_rows($result) > 0) {  
      while($row = mysqli_fetch_array($result)) {  
           $output[] = $row;  
      }  
      echo json_encode($output);
 }  
 
 ?> 

