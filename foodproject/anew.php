<?php 
include_once('food.php');

if(isset($_POST['Email']) && isset($_POST['password'])) {
  $email = $_POST['Email'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
   
    mysqli_close($conn);
    header("Location: B-next.html");
    exit();
  } else {
  
    echo "<script>alert('Invalid login details');</script>";
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="break.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
  
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form class="login" action="" method="post">
            <label for="username">Email:</label>
            <input type="email" id="email" name="Email" required>
            </br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            </br>
            <button type="submit" id="myButton">Login</button><br>
            <a href="B-forgot.html">Forgot password?</a>
          </form>

          <form class="signup" action="anew.html" method="post">       
            <label for="email" >Email:</label>
            <input type="email" id="email" name="email" required>
            </br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            </br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            </br>
            <button type="submit" id="myButton">Register</button>
          </form>
        </div>
      </div>

      <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");

        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });

        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="break.css">
</head>
<body>
   <div class="wrapper">
        <div class="title-text">
          <div class="title login">Login Form</div>
          <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
          <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup" checked>
  
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>
    <div class="form-inner">
    
      <form class="login" action="B-next.html" method="post">
        <label for="username">Email:</label>
        <input type="email" id="email" name="Email" required>
      </br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
       </br>
        <button type="submit" id="myButton">Login</button><br>
        <a href="B-forgot.html">Forgot password?</a>
     </form>

     <form class="signup" action="anew.html" method="post">       
        <label for="email" >Email:</label>
        <input type="email" id="email" name="email" required>
     </br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="Confirm password" required>
    </br>
        <button type="submit" id="myButton">Register</button>
     </form>
    </div>
    </div>

    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return true;
        });
      </script>
      <script>
        document.addEventListener("DOMContentLoaded", function(event) {
          document.getElementById("myButton").addEventListener("click", function() {
            event.preventDefault();
    if (emailInput.value !== "" && passwordInput.value !== "") {
            window.location.href = "B-next.html";
          } else{
          alert("Please enter your email and password");
    }
          });
        });
        </script>
      
</body>
</html>