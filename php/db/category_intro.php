<?php
// $con = mysqli_connect("localhost", "root", "", "mobile_store");
$con = mysqli_connect("localhost", "asif", "asif", "mobile_store");

if (!$con) {
    die("connection error");
}

$res = mysqli_query($con, "select * from `category`");

// mysqli_fetch_row - numeric array
// mysqli_fetch_assoc - associative
// mysqli_fetch_array - combined numeric + associative
// mysqli_fetch_object - class object

while ($row = mysqli_fetch_assoc($res)) {

    print "<pre>";
    print_r($row);
}
