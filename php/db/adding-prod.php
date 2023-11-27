<?php
require "connection.php";
extract($_POST);

$sql = "insert into product values (null, '$cat_id', '$nm','$price','$description','', '$isa')";
// print $sql;
mysqli_query($con, $sql);

header("location:product.php?msg=record added");
