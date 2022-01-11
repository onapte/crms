<?php
#Variables
echo 'Variables'.'<br>';
$name =  'Manigandan';
$age = 19;
$isMale = true;
$salary = null;

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>'; //displays 1, if false prints empty space
echo $salary.'<br>';
echo gettype($name).'<br>'; //returns datatype
var_dump($name, $age); //prints all the info related to the variable. used for debugging
echo '<br>'.is_string($name); //string or not
echo '<br>'.is_int($age);
echo '<br>'.is_bool($isMale).'<br>';
echo isset($name); //evaluates to true is the var is declared
echo isset($address).'<br>';
define('PI', 3.14); //constants
echo PI.'<br>';
echo PHP_INT_MAX.'<br>'; //built in constants
echo SORT_ASC.'<br>';

#Number
echo 'Numbers'.'<br>';
$a = 1;
$b = 2;
$c = 2.5;
echo ($a + $b) * $c.'<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
$a += $b; echo $a.'<br>';
echo $a++ . '<br>'; //print and increment
echo ++$a . '<br>'; //increment and print
echo $a-- . '<br>';
echo --$a . '<br>';
is_float(1.25); // number checking functions. true here
is_integer(3.4); // false
is_numeric("3.45"); // true, whether the string is numeric as whole or not
is_numeric("3g.45"); // false
$strNumber = '12.35';
$number = (float)$strNumber; //Number Conversion
$number = floatval($strNumber);
$number = intval($strNumber);
var_dump($number);
echo '<br>'."abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 9, 3) " . min(2, 9, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br><br>'; //formatting numbers

#Strings
echo 'Strings'.'<br>';
$string = "    Hello World      ";
echo "1 - " . strlen($string) . '<br>' . PHP_EOL; //string functions, length of the string
echo "2 - " . trim($string) . '<br>' . PHP_EOL; //removes white spaces from beginning and end
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL; //left trim
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL; //rtrim
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL; //no. of words
echo "6 - " . strrev($string) . '<br>' . PHP_EOL; //reverse string
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL; //all to upper
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL; //all to lower
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL; //first letter to upper
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL; //first letter to lower
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL; //first letter in each word to upper
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; //searches for world in the string
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; //same as above but ignores the case
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL; //sub string from pos 8 to end of the string
echo "15 - " . substr($string, 8, 6) . '<br>' . PHP_EOL; //sub string from pos 8 to 6 char
echo "16 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; //replaces World by PHP
echo "17 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL; //same as above but ignores the case
// Multiline text and line breaks
$longText = "
  Hello, my name is Manigandan
  I am 19,
  I love playing video games
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL; //nl2br — Inserts HTML line breaks before all newlines in a string
$longText = "
  Hello, my name is <b>Manigandan</b>
  I am <b>19</b>,
  I love playing video games
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL; //prints html tags also without its effects
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL; //Convert HTML entities to their corresponding characters
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL; //converts some predefined characters to HTML entities.

#Arrays
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';  //pre for clear output
var_dump($fruits); // print_r
echo '</pre>';
// Get element by index
echo $fruits[1].'<br>';
// Set element by index
$fruits[0] = "Peach";
// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';
?>
