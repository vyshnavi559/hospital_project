<?php
session_start()
?>

<?php

$id = (isset($_POST['id']) ? $_POST['id'] : '');
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$age = (isset($_POST['age']) ? $_POST['age'] : '');
$gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
$occupation = (isset($_POST['occupation']) ? $_POST['occupation'] : '');
$mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
$address = (isset($_POST['address']) ? $_POST['address'] : '');

$conn=@mysqli_connect("localhost","root","rsvs@123") or die("couldnot connect to server");
$conn -> select_db("hms");
$str= "insert into patients values ($id, '$name', $age,'$gender','$occupation','$mobile','$address')";
if ($conn->query($str) == TRUE) {
  echo "Patient Added Successfully!!";
} else {
  echo "Error: " . $str . "<br>" . $conn->error;
}

?>

<html>
<body style="background-image:url(doctor4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
