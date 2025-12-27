<?php
echo "enter your first number:\n";
$num1=(int)trim(fgets(STDIN));
echo "enter your second number:\n";
$num2=(int)trim(fgets(STDIN));

if($num1>$num2){
    echo "$num1 is greater than $num2";
}else{
    echo "$num2 is greater than $num1";
}


?>