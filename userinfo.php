<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'userdata');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (name, email, mobile, comment) 
values ('$name', '$email','$mobile','$comment')  ";  
echo "$query";
mysqli_query($con, $query);
header('location:index.php');
?>