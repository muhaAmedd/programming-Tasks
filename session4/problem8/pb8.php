<?php
$price=$_POST['price'];
$method=$_POST['payment'];

if($method=="Cash"){
    echo "Total price = $price";
}
else
    echo "Total price = ".($price+($price*0.05));

?>
