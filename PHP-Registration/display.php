<!DOCTYPE html>
<html>
<head>
  <title>Registration Details</title>
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
      padding: 30px;
    }

    #container{
      max-width: 430px;
      margin: 0 auto;
      background-color: #fff;
      border-top: 4px solid #1ECBE1;
      border-radius: 5px;
      padding: 20px 25px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1ECBE1;
    }

    .info {
      margin-bottom: 15px;
      font-size: 16px;
    }

    .label {
      font-weight: 600;
      color: #666;
    }
  </style>
</head>
<body>
  <div id="container">
    <h2>Registration Details</h2>
    <div class="info"><span class="label">First Name:</span> <?php echo htmlspecialchars($_POST["firstname"]); ?></div>
    <div class="info"><span class="label">Last Name:</span> <?php echo htmlspecialchars($_POST["lastname"]); ?></div>
    <div class="info"><span class="label">Student ID:</span> <?php echo htmlspecialchars($_POST["studentid"]); ?></div>
    <div class="info"><span class="label">Password:</span> <?php echo htmlspecialchars($_POST["password"]); ?></div>
  </div>
</body>
</html>