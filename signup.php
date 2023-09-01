<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "insert into `users` (name,email,password) values ('$name','$email','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
      header("Location: success.php");
    }
    else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flipkart Signup</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }
  .signup-container {
    max-width: 400px;
    margin: 10% auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .signup-container h2 {
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
<div class="signup-container">
    <img src="assets/Flipkart-plus.png" height="80px" width="auto" style="padding-left:30%">
  <h2>Create an Account on Flipkart</h2>
  <form method="POST">
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" name="submit" class="submit-btn">Sign Up</button>
  </form>
</div>
</body>
</html>
