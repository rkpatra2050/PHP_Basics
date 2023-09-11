<?php

$date="Monday";
switch($date){
    case "Sunday":
        echo "Holiday";
        break;
    case "Monday":
        echo "First work Day";
        break;
    case "Tuesday";
        echo "This is Tuesday";
        break;
    case "wednesday";
        echo "Mid Holiday";
        break;
    case"Thrusday":
       echo "This is thrusay";
       break;
    case "Friday":
        echo "This is  friday";
        break;
    case "Saturday":
        echo "This is saturday";
        break;
    default:
        echo "This is invalid";
}
?>