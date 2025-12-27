<?php
echo "enter your number:\n";
$num=(int)trim(fgets(STDIN));
if($num%5==0 && $num%11==0)
    echo "$num is divisible by 5 and 11";
else
    echo "$num is not divisible by 5 and 11";


?>