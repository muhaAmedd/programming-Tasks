<?php
echo "enter your character:\n";
$char=trim(fgets(STDIN));
$vowels=['a','e','i','o','u','A','E','I','O','U'];
for($i=0;$i<count($vowels);$i++){
    if($char==$vowels[$i]){
        echo "$char is a vowel";
        exit;
    }
}
echo "$char is a consonant";


?>