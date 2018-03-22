<?php
//session_start();
if (empty($_SESSION['id'])) {
    // The username session key does not exist or it's empty.
    //header('location: login.php');
    echo '<h3>Login First to access this page</h3>';
    echo "<a href='login.php'>Click Here</a>";
    exit;
}