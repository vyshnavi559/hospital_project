<?php

session_start();
?>



<?php
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');
$conn=@mysqli_connect("localhost","root","rsvs@123") or die(mysqli_error($conn));
$conn -> select_db("hms");
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
if($conn -> query($sql) == TRUE)
{
if(mysqli_num_rows($sql)>0)
{echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:home.html");
	}
}
ob_end_flush();
?>
