<?php
$email=$_POST['email'];
$password=$_POST['password'];
$checkbox=$_POST['checkbox'];
$con=mysqli_connect('localhost','root','','book_db');
$query="insert into book_login(email,password,checkbox) values('$email','$password','$checkbox')";
$result = mysqli_query($con,$query);
// echo "Registration successfully!";
header("location:dashboard1.php");
?>