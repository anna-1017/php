<?php
function outputNumber($a)
{
	echo "引数の値は" . $a . "です";
	return;
}

echo outputNumber(2);

echo"<br/>";
echo"<br/>";

function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 3);
echo $total;

echo"<br/>";
echo"<br/>";


function Score($score1,$score2,$score3) 
{
    $value = $score1 + $score2 + $score3;
    return $value;
    if($value > 210){
        echo $value."点なので合格です";
    }else{
        echo $value."点なので不合格です";
    }
}
echo (Score(20, 60, 90));

echo"<br/>";
echo"<br/>";

function triangle($bottom,$height)
{
    return $bottom * $height /2 . "&#13216";
}
function square($height,$bottom)
{
    return $height * $bottom . "&#13216";
}
function trapezoid($top,$bottom,$height)
{
    return ($top + $bottom) * $height /2 . "&#13216";
}
    
echo (triangle(6,3)) . "<br/>";
echo (square(5,4)) . "<br/>";
echo (trapezoid(6,9,4));
echo"<br/>";
echo"<br/>";

function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }

}
echo (exam(80, 60, 90));