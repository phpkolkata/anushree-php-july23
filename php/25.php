<!-- important attribute while uploding file -   -->
<!-- method="post" enctype="multipart/form-data" -->

<?php

if (isset($_REQUEST['msg'])) {
    echo "<div style='color:red'>" . $_REQUEST['msg'] . "</div>";
}

?>


<form action="upload.php" method="post" enctype="multipart/form-data">

Name: <input type="text" name="nm"><br>
Image: <input type="file" name="im"><br>
<button>Submit</button>

</form>
