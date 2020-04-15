<?php

   // Our database connection
   include('./.env.php');

   $conn = mysqli_connect(getenv(DB_HOST), getenv(DB_USER), getenv(DB_PASS), getenv(DB));

 var_dump($_POST);

 $sql = "UPDATE countries SET 
         name = '{$_POST['name']}',
         description = '{$_POST['price']}'
         WHERE id = {$_POST['id']}";
 $res = mysqli_query($conn, $sql);

 if($res){
     echo "The country was updated successfully";
 }
 else{
     echo "There was an error updating the row beacause: ". mysqli_error($conn);
 }

?>