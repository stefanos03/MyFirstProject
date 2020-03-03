<html>
<head>
    <title>User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
      <div class="col-md-6 login-left">
         <h2>Login Here</h2>
          <form action="validation.php" method="post">
              <div class="form-group">
                  <label> Username </label>
                  <input type="text" name="user" class="form-control" required>
              </div>
              <div class="form-group">
                  <label> Password</label>
                  <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Login </button>
          </form>
      </div>
        <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
</html>