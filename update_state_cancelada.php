<?php
$data3 = json_decode(file_get_contents('php://input'));
 
 $id = intval($data3->data4->id2);
 $con = mysqli_connect("localhost", "root", "", "tienda");  
 $result = array();  
 $query = "UPDATE orders SET orders.order_state = 'cancelada' WHERE orders.order_id = $id";  
 if(mysqli_query($con, $query)) {
    $result['msg']="updated successfully";
}else{
   header("HTTP/1.0 401 Unauthorized");
   $result['msg']="unable to updated";
}
echo json_encode($result);
 
 ?> 
