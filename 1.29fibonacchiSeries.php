<?php
 // 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584

 $veryold = 0;
 $sold = 1; 
 $new = 1;

 for($i=0; $i<10; $i++){
     echo $veryold."";
     $old = $new;
     $new = $old + $veryold;
     $veryold = $old;
 }

 ?>

 initial
 v = 0
 o = 1
 n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2

3rd loop
v = 2
o = 2
n = 3
