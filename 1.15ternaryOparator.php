<?php 
//  ternary operator

$n = 12;
if( 12 == $n){
    echo "Twelve";
}else if(10 == $n){
    echo "Ten";
} else{
    echo "A Number";
}

echo "\n";

$numberInWord = (12 == $n) ? "Twelve" : "A Number";
echo $numberInWord;