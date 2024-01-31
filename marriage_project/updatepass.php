<?php  
session_start();
include("dbconnect.php");

if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $oldPassword = $_POST['t1'];
    $newPassword = $_POST['t2'];

    // Assuming you have a session variable for the username
    $username = $_SESSION['t1'];

    // Fetch the current password from the database
    $sql = "SELECT pass FROM user  WHERE uname='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $currentPassword = $row['pass'];

        // Check if the entered old password matches the current password
        if ($oldPassword === $currentPassword) {
            // Update the password in the database
            $updateSql = "UPDATE user SET pass='$newPassword' WHERE uname='$username'";
            
            if (mysqli_query($conn, $updateSql)) {
                echo "Password updated successfully";
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        } else {
            echo "Incorrect old password";
        }
    } else {
        echo "Error fetching current password: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
?>
