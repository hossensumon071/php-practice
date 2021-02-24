<?php
$n = -12;
$r = $n % 2;
switch ($r){
    case 0:
        switch($n){
            case $n>0;
              echo "$n is a positive even number";
              break;
            case $n<0;
              echo"$n is a negative number";
              break;
        }
        break;
    default:
    switch($n){
        case $n>0;
           echo "$n is a positive odd number";
        case $n<0;
           echo "$n is a negative odd number";
           break;
    }
}
