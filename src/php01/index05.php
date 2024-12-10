<?php

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz ="FizzBuzz";

for($i = 1 ; $i<=50 ; $i++){
    if($i %15 === 0){
        echo $FizzBuzz;
    }elseif($i %3 === 0){
        echo $Fizz;
    }elseif($i %5 === 0){
        echo $Buzz;
    }else{
        echo $i;
    }
}
echo "<br/>";
echo "<br/>";

for ($i = 1; $i < 6; $i++) {
  
    echo "●";
  
  echo "<br />";
}
echo "<br/>";
echo "<br/>";

for ($i = 1; $i <=5; $i++) {
  for ($j = 1; $j <=5; $j++) {
    echo "●";
  }
  echo "<br />";
}

echo "<br/>";
echo "<br/>";


  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
