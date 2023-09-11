 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method= "post">
    <label>Radius :</label>
    <input type="text" name="Radius"><br>
    <input type="submit" name="Calculate">
    
    </form>
</body>
</html>
<?php

$Rad= $_POST["Radius"];

 $circumference=null;
$circumference=2*pi()*$Rad;
$circumference=round($circumference);
$area=pi()*pow($Rad, 2);
$area=round($area);
echo "Circumference of circle is {$circumference} <br>";
echo "Area of circle is {$area}";




?>
