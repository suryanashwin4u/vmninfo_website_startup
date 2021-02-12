<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vmncontacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO usersquery (fname, lname, email, phone, message, subject) VALUES('$fname', '$lname', '$email', '$phone', '$message','$subject')";
    
if (mysqli_query($conn, $sql)) 
{
      echo "<script>alert('thank you for contacting us...we will contact you soon');</script>";
      header('Refresh: 3; URL=vmncontact.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>