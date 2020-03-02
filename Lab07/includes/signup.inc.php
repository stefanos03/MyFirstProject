 <?php
if (isset($_POST['signup-submit'])){

require 'dbh.inc.php';

$username = $_POST['uid'];
    $email = $_POST['mail'];
    $password= $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) ||empty($email)||empty($password)||empty($passwordRepeat)){
      header("Lab07../signup.php?error=emptyfields&uid=".$username."&email=".$email);
      exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*&/",$username)){

    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("../signup.php?error=invaliduids&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*&/",$username))){
        header("../signup.php?error=invaliduid&mail=".$username);
        exit();
    }
}
