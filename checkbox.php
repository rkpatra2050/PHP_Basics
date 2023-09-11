<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
    
    <input type="checkbox" name=Foods[] value="Chicken">Chicken<br>
   <input type="checkbox" name="Foods[]"value="Egg">Egg<br>
   <input type="checkbox" name=Foods[] value="Mutton">Mutton<br>
   <input type="checkbox" name=Foods[] value="Fish">Fish<br>
   <input type="submit" name="submit">


</form>
</body>
</html>




<?php
if(isset($_POST["submit"])){

$foods=$_POST["Foods"];

foreach($foods as $food){
    echo $food . "<br> ";
}

}
// if(isset($_POST["Submit"])){

// if(isset($_POST["Chicken"])){
//     echo "You like Chicken <br>";
// }
// if(isset($_POST["Mutton"])){
//     echo "You like Mutton <br>";
//     }
//  if(isset($_POST["Egg"])){
//    echo "You like Egg <br>";
//    }
// if(isset($_POST["Fish"])){
//     echo "You like Fish <br>";
//     }        
// if(empty($_POST["Chicken"])){
//     echo "You don't like chicken <br>";
// }
// if(empty($_POST["Egg"])){
//     echo "You don't like Egg <br>";
// }
// if(empty($_POST["Mutton"])){
//     echo "You don't like Mutton <br>";
// }
// if(empty($_POST["Fish"])){
//     echo "You don't like Fish <br>";
// }

// }
?>