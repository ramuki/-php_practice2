<?php

//課題1

$name = "kimura";

if ($name == "kimura") {
  echo "「私は あなたの名前 です」";
} else {
  echo "「あなたの名前ではありません」";  
}
  echo "\n";
  echo "\n";
  
//課題2  

$sum = 0;
  for($i = 1; $i <= 10000; $i++) {
  $sum += $i;
 }
print "合計は".$sum;
  echo "\n";
  echo "\n";
  
//課題3  

$fruits = array("apple", "orange", "lemon","strawberry","kiwi");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}
  echo "\n";
  
//課題4  

// for文の始めの値を定義する /
$start = 1;
// for文の終わりの値を定義する */
$end = 105;
$i = 5;
for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
} 