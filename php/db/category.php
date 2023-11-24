<?php
// CRUD - CREATE, READ, UPDATE, DELETE
// include "connection.php";  // warning generate, if not found, execution continue
require "connection.php"; // fatal error and stop execution

$sql = "select * from `category`";
$res = mysqli_query($con, $sql);

print "<a href='add-cat.php'>Add more...</a>";

print "
    <table border='1' width='300'>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACTIVE</th>
            <th>OPTION</th>
        </tr>

";

while ($row = mysqli_fetch_assoc($res)) {

    print "
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td><a href='del-cat.php?id=$row[id]'>del</a> / <a href='edit-cat.php?id=$row[id]'>edit</a></td>
    </tr>";
}

print "</table>";
