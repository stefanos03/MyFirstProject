<?php
session_status();
header('location:login.php');
$con = mysqli_connect('csdm-webdev','1909248','1909248');
mysqli_select_db($con,'db1909248_reg');
$name = $_POST['user'];
$pass =  $_POST['password'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num ==1) {
    echo "username already taken";
}else{
    $ref="insert into usertable(name ,password) values ('$name','$pass')";
    mysqli_query($con,$ref);
    echo "Registration Successful";
}
?>