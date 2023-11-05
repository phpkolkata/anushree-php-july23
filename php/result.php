<?php
// print "<pre>";
// print_r($_POST);

// $nm = $_POST['nm'];
// $age = $_POST['age'];
// $class = $_POST['class'];
// $sec = $_POST['sec'];
// $eng = $_POST['eng'];
// $math = $_POST['math'];
// $sci = $_POST['sci'];
extract($_POST);
$tot = $eng + $math + $sci;
$avg = $tot / 3;

if ($avg <= 33) {
    $res = "fail";
} elseif ($avg <= 45) {
    $res = "3rd division";
} elseif ($avg <= 75) {
    $res = "2nd division";
} elseif ($avg > 75) {
    $res = "1st division";
} else {
    $res = "invalid";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>

<div class="container"></div>
    <div class="row mt-4">
        <div class="col-2"></div>
        <div class="col-8 card shadow">

            <div class="row">
                <div class="col-3"><img src="images/logo.png"></div>
                <div class="col-9">
                    <h1 class="text-center mt-5 pt-3">Kolkata Univercity</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-1">Name :</div>
                <div class="col-1"><?php echo $nm ?></div>
                <div class="col-1">Age :</div>
                <div class="col-1"><?php echo $age ?></div>
                <div class="col-4"></div>
                <div class="col-1">Class :</div>
                <div class="col-1"><?php echo $class ?></div>
                <div class="col-1">Sec :</div>
                <div class="col-1"><?php echo $sec ?></div>
            </div>



        </div>
        <div class="col-2"></div>
    </div>
</div>

</body>
</html>
