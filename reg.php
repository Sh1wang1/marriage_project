<?php
$un = $_POST['t1'];
$pd = $_POST['t2'];
$em = $_POST['t3'];
$mb = $_POST['t4'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marriage project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (uname, pass, emailid , mobno) VALUES ('$un','$pd','$em','$mb')";

if (mysqli_query($conn, $sql)) {
  header("location:login.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>