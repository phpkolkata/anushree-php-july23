<?php
require "connection.php";

$sql = "select * from category";
$res = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="adding-prod.php" method="post">


    Catetgory:

<?php
print "<select name='cat_id'>";
while ($row = mysqli_fetch_assoc($res)) {
    print "<option value='$row[id]'>$row[name]</option>";
}
print "</select><br>";

?>
    Name:<input type="text" name="nm" ><br>
    Price:<input type="text" name="price"><br>
    Description:<input type="text" name="description" ><br>
    Image:<input type="text" name="im"><br>
    isActive:
        <select name="isa">
            <option value="y" >Yes</option>
            <option value="n" >No</option>
        </select><br>

        <button>Update Product</button>

</form>


</body>
</html>
