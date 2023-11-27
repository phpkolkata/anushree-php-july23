<?php

require "connection.php"; // fatal error and stop execution

$id = $_REQUEST['id'];

$sql = "delete from product where id='$id'";

mysqli_query($con, $sql);

header("location:product.php?msg=record delete");
