<?php

//connect to the data base
$db = mysqli_connect('localhost','root');
mysqli_select_db($db,'login');
//if registartion button clicked
if (isset($_POST['register']))
{
	$id=$_POST['Id'];
	$password=$_POST['Password'];
	$mobile=$_POST['Mobileno'];
    $gender=$_POST['gender'];
    $email=$_POST['Email'];

     $password=md5($password);
     $sql = "INSERT INTO user (id, password, mobile , gender, email) VALUES ('$id', '$password', '$mobile', '$gender', '$email')";
      echo mysqli_query($db,$sql);
}
?>