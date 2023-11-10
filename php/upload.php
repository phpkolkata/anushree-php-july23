<?php
extract($_FILES['im']);

// [name] => result.png
// [full_path] => result.png
// [type] => image/png
// [tmp_name] => /tmp/phpVJqNZF
// [error] => 0
// [size] => 275067

$path = "uploads/";

$id = rand(1, 9999);
$new_name = $id . "-" . $name;
$full_path = $path . $new_name;

if ($error == 0) {

    if ($type == "image/png" || $type == "image/gif" || $type == "image/jpeg" || $type == "image/jpg") {
        copy($tmp_name, $full_path);
        // print "<img src='$full_path'>";
    } else {
        header("location:25.php?msg=wrong format");
        // die("wrong format");
    }

} else {
    header("location:25.php?msg=error uploading");
    // die("error uploading file");
}
