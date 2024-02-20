<?php
function text($number1, $number2) 
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 3);
echo $total . "<br />";

function score($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo "合計点は" . $total . "なので合格です";
    }else{
        echo "合格点は" . $total . "なので不合格です";
    }
}
$exam = score(70, 70, 71);
echo $exam . "<br />";

function triangle($base, $height)
{ 
 return $base * $height / 2;
}
function square($base, $height)
{
 return $base * $height;
}
function trapezoid($base, $upperbase, $height)
{
 return ($base + $upperbase) * $height / 2;
}

echo triangle(3, 3). "<br />";
echo square(3, 3). "<br />";
echo trapezoid(3, 3, 3);