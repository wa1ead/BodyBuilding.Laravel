<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>BODY BUILDING</title>
  <link rel="stylesheet" href="../css//app.css">
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
    <div class="container my-5">
      <div class="mb-3">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
          <div class="mb-3">
            <label>USERNAME OR EMAIL</label>
            <input type="text" name="username" placeholder="Username/Email...">
          </div>
          <div class="mb-3">
            <label>PASSWORD</label>
            <input type="password" name="pwd" placeholder="Password...">
          </div>
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
    </div>

    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyInput') {
        echo "Fill In All Fields!";
      } else if ($_GET['error'] == "loginFailed") {
        echo "Wrong Informations, Please Try Again!";
      }
    }
    ?>

  </div>
</body>

</html>