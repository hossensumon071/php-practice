<?php


// if(true){
//     if(true){
//         if(true){
//             echo "hello";
//         }else{
//             echo "no 1";
//         }
//     }else{
//         echo "no 2";
//     }
// }else {
//     echo "no 3";
// }

$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1){
    if($condition2){
        if($condition3){
            echo "hello";
        }else{
            echo "no 1";
        }
    }else{
        echo "no 2";
    }
}else {
    echo "no 3";
}

echo"\n";

if( $condition1 && $condition2 && $condition3 ){
    echo "Hello";
} elseif($condition1 && $condition2){
    echo "no 2";
} else {
    echo "no 3";
}