@extends('layout')
@section('content')

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
@endsection