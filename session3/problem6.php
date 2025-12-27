<?php
echo"enter Days of the year:\n";
$days=(int)trim(fgets(STDIN));

if($days==365)
    echo "it is a normal year";
else
    echo "it is a leap year";

?>