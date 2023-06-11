<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>BODY BUILDING</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="banner">
    <div class="navbar">
      <h1><a href="index.php">BodyBuilding</a></h1>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="programs">TRAINING</a></li>
        <li><a href={{route('programs.create')}}>CREATE</a></li>
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
    @yield('content')
  </div>
</body>

</html>