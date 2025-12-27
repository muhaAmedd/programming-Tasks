<?php
echo"enter three numbers:\n";
$num1=(int)trim(fgets(STDIN));
$num2=(int)trim(fgets(STDIN));
$num3=(int)trim(fgets(STDIN));
if($num1>=$num2 && $num1>=$num3)
    echo "$num1 is the greatest number";
elseif($num2>=$num1 && $num2>=$num3)
    echo "$num2 is the greatest number";
else
    echo "$num3 is the greatest number";

?>