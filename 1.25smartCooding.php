<?php
$n = 5;
$result = 1;
for($i = $n; $i>1; $i--){
    $result *= $i;
}

echo "factorial of {$n} is {$result} \n";

$j=1;

for($n = 1; $n <= 10; $n++){
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
}

echo "Total {$j} number of Operations \n";

$result = 1;
$j = 1;
for($n=1; $n<=20; $n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}

echo "Total {$j} number of Oparetions \n";