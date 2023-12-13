<?php
extract($_REQUEST);

$sql = "select * from search where keywords like '$key%'";
$res = mysqli_query($con, $sql);

$str = "<ul>";
while ($row = mysqli_fetch_assoc($res)) {
    $str .= "<li>keyowrd</li>";
}
$str .= "</ul>";

echo $str;
