<?php
session_start();
?>


<?php
//if(!$_SESSION[user]=$username){
//	header("location:index.html");
//	exit;
//	}

$id = (isset($_POST['id']) ? $_POST['id'] : '');
$medicine = (isset($_POST['medicine']) ? $_POST['medicine'] : '');
$diagnosis = (isset($_POST['diagnosis']) ? $_POST['diagnosis'] : '');
$instructions = (isset($_POST['instructions']) ? $_POST['instructions'] : '');
$doc_name = (isset($_POST['doc_name']) ? $_POST['doc_name'] : '');

$conn=@mysqli_connect("localhost","root","rsvs@123") or die("could not connect to the server");
$conn -> select_db("hms");
$str="insert into prescription values('$id','$medicine','$diagnosis','$instructions','$doc_name')";
//$res=@mysqli_query($str)or die(mysqli_error($res));
if ($conn->query($str) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $str . "<br>" . $conn->error;
}


//$retval = mysqli_query( $sql, $conn );
//if(! $retval )
//{
 // die('Could not get data: ' . mysqli_error($retval));
//}
while($row = mysqli_fetch_array($str))
{
	echo "<big><b>PRESCRIPTION : </b></big><br><br><br>";
	echo "DOCTOR NAME : $doc_name<br>"; 
	echo "<b>Patient Details : </b><br>";
    echo "PATIENT ID : {$row['id']}  <br><br> ".
         "NAME 		 : {$row['name']} <br><br> ".
         "AGE		 : {$row['age']} <br><br> ".
         "GENDER	 : {$row['gender']} <br><br> ".
         "MOBILE	 : {$row['mobile']} <br><br> ".
        
         "--------------------------------<br>";
} 
echo "MEDICINE : $medicine <br><br>".
	 "DIAGNOSIS : $diagnosis <br><br>".	
	 "ADDITIONAL INSTRUCTIONS : $instructions <br><br>".
	     "--------------------------------<br>";	
mysqli_close($conn);
?>
<html>
<input type="button" onClick="window.print();" value="Print Prescription"/><br><br>
<a href="home.html"><b>HOME</b></a>
</html>
