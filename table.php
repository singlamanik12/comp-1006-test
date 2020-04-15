<?php

// connect to our database
include('./.env.php');

$conn = mysqli_connect(getenv(DB_HOST), getenv(DB_USER), getenv(DB_PASS), getenv(DB));


// fetch the rows
$sql = "SELECT * FROM countries";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
var_dump($result);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
  <head>
    <title>Adding Countries</title>
    <style>
    table,th,td{
        border: 1px dashed black;
        padding: 0.25em;
    }
    </style>
  </head>

  <body>
  <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Population</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    
    <?php 
    // foreach to itterate over our array    
    foreach($rows as $row){
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['description']}</td>";
        echo "<td>{$row['population']}</td>";
        echo "<td>";  
        echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
        echo " | ";
        echo "<a href='./delete.php?id={$row['id']}'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>
  </body>
</html>