<?php

//================== 1 =================


$myNum =5;
function primeNumber($myNum){
for($i = 2; $i < $myNum; $i++) {
  if($myNum % $i == 0){
   echo $myNum." is not a prime number."; 
   break;
  }
  else{
    echo $myNum." is a prime number.";
    break;
  }
}
}
primeNumber($myNum);

echo "<br><br>";

//========================= 2 ===================


$string = "remove";  
function reverseString($string){
   echo "Reverse string of $string is " .strrev ( $string );   
}

reverseString($string);
 echo "<br><br>";



//================ 3 =================


// PHP program to check given string is 
// all characters -lowercase characters
  
$str= 'remove';
function lowercaseCheck($str){
   if (ctype_lower($str)) {
         
        echo "Ok";
    } else {
          
        echo "No";
    }
}  
lowercaseCheck($str);
 echo "<br><br>";


//===================== 4 ===================
$x=5;
$y=9;

function swapValues($x,$y){
    $z=$x;
     echo "x=". $x=$y;

    echo "<br>";
    echo "y=".$y=$z;
   
  
}
swapValues($x,$y);
 echo "<br><br>";



//=================== 6 ===============

// $number = 407;

// function armstrongNumber($number){
//      $array  = array_map('intval', str_split($number));
// //    echo $array[0]**3+$array[1]**3+$array[2]**3;
//     if($array[0]**3+$array[1]**3+$array[2]**3===$number){
//         echo "ok";
//     }else{
//         echo "no";
//     }
//     echo "<br><br>"; 
// }
// armstrongNumber($number);


// echo "<br><br>"; 



$number = 407;
function armstrongNumber($number){
    $sum=0;
    $numlength = strlen((string)$number);

     $array  = array_map('intval', str_split($number));

for($i=0 ; $i < $numlength ; $i++ ){
$sum += $array[$i]**3;
}
 if ($sum===$number){
    echo "ok";
}else{
    echo "no";
}

 }

armstrongNumber($number);


echo "<br><br>"; 



//======================= 7 ===================

//palindrome string

  $string1 = "Eva, can I see bees in a cave";

  function palindromeString($string1){

 //remove specail char
   $res = str_replace( array( '/','\"\ ', '"',
    ':' , ';', '<', '-' , '+','*',' ',',' ), '', $string1);
    
   //convert string to lower case 
    $res2=strtolower($res);
   
   $stringRev=strrev ( $res );
   $stringRevLowercase=strtolower($stringRev);
  
   if($res2===$stringRevLowercase){
    echo"Yes,it is a Palindrome string";
   }else{
    echo" No,it is not a Palindrome string";
   }
   }
   palindromeString($string1);

   echo "<br><br>";



//palindrome number
//  $string = 1235321; 
//  function palindrome($string){
//     if($string==strrev ( $string )){
//         echo "$string is a Palindrome number"; 
//     } else{
//         echo "$string is not  a Palindrome number";
//     }   
//  }
//  palindrome($string);
//   echo "<br><br>";






 //============================== 8 ===================


function removeDuplicate( $arr){
    echo print_r(array_unique($arr));
}
removeDuplicate([2, 4, 7, 4, 8,4,9,8]);
echo "<br><br>";



//=============    logical operators    =====================
//===========================================================



//================= 1 ==============

//L will return 1 if it is a leap year, 0 otherwise
// echo date('L');

// // use your own timestamp
// echo date('L', strtotime('last year'));

//for specific year
$year = 2020;
$leap = date('L', mktime(0, 0, 0, 1, 1, $year));
echo $year . ' ' . ($leap ? 'is' : 'is not') . ' a leap year.';

 echo "<br><br>";

// ================== 2 ==============

$temp=25;
function seasonCheck($temp){
    if($temp<20){
        echo "it is winter";
    }else{
        echo "it is summer";
    }
}
seasonCheck($temp);
 echo "<br><br>";

//================== 3 ===============
$first=2;
$second=2;
function sumIntegers($first, $second){
    if($first==$second){
        $sum=($first+$second)**3;
        echo $sum;
    }else{
        echo "not same numbers";
    }

}

sumIntegers($first, $second);
echo "<br><br>";
//================== 4 ===============
$fir=10;
$sec=10;
function sumIntegers2($fir, $sec){
    if($fir+$sec== 30){
        $sum1=($fir+$sec);
        echo $sum1;
    }else{
        echo "false";
    }

}

sumIntegers2($fir, $sec);
echo "<br><br>";
//================= 5 ==============
$a=20;
function multiple3($a){
    if($a%3==0){
        echo $a." is multiple of 3";
    }else{
        echo $a."  is not multiple of 3" ;
    }
}

multiple3($a);
echo "<br><br>";


//================6 ==============
$number=40;
function rangeNumbers($number){
    if($number<=50&&$number>=20){
        echo "true";
    }else{
        echo "false";
    }
}
rangeNumbers($number);
echo "<br><br>";




//============ 7 ==============
$num1=20;
$num2=15;
$num3=22;
function largestInteger($num1,$num2,$num3){


if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{
  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
}
}
largestInteger($num1,$num2,$num3);
echo "<br><br>";

// ===================8 ===========
$units=200;

function monthlyElec($units){

    if($units<=50){
        echo 2.5*$units."JOD";
    }elseif($units>50 && $units<=100){
        echo 5*$units."JOD";
    }elseif($units>100 && $units<=250){
        echo 6.20*$units."JOD";
    }else{
        echo 7.5*$units."JOD";
    }
}
monthlyElec($units);
echo "<br><br>";

//============= 9 ==============
$x=5; $y=10; $operation="subtraction";
function calcu($x,$y,$operation){
    if($operation=="addition"){
        echo $x+$y;
    }
    elseif($operation=="subtraction"){
        echo $x-$y;
    }elseif($operation=="multiplication"){
        echo $x*$y;
    }else{
        echo $x/$y;
    }
}
calcu($x,$y,$operation);

echo "<br><br>";

// ================ 10 =======
$age=20;
function eligibleToVote($age){
    if($age>=18){
        echo "is eligible to vote";
    }else{
        echo "is no eligible to vote";
    }
}
eligibleToVote($age);

echo "<br><br>";


//===================11========
$num=-5;
function numbersSort($num){
    if($num>=0){
        echo"positive";

    }elseif($num=0){
        echo"zero";

    }else{
        echo"negative";
    }
}

numbersSort($num);
echo "<br><br>";


//================= 12==============
// $one=90 ; $two= 92; $three=95 ; $four=80 ; $five=85 ; $six=99 ;$seven=96 ; $eight=91 ;
// function grade($one,$two, $three, $four ,$five,$six, $seven,$eight){
//     $avg=($one+$two+$three+$four+$five+$six+$seven+$eight)/8;

//     switch($avg>0){

//         case $avg>=95 && $avg<=100 :
    
//        echo"A";
//             break;
    
//         case  $avg>=85 && $avg<=94 : 
//        echo"B";
       
//         break;
    
//         case $avg>=70 && $avg<=84 : 
        
//        echo"C";
    
//         break;
    
//         case  $avg>=50 && $avg<=69 :  
       
//        echo"D";
//         break;
//         case  $avg>=0 && $avg<=49 : 
      
//        echo"E";
        
        
//         }
// }
// grade($one,$two, $three, $four ,$five,$six, $seven,$eight);



//=======================================================

function grade1(array $values){
    $avg = array_sum($values)/count($values);
// echo $avg;

    switch($avg){

        case $avg>=90 && $avg<=100 :
    
       echo"A";
            break;
    
        case  $avg>=80 && $avg<=89 : 
       echo"B";
       
        break;
    
        case $avg>=70 && $avg<=79 : 
        
       echo"C";
    
        break;
    
        case  $avg>=60 && $avg<=69 :  
       
       echo"D";
        break;
        case  $avg>=0 && $avg<=59 : 
      
       echo"F";
        
        
        }
}
grade1([90,80,88,85,86,90,100]);



?>


