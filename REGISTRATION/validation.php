<?php
session_status();
$con = mysqli_connect('csdm-webdev','1909248','1909248');
mysqli_select_db($con,'db1909248_reg');
$name = $_POST['user'];
$pass =  $_POST['password'];
$s = " select * from usertable where name = '$name' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num ==1) {
    $_SESSION['username'] = $name;
   header('location:home.php');
}else{
   header('location:login.php');
}
?>