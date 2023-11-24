<?php
require "connection.php";
extract($_POST);

$sql = "insert into category values(NULL,'$nm', '$isa' )";
mysqli_query($con, $sql);
header("location:category.php?msg=record added");
