<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$con=mysqli_connect('localhost','root','','book_db');
$query="insert into book_reg(fname,lname,password,cpassword,gender,email,phone,question,answer) values('$fname','$lname','$password','$cpassword','$gender','$email','$phone','$question','$answer')";
$result = mysqli_query($con,$query);
// echo "resitration successfully";
header("location:dashboard1.php");

?>