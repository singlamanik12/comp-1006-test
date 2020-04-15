<?php
 // Our database connection
 include('./.env.php');

 $conn = mysqli_connect(getenv(DB_HOST), getenv(DB_USER), getenv(DB_PASS), getenv(DB));

 $sql = "DELETE FROM countries  
         WHERE id = {$_GET['id']}";
 $res = mysqli_query($conn, $sql);

 $res = mysqli_query($conn, $sql);

 if($res)
 {
    echo "The country was updated successfully";
 }
 else
 {
    echo "There was an error updating the row: ". mysqli_error($conn);
 }

?>