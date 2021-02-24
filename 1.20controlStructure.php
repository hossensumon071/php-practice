<?php
 
 $n = 12;

 if ($n%2==0){
     echo "Even Number";
 } else {
     echo "odd number";
 }

 echo PHP_EOL;

 if  ($n%2==0):
     echo "Event Number";
     echo  PHP_EOL;
     echo "Some Text";
elseif (true):

else:
     echo "Odd Number";
     echo PHP_EOL;
     echo "Some Text++";
endif;

echo PHP_EOL;

switch ($n%2):
    case 0:
    echo "Even Number";
    break; 
    default:
    echo "Odd Number";
endswitch;