<?php
// + | - | * | / | % |
$number = 12;
// $number = $number +12;
// to easy way 
// $number +=12;
$number2 = $number - 20; 
echo "{$number2} {$number}\n";
// $result = $number / 2;
$result = $number * 2;
echo "$result \n";
$number3 = (13-3) *5;//BODMAS B->Brackets or DIvision Multiplications Addsion Substraction
echo "$number3 \n";
$number4 = (24- 4)/(7-2);
echo "$number4 \n";
$number *=12;
$number++;
$number--;
echo "$number \n";

$numberOne = 12 + 3; //operand + ->operator;
$x = $y = 2;
echo "{$x} \n {$y} ";
$numberTow = 8;
$numberThree = $numberTow++;
echo "{$numberThree}\n";
$num1 = 1223;
$octal = 0122;
$hexadecimel = 101010101;


printf("The Number is %d and %d & %d", $num1, $octal, $hexadecimel);
echo "\n";
printf("The Binary Equealent is  %b and %db& %b", $num1, $octal, $hexadecimel);
echo "\n";
printf("The Hexadecimel Equealent is %x and %x & %x", $num1, $octal, $hexadecimel);
echo "\n";

printf("The ocatal Equealent is  %d and %o", 65536,65536);
printf('ocral equevalnt %o = %d ',0200000,0200000);
// printf
$fName = "Taohidul";
$lName = "Islam";
echo "\n";
$output = printf('MY Name is %2$s %1$s ', $lName, $fName);
echo $output;

$fn = "Taohidul Islam";
$ln = "Tanvir";

$result = printf("My Full Name is %s, %s", $fn, $ln);
echo $result;



?>