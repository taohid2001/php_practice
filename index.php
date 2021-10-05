<?php
// php conditional statement
$numberOne  = 13;
$numberTwo = 13;

if ($numberOne % 2 == 0) {
    echo "{$numberOne} Is Even Nunber";
}else{
    echo "{$numberOne } Is Odd Number";

}
echo "\n";
if($numberOne < 10){
    echo "{$numberOne} is less than 10";

}else {
    
    echo "{$numberOne} is greather Than 10";
}

 echo "\n";
$number_1 = 12;
if($number_1 % 2 == 0){
echo "{$number_1} is a even number";
}else {
    echo "{$number_1} is odd nunber";
}
echo "\n";
$number_2 = 14;
$number_3 = 14;
if ($number_2 == $number_3) {
    echo "{$number_2} & {$number_3} is same number";
}else{
    echo "{$number_2} & {$number_3} is different  number";
}
echo "\n";
$age = 12 ;
if($age >= 13 && $age <=19){
    echo "This person is a teenager";
}else {
    echo "This person is not a teenager";
}
echo "\n";
$food = "salmon";
if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has Vitamin D";
}elseif("apple" == $food){
    echo "{$food} Dosen't Contain vitamin D";
}else {
    echo "We don't know if {$food} contains vitamin D";
}
// 1. divisible by 4?
//2. divisible by 100?
//3. divisible by 400?
echo "\n";
$year = 2020;
if ( $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0  ) {
echo "{$year} is a leap year";
}elseif($year % 4 == 0 && $year % 100 ==0){
echo "{$year} is not a leap year";
}elseif($year % 4 == 0){
echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo "\n";
if ($year % 4 == 0 &&($year % 100 != 0 || $year % 400 ==0)) {
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year";
}

echo "\n";
//ternary operator
$number_4 = 2;
echo (12 == $number_4)?"twelve": "A number";
echo "\n";
echo ($number_4  % 2 == 0)?'even numner':'odd number';
echo "\n";
// switch case 

$number_5 = 13;
$result = $number_5 % 2;
switch($result){
    case 0:
        echo "{$number_5} is even number";
        break;
        default : 
        echo "{$number_5} is odd number \n";
}
/*
$num_1 = 12;
if ($num_1 % 2 ==0) {
    echo "{$num_1} is an Even Number \n";
}else{
    echo "{$num_1} is an Odd Number \n";
}
*/
$num_1 = 12;
if ($num_1 % 2 == 0):
    echo "even";
    echo PHP_EOL;
    echo "Some Text";
else:
    echo "odd Number";
    echo PHP_EOL;
    echo "Some 'Text++";
endif;

 for($i = 0 ; $i<=10; $i++){
     echo "{$i}";
     echo PHP_EOL;
 }
echo "While loop \n";
$i = 0;
 while($i<10){
     $i++;
     echo $i.PHP_EOL;
 }
 do{
     $i++;
echo $i.PHP_EOL;
 }while($i<10);

echo "Goto \n";
 $j=0;
 a:$j++;
 echo $j.PHP_EOL;
if($j<10) goto a;


for($i = 10, $j = 1; $i>0; $i-= 1,$j++){
    echo $i. ' : ' .$j.PHP_EOL;
}

$num = 4;
for($i=$num, $factorial=1; $i>1; $i--) {
$factorial *= $i;
}
printf("Factorial of %d id %d", $num, $factorial);

for($x = 0; $x <= 12; $x++){
 
    if ($x == 7) {
    continue;
    echo $x.PHP_EOL;
   }
}
  //Fibonaci 
  $veryold = 0;
  $old = 1;
  $new = 1; 

  for($i = 0; $i < 50; $i++){
      echo  "{$veryold}   ".PHP_EOL;
      $old = $new;
      $new = $old+$veryold;
      $veryold = $old;

  }
?>