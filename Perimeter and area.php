<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method = "POST">
        <label>Radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">


    </form>
</body>
</html>

<?php
    $radius = $_POST['radius'];
    $perimeter = null;
    $perimeter = 2*3.14*$radius;
    // echo $perimeter;
    echo "perimeter of circle is {$perimeter} <br>";
    $area = null;
    $area = 3.14*$radius*$radius;
    echo "area of circle is {$area}";


?>