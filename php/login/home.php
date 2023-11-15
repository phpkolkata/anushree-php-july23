<?php
session_start();

if (!$_SESSION['login']) {
    header("location:index.php?msg=wrong attempt!");
    die;
}

?>


<a href="logout.php">logout</a>
welcome home
