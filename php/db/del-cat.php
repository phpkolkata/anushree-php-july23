<?php
// DRY - Dont repeat yourself

require "connection.php";

$id = $_REQUEST['id'];
$sql = "delete from category where id='$id'";

mysqli_query($con, $sql);

header("location:category.php?msg=record delete");
