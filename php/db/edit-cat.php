<?php
require "connection.php";

$id = $_REQUEST['id'];

$sql = "select * from category where id='$id'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);

// print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="editing-cat.php?id=<?php echo $id ?>" method="post">

<!-- <input type="hidden" name="id" value="<?php echo $id ?>"> -->

    Name:<input type="text" name="nm" value="<?php echo $row['name'] ?>"><br>
    isActive:
        <select name="isa">
            <option value="y" <?php echo $row['is_active'] == 'y' ? 'selected' : '' ?>>Yes</option>
            <option value="n"  <?php echo $row['is_active'] == 'n' ? 'selected' : '' ?>>No</option>
        </select><br>

        <button>Update Category</button>

</form>


</body>
</html>


<?php
// if ($x == 1) {
//     echo "hi";
// } else {
//     echo "bye";
// }

// turnary operator
// echo condition ? ture section : false section;
// echo $x == 1 ? "hi" : "bye";
?>