<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BODY BUILDING</title>
    <link rel="stylesheet" href="style.css">
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

        <?php
        if (isset($_SESSION['userusername'])) {
            echo "<p>WELCOME <b>Shark</b> " . $_SESSION['userusername'] . "!</p>";
        }
        ?>

        <h1>Build Your Body</h1>
        <p>There Are Only Twoo Options: <b> Either You'll Be The Shark Of The Ocean</b> OR<br>You'll Be The Fish Of The Ocean</p>
        <div>
            <button type="button"><span></span><a href="login.php">LOGIN</a></button>
            <button type="button"><span></span><a href="signup.php">SIGNUP</a></button>
        </div>
    </div>
</body>

</html>