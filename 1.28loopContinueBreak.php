<?php
for ($i=0; $i<10; $i++){
    echo $i;
    echo PHP_EOL;

    if ($i==6){
        break;
    }
} 

echo PHP_EOL;

for ($i = 20; $i < 30; $i++){

    if($i<27){
        continue;
    }
    echo $i;
    echo PHP_EOL;
}