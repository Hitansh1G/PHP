<?php
    //this is variable (string)
    echo "Hello World!";
    $name = " hitansh";
    $email = "6HtXz@example.com";

    print_r($name);
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo "your email is {$email}";
    

    // for integers 
    $age = 21;
    echo $age;
    echo "you are age of {$age}";


    //for float
    $price = 2.5;
    echo "your pizza is {$price}";


    //for boolean
    $buy = true; // will output 1
    $buy = false; // will output 0
    echo "online status : {$buy}";

    //calculations 
    $total = null;
    echo $total = $price * $age;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order a pizza</button>
</body>
</html>