<?php
$con = mysqli_connect('localhost', 'root');

if($con) {
    echo 'connection successful';
}
else{
    echo 'connection failed';
}

mysqli_select_db($con, 'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$query = "INSERT INTO contact(name, email, number, message) VALUES('$name', '$email', '$number', '$message')";

mysqli_query($con, $query);
header('location:index.php#contact');

?>