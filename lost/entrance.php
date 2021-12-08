<?php
  include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Personal Finder|Log In</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/logo.png"
  </head>
  <body>
    <div class="header">

      <div class="navbar " style="margin-left: 30%">
        <div class="branding" >
          <h1><img src="./img/logo.png" alt=""> PERSONAL FINDER</h1>
        </div>

              <nav>

                <ul>
                  <li><a href="index.php"><b>HOME</b></a></li>
                  <!-- <li class="current"><a href="entrance.html">LOGIN</a></li> -->

                </ul>

              </nav>
      </div>

    </div>
    <div class="hero">

      <div class="form-box">
        <div class="button-box">

          <div id="btn0">

          </div>
          <button type="button" class="toggle-btn" onclick="login()">Log In</button>
          <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
          <img src="img/fb.png" alt="fb">
          <img src="img/tw.png" alt="tw">
          <img src="img/gp.png" alt="gp">
        </div>
        <form id="log-in" class="input-group" action="index.html" method="post">
          <input type="text" class="input-field" placeholder="User Id" required>
          <input type="text" class="input-field" placeholder="Enter Password" required>
          <input type="checkbox" class="check-box"><span>Remember Me</span>
          <button type="submit" class="submit-btn">Log In </button>
        </form>
        <form id="register"class="input-group" action="index.html" method="post">
          <input type="text" class="input-field" placeholder="User Id" required>
          <input type="email" class="input-field" placeholder="Email Address" required>
          <input type="text" class="input-field" placeholder="Enter Password" required>
          <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
          <button type="submit" class="submit-btn">Register </button>
        </form>
      </div>

    </div>
    <script >
      var x= document.getElementById('log-in');
      var y= document.getElementById('register');
      var z= document.getElementById('btn0');

      function register() {
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
      }

      function login() {
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
      }
    </script>


  </body>
</html>
