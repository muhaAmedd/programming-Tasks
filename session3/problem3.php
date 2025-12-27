<?php
echo "enter your number:\n";
$num=(int)trim(fgets(STDIN));
if($num>0)
    echo "$num is positive";
elseif($num<0)
    echo "$num is negative";
else
    echo "the number is zero";

?>