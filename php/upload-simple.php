<?php
print "<pre>";
print_r($_POST);

print_r($_FILES);

extract($_FILES['im']);

// echo $name;

copy($tmp_name, "uploads/$name");
