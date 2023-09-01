<?php

include "connect.php";

if (isset($_POST['submit'])) {
    $email  = $_POST['email'];
    $password = $_POST['password'];

    $SELECT = mysqli_query ($con,"SELECT email From users Where email = '$email' AND password = '$password' ");

    if (mysqli_num_rows($SELECT)>0) {
        $row1 = mysqli_fetch_assoc($SELECT);
        header("Location:index.html");
    }

    else {
        echo "<script> alert ('Your account is not registered'); </script>";
    }
    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flipkart Login</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }
  .login-container {
    max-width: 400px;
    margin: 10% auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .login-container h2 {
    text-align: center;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    margin-bottom: 5px;
  }
  .form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  .submit-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #106cfc;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  .submit-btn:hover {
    background-color: #0060fa;
  }
</style>
</head>
<body>
<div class="login-container">
    <img src="assets/Flipkart-plus.png" height="80px" width="auto" style="padding-left:30%">

  <h2>Welcome to Flipkart</h2>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" name="submit" class="submit-btn">Login</button>
  </form>
</div>
</body>
</html>
