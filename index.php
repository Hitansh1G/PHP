<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="quantity"> quantity </label><br>
        <input type="text" name="quantity">
        <input type="submit" value = "total">
    </form>

</body>
</html>

<?php
    $item = "pizza";
    $price = "50";
    $quantity = $_POST['quantity'];

    $total = null;
    $total = $price * $quantity;

    echo " you have ordered {$quantity} {$item} for {$total}"; 

?>