
<?php

//======== 1 ========

//a. convert string to uppercase
echo strtoupper("hello world!");
print '<br><br>';

//b. convert string to lowercase
echo strtolower("HELLO WORLD.");
print '<br><br>';

//c. first letter uppercase
echo ucfirst("hello world");
print '<br><br>';

//d. first letter of each word uppercase
echo ucwords("hello world");
print '<br><br>';



//========= 2 =========

//spliting numeric string to be date format 

$input = ' 085119';
$date = strtotime($input);
echo date(' h:i:s', $date);
print '<br><br>';



//=========== 3 =============
// sentence contains specific word

$word = "orange";
$mystring = "I am a full stack developer at orange coding academy";
// Test if string contains the word 
if(strpos($mystring, $word) == true){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
print '<br><br>';


//=================== 4 ===================

//extract file name from URL 

$path = "www.orange.com/index.php";
$file1 = basename($path);
// Show filename with file extension
echo $file1 ."<br><br>";


// Show filename without file extension
// $file2 = basename($path, ".php");
// echo $file2;



//====================== 5 ================
// extract user name from email address

  $email  = 'info@orange.com';
  // Get the username by slicing string
  $username = strstr($email, '@', true);
  // Display the username
  echo $username;

  print '<br><br>';




  //================== 6 ==================
  //last 3 char of string
  // substr return part of string

$str1 = 'rayy@example.com';
echo substr($str1,-3);

print '<br><br>';



//======================== 7 ===============
// simple random password

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data),0, $chars);
}
  echo password_generate(7);

print '<br><br>';




//================= 8 ==========

// replace first word

$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str); 

print '<br><br>';

//  Display replaced any word in string 
// $my_str = 'If the facts do not fit the theory, change the facts.';
// echo str_replace("facts", "truth", $my_str);
// print '<br><br>';





//================ 9 =================
// First difference between two strings

$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',$str_pos, $str1[$str_pos], $str2[$str_pos]);
print '<br><br>';


//====================10==============
// convert string to array

$fruits = 'Twinkle, twinkle, little star';
$fruits_ar = explode(', ', $fruits);
Var_dump($fruits_ar);
print '<br><br>';


//==================== 11 ============
// print next letter of inputted letter

$str = 'a';
echo ++$str; 

print '<br><br>';


//======================= 12 ================
// insert string at specified position in given string

$string = 'I am happy today.';
$replacement = ' very';

echo substr_replace($string, $replacement, 4, 0);
print '<br><br>';


//========== 13 =================
//Remove all Zeros from number
$string = "1450202305.420653000";
echo str_replace("0","",$string);
print '<br><br>';

// $new_string = '';
// for($i=0; $i<strlen($string) ; $i++){
//     if($string[$i] !== '0'){
//         $new_string .= $string[$i];
//     }
// }

// echo $new_string;



//=============== 14 ===============
//remove part of string

$str = "the quick brown fox jumps over the lazy dog";
echo str_replace("fox","",$str); 
print '<br><br>';


// =============== 15 ===============
//replace dashes (-) with spaces ( ) 

$string="text with dashes ---";
$test = str_replace("-", " ", $string);
echo $test;
print '<br><br>';




//=============== 16 ===============
  //  Remove Special Character From String
 
  
  function RemoveSpecialChar($str) {
 
    $res = str_replace( array( '/','\"\ ', '"',
    ':' , ';', '<', '-' , '+','*' ), ' ', $str);

    return $res;
    }

$str = '\"\ 1+2/32:2-3/4*3;"';

$str1 = RemoveSpecialChar($str);
echo $str1;

print '<br><br>';


//================ 17 ================
//select five first word 

$my_string = 'The quick brown fox jumps over the lazy dog';
//implode — Join array elements with a string

echo implode(' ', array_slice(explode(' ', $my_string),0, 5));

print '<br><br>';



// challenge
// 
$my_string2 = 'The+quick-brown*fox/jumpsover the lazy dog';
//implode — Join array elements with a string
$res2 = str_replace( array( '/','\"\ ', '"',
':' , ';', '<', '-' , '+','*' ), ' ', $my_string2);
echo implode(' ', array_slice(explode(' ', $res2),0, 5));

print '<br><br>';



 //============== 18 =================
 //remove comma

$b = "24,58.24,56,";
$t = str_replace(",", "", $b);
echo $t;
print '<br><br>';




//================ 19 ================
//print letter from a - z

 foreach (range('1', '10') as $char) {
  echo $char . "\n";
}
print '<br><br>';



//===============20============
// get first word of sentence
$value = "Test me more";
echo strtok($value, " "); 




?>