<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactUs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$emial=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', '$email', $phone, '$message')";

$result=mysqli_query($con,$sql);


$formcontent="Dear $name We will Contact You Zoon ";
$recipient = $email;
$subject = "Contact Form";
$mailheader = "From: pdncpathiraja@gmail.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

mysqli_close($conn);
?>