<?php
     error_reporting(0);
?>
<?php 
$n=$_POST['q1'];
$fn=$_POST['q2'];

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "marriage project";
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
//print_r($_FILES["uploadfile"]);
$folder ="images/".$filename;
//echo $folder;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='500px' width='500px'> ";

$conn = mysqli_connect($servername,$username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql = "INSERT INTO payss (uname,cname,file_up) VALUES ('$n','$fn','$mb')";

  if (mysqli_query($conn, $sql))
   {
    echo "Your record is created successfully";
    }
    else
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  


?>