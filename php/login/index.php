
<?php
if (isset($_REQUEST['msg'])) {
    print "<div>$_REQUEST[msg]</div>";
}

?>


<h1>Login</h1>

<form action="login-check.php" method="post">
    email:<input type="text" name="nm"><br>
    pass:<input type="password" name="pass"><br>
    <button>Login</button>
</form>
