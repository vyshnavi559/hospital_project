<?php
session_start();
if(!$_SESSION[user]=$username){
header("location:home.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>
