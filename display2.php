 <?php
 $data3 = json_decode(file_get_contents('php://input'));
 
 $id = intval($data3->data2->id2);
 
 $conn = mysqli_connect("localhost", "root", "", "tienda");  
 $output = array();  
 $query = "SELECT orders_items.product_id, products.product_name, products.product_price ,orders_items.quantity FROM orders_items INNER JOIN products ON orders_items.product_id = products.product_id WHERE orders_items.order_id = $id";  
 $result = mysqli_query($conn, $query);  
 if(mysqli_num_rows($result) > 0) {  
      while($row = mysqli_fetch_array($result)) {  
           $output[] = $row;  
      }  
      echo json_encode($output);
 }  
 
 ?> 
