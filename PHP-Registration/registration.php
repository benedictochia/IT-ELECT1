</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registration Form</title>
</head>
<body>
  <div id="container">
    <div class="form-wrap">
      <h1>Sign Up</h1>
      <form action="display.php" method="post">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" name="firstname" id="first-name">
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" name="lastname" id="last-name">
        </div>
        <div class="form-group">
          <label for="studentid">Student ID</label>
          <input type="studentid" name="studentid" id="studentid">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password" name="confirmpassword" id="confirmpassword">
        </div>
        <button type="submit">Sign Up</button>
        <p class="bottom-text">
          By Clicking the Sign Up Button, you agree to our
          <a href="#">Term & Conditions</a> and <a href="#">Primary Policy</a>
        </p>
      </form>
    </div>
    <footer>
      <p>Already Have an Account? <a href="#">Login Here</a></p>
    </footer>
  </div>
</body>
</html>