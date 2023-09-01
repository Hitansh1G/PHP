<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method ="POST" > 
        <label >x</label>
        <input type="text" name="x">
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php
    $x = $_POST['x'];
    $total = null;
    $total = abs($x);
    $total = round($total);
    $total = ceil($total);
    $total = floor($total);
    $total = pow($x , 3);
    $total = sqrt($total);
    $total = max($x,10,20);
    $total = min($x,10,20);
    $total = pi();
    $total = rand(1,10);

    echo $total;
?>