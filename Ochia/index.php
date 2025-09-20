<!DOCTYPE html>
<html>
<head>
  <title>Benny's Website</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body{
      font-family: 'Poppins', sans-serif;
      background-color: #ECEDEF;
      color: #333;
      line-height: 1.8;
    }

    a{
      text-decoration: none;
    }

    #container{
      margin: 30px auto;
      max-width: 430px;
      padding: 20px;
    }

    .form-wrap{
      background-color: #fff;
      padding: 15px 25px;
      color: #333;
      border-top: 4px solid #1ECBE1;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-wrap h2,
    .form-wrap p{
      text-align: center;
      margin-bottom: 15px;
    }

    .form-wrap form {
      margin-top: 20px;
    }

    .form-wrap input[type="submit"]{
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #1ECBE1;
      color: #fff;
      cursor: pointer;
      border: 1px solid #49c1a2;
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      border-radius: 5px;
      transition: background-color 1s;
    }

    .form-wrap input[type="submit"]:hover{
      background-color: #37a08e;
      transition: background-color 1s;
    }

    footer {
      text-align: center;
      margin-top: 10px;
      color: #333;
      font-size: 14px;
    }

    footer a {
      color:#1ECBE1;
    }
  </style>
</head>
<body>
  <div id="container">
    <div class="form-wrap">
      <h2>WELCOME TO BENNY'S WEBSITE</h2>
      <form action="registration.php" method="post">
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
</html>