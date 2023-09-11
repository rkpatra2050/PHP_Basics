<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post"> 
        <label>Multiplication Table Number :</label><br><br>
        <input type="text" name="multiplication">
        <input type ="submit" value="Generate">
        
    </form>
</body>
</html>

<?php
$table= $_POST["multiplication"];
for ($i=1; $i <=10; $i++) { 
   echo $table."*".$i."= ".$table*$i. "<br>";

}







?>



