
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script lang="javascript">

    function check(){
        var nm = document.getElementById("nm");
        var age = document.getElementById("age");


        // alert(nm.value);
        if(nm.value == ""){
            alert("please enter name");
            return false;
        }
        else if(age.value <= 0){
            alert("please enter age");
            return false;
        }

        return true;
    }

    </script>
</head>
<body>
    <form action="23.php?x=33" method="post">
    Name:<input type="text" name="nm" id="nm"><br>
    Age:<input type="number" name="age" id="age"><br>
    Gender:
    <input type="radio" name="gen" value="male">Male
    <input type="radio" name="gen" value="female">Female


    <button onclick="return check()">Submit</button>
</form>

<!-- QUERY STRING - ?nm=raj&age=33 -->
<a href="23.php?nm=raj&age=33">click here</a>


</body>
</html>


<!-- when we use get method, data passes through url using  ?nm=raj&age=33&... -->
