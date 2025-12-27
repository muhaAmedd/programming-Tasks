<?php
echo "enter your character:\n";
$char=trim(fgets(STDIN));
if(($char>='a' && $char<='z') || ($char>='A' && $char<='Z'))
    echo "$char is an alphabet";
elseif($char>='0' && $char<='9')
    echo "$char is a digit";
else
    echo "$char is a special character";

?>