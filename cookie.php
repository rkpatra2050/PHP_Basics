<?php
setcookie("Favorite_food", "Mutton", time()+(86400*3), "/");
setcookie("less", "egg", time()+(86400*2), "/");
setcookie("Favorite_foodd", "Chicken", time()+(86400*4), "/");



// foreach($_COOKIE as $key => $value) {
// echo $key."=".$value."<br>";

// }
if(isset($_COOKIE["Favorite_food"])){
    echo "Your favorite food is {$_COOKIE["Favorite_food"]}";
}
else{
    echo "You have no favorite food";
}


?>