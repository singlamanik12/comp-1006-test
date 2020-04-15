<?php
 // Our database connection
 include('./.env.php');

 $conn = mysqli_connect(getenv(DB_HOST), getenv(DB_USER), getenv(DB_PASS), getenv(DB));
$result = mysqli_query($conn, "SELECT * FROM countries WHERE id = {$_GET['id']}");
$row = mysqli_fetch_assoc($result);
var_dump($row);
?>
<!DOCTYPE html>
  <head>
    <title>Edit Countries</title>
  </head>

  <body>
    <header>
        <h1>Edit Countries</h1>
    </header>
    <!-- The form for creating a new country -->
    <form action="./update.php" method="post">
    <div>
    <input name= "id" type="hidden" value = "<?= $row['id'] ?>">
    </div>
    <div>
    <label>Country Name:</label>
    <!-- Long Version echo statement -->
    <input name="name" value= "<?php echo $row['name'] ?>">
    </div>
    <div>
    <label>Country Description:</label>
    <input name="description" value = "<?php echo $row['description'] ?>">
    </div>
    <div>
    <label>Country Population:</label>
    <input name="population" type="number" value = "<?php echo $row['population'] ?>">
    </div>
    <button type="submit">Create</button>
    </form>
  </body>
</html>