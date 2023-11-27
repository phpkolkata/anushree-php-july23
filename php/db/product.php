<?php

require "connection.php"; // fatal error and stop execution

$sql = "SELECT *,`c`.`name` AS `cname`, `p`.`name` AS `pname`, `p`.`id` AS `pid` FROM `product` AS `p`,`category` AS `c` WHERE `p`.`cat_id` = `c`.`id`";
$res = mysqli_query($con, $sql);

print "<a href='add-prod.php'>Add more...</a>";

print "<table border='1' width='1000'>";

print "<tr>
        <th>id</th>
        <th>Name</th>
        <th>category</th>
        <th>price</th>
        <th>Description</th>
        <th>image</th>
        <th>isActive</th>
        <th>Option</th>
    </tr>";
while ($row = mysqli_fetch_assoc($res)) {
    print "
    <tr>
        <td>$row[pid]</td>
        <td>$row[pname]</td>
        <td>$row[cname]</td>
        <td>$row[price]</td>
        <td>$row[description]</td>
        <td>$row[image]</td>
        <td>$row[is_active]</td>
        <td><a href='del-prod.php?id=$row[id]'>del</a> / <a href='edit-prod.php?id=$row[id]'>edit</a></td>
    </tr>
    ";
}

print "</table>";
