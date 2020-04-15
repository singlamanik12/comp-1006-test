<?php

  include('./.env.php');

  // Our database connection
  $conn = mysqli_connect(getenv(DB_HOST), getenv(DB_USER), getenv(DB_PASS), getenv(DB));
  $sql = "INSERT INTO countries (name,description,population) VALUES ('{$_POST['name']}',
  '{$_POST['description']}',
  {$_POST['population']})";
  // echo $sql;

  // Querry our database providing our connection and our SQL
  $res = mysqli_query($conn, $sql);

  // Resume the session 
  session_start();

  if($res){
      // We're successful
      $_SESSION['notification'] = "New country created successfully.";
  }
  else{
      // We failed Misserably
      $_SESSION['notification'] = "There was an error creating this country: " . mysqli_error($conn);
  }
  // redirect to the notification.php page 
  header("Location: notification.php");
  die;
  
?>