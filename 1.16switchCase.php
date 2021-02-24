<?php
$n = 12;
$r = $n %2;

switch ($r){
    case 0;
       echo "{$n} is an even number \n";
       break;
    default: 
       echo "{$n} is an odd number \n";
}


$color = 'red';
switch($color){
    case 'red';
        echo "Red is our favourite color";
        break;
    case 'green';
        echo "Green is our favourite color";
        break;
    case 'blue';
        echo "Blue is not our favourite color";
        break;
    default:
        echo "This color is ok";
}