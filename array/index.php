<?php
 //================== 1 ===========
 $arr=array('red','green','white');

echo "The memory of that scene for me is like a frame of film forever frozen 
at that moment: the $arr[0] carpet, the $arr[1] lawn, the $arr[2] house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon";
 echo "<br><br>";
 //================== 2 ============
 
     echo "<ul>";
     foreach(array('white', 'green', 'red') as $colors) {
         echo "<li>".$colors."</li>";
     }
     echo "<br><br>";
    
     //============= 3 ===============
	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 


   asort($cities);
    foreach($cities as $x => $x_value) {
        echo "The Capital of ". $x . " is " . $x_value."<br>";
        echo "<br>";
      }
    echo "<br><br>";

//     $cities = array_flip($cities);
//     echo($cities[0]);
// // for($i=0;$i<count($cities);$i++){

// // }
//    // write city name
//    $key = array_search ('France', $cities);
//     echo "The Capital of $cities[$key] is $key  ";
    
// ================== 4 ===================
	$color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo array_values($color)[0];
    echo "<br><br>";

//=================== 5 =======================
$original = array( '1','2','3','4','5' );

$addElement = '$';
//array_splice — Remove a portion of the array and replace it with something else
array_splice( $original,3,0, $addElement ); 
echo " After inserting '$' the array is : ";

foreach ($original as $x) 
{echo "$x ";}
echo "<br><br>";

//================ 6 ====================
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
foreach($fruits as $x => $x_value) {
  echo  $x . " = " . $x_value;
  echo "<br>";
}
echo "<br><br>";

//======================= 7 =================
$data=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

$avg = array_sum($data)/count($data);
echo "Average Temperature is: ". $avg;

sort($data);
// print_r($data) ;

echo "<br>";
echo "List of seven lowest temperatures: ".implode(", ", array_slice($data, 0, 7));
echo "<br>";
echo "List of seven highest temperatures: ".implode(", ", array_slice($data, -7, 7));
echo "<br><br>";


// ================================== 8 ====================
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

print_r(array_merge($array1,$array2));
echo "<br><br>";
// ================== 9 ===========================

$colors = array("red","blue", "white","yellow");
// Step 1: flip array key => value
$colors = array_flip($colors);
// // Step 2: change case of new keys to upper
$colors = array_change_key_case($colors, CASE_UPPER);
// // Step 3: reverse the flip process to 
// // regain strings as value
$colors = array_flip($colors);
print_r($colors);

echo "<br><br>";
// ======================== 10 ====================
$colors2  = array("RED","BLUE", "WHITE","YELLOW");

$colors2 = array_flip($colors2);

$colors2 = array_change_key_case($colors2, CASE_LOWER);

$colors2 = array_flip($colors2);
print_r($colors2);
echo "<br><br>";

// ============================ 11 =====================

//range(first,last,increment by number)
// echo implode(",",range(200,250,4))."\n";
$new = array();
for($i=200;$i<=250;$i++){
    if($i%4==0){
        array_push($new,$i);
    }
}
echo implode(", ", $new);
echo "<br><br>";

// ============================== 12 =====================

$words =  array("abcd","abc","de","hjjj","g","wer");
//array_map — Applies the callback to the elements of the given arrays
$new_array = array_map('strlen',$words);
// print_r($new_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';


echo "<br><br>";
// ================================ 13 =============================
$n=range(1,20);
 shuffle($n);
for ($i=0; $i< 10; $i++)
{
echo $n[$i].' ';
}
echo "<br><br>";


// =============================== 14 ==============================
//  $numbers = array( 2, 0, 10, 12, 6);
//  sort($numbers);
//  if($numbers [0]==0){
//     echo $numbers[1];
//  }
 $numbers = array( 2, 0,0, 10, 12, 6,3);
 $star=array();
for($i=0; $i< count($numbers); $i++){
    if($numbers[$i]!==0){
        array_push($star,$numbers[$i]);
    }
}
sort($star);
print_r($star[0]);
echo "<br><br>";


////////////////////////////////12 method2

$d =  array("abcd","abc","de","hjjhhj","g","wer");
$shortStr = strlen($d[0]);
foreach ($d as $element) {
    if (strlen($element) < $shortStr) {
        $shortStr = strlen($element);
    }
    
}
$longStr = strlen($d[0]);
foreach ($d as $element) {
    if (strlen($element) > $longStr) {
        $longStr = strlen($element);
    }
   
}
echo "The shortest array length is " . $shortStr; 
echo"<br>";
echo "The longest array length is ". $longStr;
