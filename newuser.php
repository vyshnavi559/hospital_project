<?php
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');

$conn=@mysqli_connect("localhost","root","rsvs@123") or die(mysqli_error($conn));
$conn -> select_db("hms");
$str="insert into users values('$username','$password')";
if($conn -> query($str) == TRUE){
  echo "<br><br><h1><b>Thank you for registeration !!</b></h1> <br>";
} else {
  echo "Error :" .$str. "<br>" .$conn->error;
}
?>
<html>
<body>
<br>
print
<a href="index.html"><b>Click here to return to the main page</b></a>
</body>
</html>

