<?php

 // Resume the session 
 session_start();
 // Redirect user if there is no notifications
 if(empty($_SESSION{['notification']})) {
     header("Location: table.php");
     die;
 }

 // output our notification 
 echo $_SESSION['notification'];

 // clear the notification 
 unset($_SESSION['notification']);

?>