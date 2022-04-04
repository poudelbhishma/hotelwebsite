<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo"No connection";
}

mysqli_select_db($con,'hotel-website');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$foodname = $_POST['foodname'];
$address = $_POST['address'];




$query = "insert into orderinfo(name,email,number,foodname,address)values('$name','$email','$number','$foodname','$address')";

mysqli_query($con, $query);


?>