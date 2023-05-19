<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>BODY BUILDING</title>
  <link rel="stylesheet" href="../css/app.css">
</head>

<body>
  <div class="banner">
    <div class="navbar">
      <h1>BodyBuilding</h1>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="discover.php">ABOUT</a></li>
        <li><a href="blog.php">TRAINING</a></li>
        <?php
        if (isset($_SESSION['userusername'])) {
          echo '<li><a href="profile.php">PROFILE</a></li>';
          echo '<li><a href="includes/logout.inc.php">LOGOUT</a></li>';
        } else {
          echo '<li><a href="signup.php">SIGNUP</a></li>';
          echo '<li><a href="login.php">LOGIN</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="content">
    <div class="signup-box">
      <h2>Sign Up</h2>
      <form action="includes/signup.inc.php" method="post">
        <label>NAME</label>
        <input type="text" name="name" placeholder="Full Name..."></br>
        <label>EMAIL</label>
        <input type="text" name="email" placeholder="Email..."></br>
        <label>USERNAME</label>
        <input type="text" name="username" placeholder="Username..."></br>
        <label>PASSWORD</label>
        <input type="password" name="pwd" placeholder="Password..."></br>
        <label>CONFIRM PASSWORD</label>
        <input type="password" name="pwdconf" placeholder="Repeat Password..."></br>
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>

    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyInput') {
        echo "Fill In All Fields!";
      } else if ($_GET['error'] == "invalidEmail") {
        echo "Please Pick A Valid Email!";
      } else if ($_GET['error'] == "invalidUsername") {
        echo "Please Pick A Valid Username!";
      } else if ($_GET['error'] == "usernameTaken") {
        echo "Username Exists Already!";
      } else if ($_GET['error'] == "passwordsMatch") {
        echo "Passwords Don't Match!";
      } else if ($_GET['error'] == "stmtFailed ") {
        echo "Something Went Wrong, Please Try Again!";
      } else if ($_GET['error'] == "none") {
        echo "SignUp SUCCEED!";
      }
    }
    ?>

  </div>
</body>

</html>