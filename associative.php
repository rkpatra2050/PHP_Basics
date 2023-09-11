<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative.php" method="post">

    <label> Enter the number: </label><br>
    <input type="text" name="enter_number">
    <input type="Submit" value="Enter">

</form>
</body>
</html>


<?php
$day= array("1"=>"monday","2"=>"tuesday","3"=>"wednesday","4"=>"thursday","5"=>"saturday","6"=>"sunday","7"=>"saturday");
$number=$day[$_POST["enter_number"]];
echo"The Entered Number is {$number}";


?>