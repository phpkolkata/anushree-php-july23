<?php
session_start();
// session - stores data server side

$_SESSION['name'] = "raj";
$_SESSION['age'] = 22;

// session_destroy scenario
// 1. browser close
// 2. time out (10min approx)
// 3. programmatically

// session use
// 1. login/logout
// 2. shopping cart
// 3. storing usefull data for throughout page
