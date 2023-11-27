<?php
require "connection.php";
// $id = $_REQUEST['id'];

extract($_REQUEST);

$sql = "UPDATE `category` SET `name`='$nm', `is_active`='$isa' WHERE `id`='$id'";

// print $sql;
mysqli_query($con, $sql);

header("location:category.php?msg=record updated");
