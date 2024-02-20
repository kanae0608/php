<?php
for ($i = 1; $i <=5; $i++){
    echo  $i*2;
    echo "<br />";
}

$count = 0;
while ($count < 21){
    echo "$count " . "<br />";
    $count +=1;
}

$count = 0;
while ($count <20){
    $count +=1;
    echo $count . "<br />";
}

$count = 1;
while ($count <= 100){
    if ($count == 3){
        $count++;
        continue;
        }
    if ($count == 6){
        $count++;
        continue;
    }
      if ($count == 9){
        $count++;
        continue;
    }
      if ($count == 12){
        $count++;
        continue;
    }
    if ($count ==20 ){
        break;
    }
    echo $count . "<br />";
    $count++;
}
$count = 0;
while ($count <=100){
    if($count == 20){
        break;
    }
    if($count % 3 == 0){
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}
//==でも===でも同じ？

$nume = 0;
do{
    echo "num=" . $nume . "<br />";
    $nume++;
} while ($nume <3);
//60行目　$nume++;でも$nume+=1;でもどっちでもいい？



//ここから応用問題
$fizz = "Fizz";
$buzz = "Buzz";
$fizzbuzz = "Fizbuzz";
$num = "数字";
for ($num = 1; $num <=50; $num++){
    if($num % 15 == 0){
        echo $fizzbuzz ."<br />";
    }elseif($num % 5 == 0){
        echo $buzz ."<br />";
    }elseif($num %3 == 0 ){
        echo $fizz ."<br />";
    }else{
        echo $num ."<br />";
    }
}


for($i = 1; $i <6; $i++){
    for($j =1; $j < 6; $j++){
        echo "⚫︎";
    }
    echo "<br ?>";
}