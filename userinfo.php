



<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo"No connection";
}

mysqli_select_db($con,'hotel-website');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comment')";

mysqli_query($con, $query);


?>


<!-- entry the data in dATA BASE WITH MY_SQLI CODE
	