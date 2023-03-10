<?php
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
      ></script>
      <link rel="icon" type="image/jpg" href="./Favicon/favicon.jpg">
      <link rel="stylesheet" href="style1.css" />
      <title>Sign in & Sign up Form</title>
    </head>
    <body>
      
      <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form action="./user.php" class="sign-in-form">
              <h2 class="title">Sign in</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
              </div>
              <input type="submit" value="Login" class="btn solid"/>
              <p class="social-text">Or Sign in with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
            <form action="./validateuser.php" method="post" class="sign-up-form" onsubmit="validateForm()">
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username" required/>
                <span><?php if(isset($username_error)) echo $username_error; ?></span>
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required/>
                <span><?php if(isset($email_error)) echo $email_error; ?></span>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <span><?php if(isset($password_error)) echo $password_error; ?></span>
              </div>
              <input type="submit" class="btn" name="submit" value="Sign up" />
              <p class="social-text">Or Sign up with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </div>
        </div>

        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>New here ?</h3>
              <p>
                Now park hassle free with one click
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Sign Up
              </button>
            </div>
            <img src="images/log.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
                Now park hassle free with one click
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign In
              </button>
            </div>
            <img src="images/register.svg" class="image" alt="" />
          </div>
        </div>
      </div>

      <script src="app1.js"></script>
    </body>
  </html>
