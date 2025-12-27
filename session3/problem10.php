<?php
echo "enter your character:\n";
$char=trim(fgets(STDIN));
if($char>='a' && $char<='z')
    echo "$char is a lowercase alphabet";
elseif($char>='A' && $char<='Z')
    echo "$char is an uppercase alphabet";



?>