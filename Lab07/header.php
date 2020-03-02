<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>

<header>
<nav>
    <a href="#">
        <img src="img/VEGAN%20PROJECT%20LOGO.png" alt="logo">
    </a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About me</a></li>
        <li><a href="#">Contact</a></li>

    </ul>
    <div>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-sumbit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
         <form action="includes/logout.inc.php" method="post">
             <button type="submit" name="logout-sumbit">Logout</button>
    </div>
</nav>
</header>
