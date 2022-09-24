<?php
// ================== 1 ================
$fir=1; $sec=10;
for($i=$fir; $i<$sec ; $i++){
    if($i<$sec){
       echo $i."-";   
   
} }
echo $sec;

echo"<br><br>";

// =================== 2 ===============

$sum = 0;
for($i=0; $i<=30 ; $i++){
	$sum +=$i;
}
echo "The sum of numbers : ".$sum;
echo "<br><br>";

// ================= 3 ==================
$str = 'A';
for ($i = 1; $i <= 5; $i++){
  for($j=5-$i;$j>0;$j--)
  echo "A ";
  for ($y=1 ; $y <= $i ; $y++)
  echo "$str ";
   echo "<br>";
  $str++;
 }  

echo "<br><br>";
// ================= 4 ==================
$num=1;
for ($i = 1; $i <= 5; $i++){
  for($j=5-$i;$j>0;$j--)
  echo "1 ";
  for ($y=1 ; $y <= $i ; $y++)
  echo "$num ";
   echo "<br>";
  $num++;
 }  

echo "<br><br>";
// ================= 5 ==================


for ($i = 0; $i < 5; $i++){
  for($j=1;$j<6;$j++){
    if($i==0&&$j==1){
      echo " 1 ";
    }else if($i==1&&$j==2){
      echo " 2 ";
    }else if($i==2&&$j==3){
      echo " 3 ";
    }else if($i==3&&$j==4){
      echo " 4";
    }else if($i==4&&$j==5){
      echo " 5 ";
    }else{
      echo " 0 ";
    }
    
  }

  echo "<br/>";
}


echo "<br><br>";

//======================= 6 ================
$n = 5;  
$factorial = 1; 
for ($i=1; $i<=$n; $i++)   
{  
  $factorial = $factorial * $i;
 
   
}  
echo "Factorial of $n is $factorial";  
echo "<br><br>";

// ====================== 7 ===================
//Fibonacci

$x = 0;    
$y = 1; 
$z=0;
echo $z." "; 
for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z." ";         
    $x=$y;       
    $y=$z;     
}  


echo "<br><br>";
//====================== 8 ======================
$str="Orange Coding Academy ";
// echo $str[5];
$sum=0;
for ($i = 0; $i < strlen($str); $i++){

  if($str[$i]=="c"||$str[$i]=="C"){
    $sum+= 1;
  }

}
echo $sum;
echo "<br><br>";
//====================== 9 ======================
echo "<table border =\"1\" style='border-collapse:collapse '  >";
 echo"<tr style='padding:3px'>";
 
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr> ";
		for ($col=1; $col <= 5; $col++) { 
		   $p = $col * $row;
		   echo "<td>".$row  .'*'. $col .'='. $p ."</td>";
		   	} 
	  	    echo "</tr>";
		}
		echo "</table>";

echo "<br><br>";
//===================== 10 =======================
for($i=1; $i<=50 ; $i++){

  if($i%3==0 && $i%5==0){
    echo "FizzBuzz ";
  }
  elseif($i%3==0){
    echo "Fizz ";
  }elseif($i%5==0){
    echo "Buzz ";
  }else{
     echo $i." " ;
  }
      
 }
echo "<br><br>";


//====================== 11 ===============

//function for floyd triangle
function FloydTriangle($n){
  $value = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value "; 
      $value++;
    }
    echo "<br>"; 
  }
}

FloydTriangle(5);



echo "<br><br>";

//=============== 12 =============

$size = 5;
    
// upside pyramid
for ($i = 1; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
      
        echo "A";

    }
    echo "<br>";
}
// downside pyramid
for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
        echo "A";
    }
    echo "<br>";
}
