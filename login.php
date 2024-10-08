<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Login";
include('connection/connection.php');
include('inc/cleaninput.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="images/Logo mark with letter mark.png" 
  type="image/x-icon">
  <!-- Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>MentalVerse | Login</title>
</head>
<body>

  <section class="container">
    <div class="bg">
      <img src="images/Deco Left.png" alt="">
    </div>
    <div class="bg">
      <img src="images/Deco RIght.png" alt="">
    </div>
    <nav class="nav-container">
      <div class="logo">
        <img src="images/Asset 6.png" alt="">
      </div>
      <div class="icons">
        <button class="loginBut">
          <p>Login</p>
          <span class="icon material-symbols-outlined">login</span>
        </button>
        <button class="registerBut">
          <p>REGISTER</p>
          <span class="icon material-symbols-outlined">group_add</span>
        </button>
      </div>
    </nav>

    <section class="login-container">
      <div class="top">
        <h3>Login with:</h3>
        <div class="socials">
          <button class="icons">
            <i class="fab fa-google"></i>
            Google
          </button>
          <button class="icons">
            <i class="fab fa-github"></i>
            Github
          </button>
          <button class="icons">
            <i class="fas fa-wallet"></i>
            Wallet Connect
          </button>
        </div>
      </div>
      <div class="bottom">
        <div class="form">
          <div class="inputBox">
            <label for="username">Username or email</label>
            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">person</span>
            <input type="text" name="username" id="username" placeholder="Username or email">
          </div>
          <div class="inputBox">
            <div class="text">
              <label for="password">Password</label>
              <a href="#" class="next">Forgot Password?</a>              
            </div>
            <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 200, 'opsz' 24;">lock</span>
            <input type="password" name="password" id="password" placeholder="Password">
          </div>
        </div>
        <div class="check">
          <input type="checkbox" name="" id="">
          <span>Remember Me</span>
        </div>
        <button class="login">Login</button>
        <p>Do not have an account? <span class="next">Sign Up</span></p>
      </div>
    </section>

  </section>

  <footer>
    <div class="left">
      <img src="images/Asset 6.png" alt="">
      <p>Empowering Minds in the Digital Age</p>
      <div class="down">
        <span class="material-symbols-outlined">Copyright</span>
        <p>MentalVerse 2024</p>
      </div>
    </div>
    <div class="middle">
      <div class="foot_company">
        <h2>Company</h2>
        <ul class="footer_menu">
          <li><a href="index.html" class="nav-link">Home</a></li>
          <li><a href="message.html" class="nav-link">About us</a></li>
          <li><a href="#" class="nav-link">Courses</a></li>
          <li><a href="login.html" class="nav-link">Programs</a></li>
        </ul>            
      </div>
      <div class="foot_service">
        <h2>Services</h2>
        <ul class="footer_menu">
          <li>Individual Therapy</li>
          <li>Group Therapy</li>
          <li>Family Counseling</li>
          <li>Couples Counseling</li>
        </ul>            
      </div>
      <div class="foot_resources">
        <h2>Resources</h2>
        <ul class="footer_menu">
          <li>Privacy Policy</li>
          <li>Terms of Use</li>
        </ul>        
      </div>
    </div>
    <div class="right">
      <ul class="footer_socials">
        <li>
          <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li>
          <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>  
      <div class="lang">
        <div class="globe">
          <span class="icon material-symbols-outlined" style="font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' -25, 'opsz' 24">public</span>
        </div>
        <select name="lang" id="">
          <option value="English">English - En</option>
          <option value="English">German - G</option>
          <option value="English">French - F</option>
          <option value="English">Japanese - J</option>

        </select>
      </div>
    </div>
  </footer>


  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/2a49fbdbb8.js" crossorigin="anonymous"></script>


</body>
</html>