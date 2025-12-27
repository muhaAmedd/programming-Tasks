<?php
echo "enter your number:\n";
$num=(int)trim(fgets(STDIN));
if($num%2)
    echo "$num is odd";
else
    echo "$num is even";

?>