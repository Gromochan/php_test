<?php
$array =['where', 'is', 'my', 'money'];
$sum = 0;
for ($i = 0; $i <100; $i++){
  if($i % 3 == 0 && $i % 5 == 0){
    shuffle($array);
  }elseif($i % 3 == 0){
    echo "Hello! Hello! Hello! \n";
  }elseif($i % 5 == 0){
    $sum += $i;
  }
}

echo $sum;
print_r($array);
