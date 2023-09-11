<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">

    <input type="radio" name="credit_card" value="Master card"> Master Card<br>
    <input type="radio" name="credit_card" value="visa"> visa Card<br>
    <input type="radio" name="credit_card" value="SBI card"> SBI Card<br>
    <input type="radio" name="credit_card" value="Hdfc Card">HDFC Card<br>
    <input type="submit" name="confirm" value="confirm">

    </form>
</body>
</html>

<?php

// if(isset($_POST["confirm"]))
// {
//     if(isset($_POST["credit_card"]))
//     {
//         $credit_card=$_POST["credit_card"];
//         echo "{$credit_card } is your favorite credit Card <br>";
//     }
//     else{
//         echo "Please make a selection first";
//     }
// }
$creditcard=null;
if(isset($_POST["confirm"])){
    if(isset($_POST["credit_card"])){
        $creditcard=$_POST["credit_card"];
    }
        if($creditcard=="Master card"){
            echo "You like Master Card";
        }
        elseif($creditcard=="visa"){
            echo "You like Visa Card";
        }
        elseif($creditcard=="SBI card"){
            echo "You like SBI Card ";
        }
        elseif($creditcard=="Hdfc Card"){
            echo "You like HDFC Card";
        }
        else{
            echo "Please make a selection";
  }

}

?>