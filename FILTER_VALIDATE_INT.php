<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="$_POST">
        username : <br>
        <input type="text" name="username "><br>
        age : <br>
        <input type="text" name="age "><br>
        email : <br>
        <input type="text" name="email "><br>

        <input type="submit" name="login" value="login">
    </form>

</body>
</html>

<?php
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, 'age','FILTER_VALIDATE_INT');
        if(empty($age)){
            echo "age is not valid";
        }
        echo "your age is {$age}";
        
    }
    
?>