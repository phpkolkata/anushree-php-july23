<?php
// CRUD - CREATE, READ, UPDATE, DELETE
// include "connection.php";  // warning generate, if not found, execution continue
require "connection.php"; // fatal error and stop execution

// pagination counting
$sql = "select * from `category`";
$res = mysqli_query($con, $sql);
$tot = mysqli_num_rows($res);

// print $tot;
$limit = 3;
$start = 0;

if (isset($_REQUEST['p'])) {
    $start = ($_REQUEST['p'] - 1) * $limit;
}

$pages = ceil($tot / $limit);

echo $pages;

// search option
$where = "";
$_GET['srch'] = "";
if (isset($_GET['srch'])) {
    $where = "WHERE name like '%$_GET[srch]%'";
}

// main query
$sql = "select * from `category` $where LIMIT $start,$limit";
print $sql;
$res = mysqli_query($con, $sql);

print "
<form action='' method='get'>
Search <input type='search' name='srch' value='$_GET[srch]'><button>Search</button>
<a href='category.php'>view all</a>
</form>

";

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

for ($i = 1; $i <= $pages; $i++) {
    print "<a href='?p=$i'>$i</a> |";
}
