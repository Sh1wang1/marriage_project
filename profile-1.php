<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
   <h1>
      <?php  
         echo "Welcome".$_SESSION['suser'];      
      ?>
      <a href="logout.php">Logout</a>
      <a href="updatepass.html">Update Password</a>
      
   </h1>
</body>
</html>