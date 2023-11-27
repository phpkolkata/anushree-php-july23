<?php
require "connection.php";
// $id = $_REQUEST['id'];

extract($_REQUEST);

$sql = "UPDATE `product` SET `name`='$nm',`price`='$price', `description`='$description', `is_active`='$isa' WHERE `id`='$id'";

// print $sql;
mysqli_query($con, $sql);

header("location:product.php?msg=record updated");
