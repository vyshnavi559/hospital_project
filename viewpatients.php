<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'rsvs@123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error($conn));
}
$sql = 'SELECT * from patients';

mysqli_select_db($conn,'hms') or die(mysqli_error($conn));
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysqli_error($conn));
}
while($row = mysqli_fetch_array($retval))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
         "NAME 		 : {$row['name']} <br> ".
         "AGE		 : {$row['age']} <br> ".
         "GENDER	 : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE	 : {$row['mobile']} <br> ".
         "ADDRESS	 : {$row['address']} <br> ".
         "--------------------------------<br>";
} 

mysqli_close($conn);
?>
