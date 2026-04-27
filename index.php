<?php
//  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>1 display
// echo "Hello,\n World! <br>";
// echo "<pre>";
// echo "Hello\nWorld\tPHP";
// echo "</pre>";

// // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>2 variables
// $name="Hammad";
// echo "My name is : $name <br>";

// $rnol= 123;
// echo "My roll number is : $rnol <br>";

// $no=5;
// echo "The value of no is : $no <br>"; 
// $no=10;
// echo "The value of no is : $no <br>";

// // >>>>>>>>>>>>>>>>>>>>>>>>>3 concatenation
// $fname="Hammad";
// $lname="Fida";
// echo "Full name is : " . $fname . " " . $lname . "<br>";
// echo $fname." ".$lname."<br>"."Full name is : " . $fname . " " . $lname . "<br>";

// 4 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>operators
// Arithmetic operators
// +, -, *, /, %
// $a = 10;
// $b = 5;
// $c= $a + $b;
// echo "add:\t".$c;
// echo "Addition: ($a + $b) = " . ($a + $b) . "<br>";

// echo "Addition: \t " .($a + $b) . "<br>";
// echo "Subtraction: " . ($a - $b) . "<br>";
// echo "Multiplication: " . ($a * $b) . "<br>";
// echo "Division: " . ($a / $b) . "<br>";
// echo "Modulus: " . ($a % $b) . "<br>";



// 5 >>>>>>>>>>>>>>>>>>>>Comparison operators
// ==, !=, >, <, >=, <=
// $x=5;
// $y=5;
// var_dump($x == $y); // true
// var_dump($x != $y); // false
// var_dump($x > $y); // false
// var_dump($x < $y); // false
// var_dump($x >= $y); // true
// var_dump($x <= $y); // true


// 6 >>>>>>>>>>>>>>>>>>>>>>>>>Logical operators and Conditional operators
// &&, ||, ! (condtion)? true : false
// $a = true;   
// $b = false;
// var_dump($a && $b); // false
// var_dump($a || $b); // true
// var_dump(!$a); // false

// $x=10;
// $y=20;
// // echo ($x > $y) ? "x is greater than y" : "x is not greater than y";
// $result=($x > $y) ? "x is greater than y" : "x is not greater than y";
// echo $result;

// ($x > $y) ? $flag="x is greater than y" : $flag="x is not greater than y";
// // echo $flag;
// var_dump($flag);

// 7 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  Assignment operators
// =, +=, -=, *=, /=, %=
// $a = 10;
// $a += 5; // equivalent to $a = $a + 5    
// echo "Value of a: " . $a . "<br>"; // Output: 15
// $b = 20;
// $b -= 10; // equivalent to $b = $b - 10
// echo "Value of b: " . $b . "<br>"; // Output: 10
// $c = 5;
// $c *= 3; // equivalent to $c = $c * 3
// echo "Value of c: " . $c . "<br>"; // Output: 15
// $d = 10;
// $d /= 2; // equivalent to $d = $d / 2
// echo "Value of d: " . $d . "<br>"; // Output: 5
// $e = 10; 

// $e %= 3; // equivalent to $e = $e % 3
// echo "Value of e: " . $e . "<br>"; // Output: 1
// $b=5;
// $a=15;
// $a*=$b;  // equivalent to $a = $a * $b
// echo "Value of a: " . $a . "<br>"; // Output: 75

// 8 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conditional statements
// if, else, elseif
// $age = 17;
// if ($age >= 18) {
//     echo "You are an adult.";
// } else {
//     echo "You are a minor.";
// }

// if ($age < 13) {
//     echo "You are a child."; 
// } elseif ($age < 18) {
//     echo "You are a teenager.";  
// } else {
//     echo "You are an adult.";
// }

// nested if else
// $age=19;
// if($age>=18){
//     if($age<60){
//         echo "You are an adult.";
//     }else{
//         echo "You are a senior citizen.";
//     }
// }else{
//     echo "You are a minor.";
// }

// 9 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Arrays
// // Index arrays

// $fruits = array("Apple", "Banana", "Orange");
// echo "<pre>";
// print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
// echo "</pre>";
// echo $fruits[0]; // Output: Apple
// echo $fruits[1]; // Output: Banana
// echo $fruits[2]; // Output: Orange
// $fruits[3] = "Grapes"; // Adding a new element to the array
// echo $fruits[3]; // Output: Grapes
// $fruits = array("Apple", "Banana", "Orange");

// // Associative arrays

// $person = array(
//     "name" => "Hammad",
//     "age" => 25,
//     "city" => "Karachi"
// );
// echo "<pre>";
// print_r($person);
// echo "</pre>";
// echo $person["name"]."<br>"; // Output: Hammad
// echo $person["age"]."<br>"; // Output: 25
// echo $person["city"]."<br>"; // Output: Karachi
// $person["Bg"]="O-"; // Adding a new key-value pair to the array
// echo $person["Bg"]."<br>"; // Output: O-

// Multidimensional arrays
// $students = array(
//     array("name" => "Hammad", "age" => 25, "city" => "Karachi"),
//     array("name" => "Ali", "age" => 22, "city" => "Lahore"),
//     array("name" => "Sara", "age" => 24, "city" => "Islamabad")
// );
// echo "<pre>";
// print_r($students);
// echo "</pre>";
// echo $students[0]["name"]."<br>"; // Output: Hammad
// echo $students[1]["age"]."<br>"; // Output: 22
// echo $students[2]["city"]."<br>"; // Output: Islamabad
// $students[0]["Bg"]="O-"; // Adding a new key-value pair to the first student
// echo $students[0]["Bg"]."<br>"; // Output: O-

// echo "<pre>";
// print_r($students);
// echo "</pre>";

// $arr1 = [
//     1,
//     2 => [34,
//     45=>[344,555,666],
//     66],
//     3 => ["Hammad","Ali","Sara"],
// ];
// echo "<pre>";
// print_r($arr1);
// echo "</pre>";


// 10 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Functions

// function greet(){
//     echo "Hello, World!";
// }

// greet(); // Output: Hello, World!

// function greet(){
//     return "Hello, World!";
// }

// echo greet(); // Output: Hello, World!

// function greet(){
//     echo "Hello, World!";
//     return;
//     echo "This will not be executed.";
// }

// greet(); // Output: Hello, World!


// 11 >>>>>>>>>>>>>List of Array Functions
// $cars=array(
//     'A'=>"Toyota",
//     'B'=>"Honda",
//     'C'=>"Ford",
//     'D'=>"BMW",
//     'E'=>"Mercedes"
// );
// $x=6;
// var_dump(in_array("Honda",$cars)); // Output: bool(true)
// var_dump(in_array("Audi",$cars)); // Output: bool(false)
// var_dump(is_array($cars)); // Output: bool(true)
// var_dump(is_array($x)); // Output: bool(false)
// echo "<pre>";
// print_r($cars);
// echo "</pre>";
// echo array_search("Ford",$cars); // Output: C
// echo array_search("Audi",$cars); // Output: false

// $newcars=array_slice($cars,2);
// echo "<pre>";
// print_r($newcars);
// echo "</pre>";

// echo "<pre>";
// print_r(array_chunk($cars,2));
// echo "</pre>";

// echo "<pre>";
// print_r(array_chunk($cars,3));
// echo "</pre>";

// echo "<pre>";
// print_r(array_pop($cars));
// echo "</pre>";
// array_push($cars,"Audi");
// echo "<pre>";
// print_r($cars);
// echo "</pre>";
// echo count($cars); // Output: 5
// echo "<pre>";
// print_r(array_count_values($cars)); // Output: Array ( [Toyota] => 1 [Honda] => 1 [Ford] => 1 [BMW] => 1 [Mercedes] => 1 )
// echo "</pre>";
// $x=array(
//     "Toyota",
//     "Honda",
//     "Ford",
//     "BMW",
//     "Mercedes"
// );
// $y=array(
//     "Ferraeri",
//     "Lamborghini",
//     "Porsche",
//     "Audi",
//     "Bugatti"
// );
// echo "<pre>";
// print_r(array_merge($x,$y)); 
// echo "</pre>";



// 12>>>>>>>>>>>>>>>>>>>>>>>>>   User define function

// function add($a,$b){
//     return $a+$b;
// }
// echo add(5,10); // Output: 15
// echo "<br>";
// function greet($name){
//     return "Hello, $name!";
// }
// echo greet("Hammad"); // Output: Hello, Hammad!
// echo "<br>";
// function factorial($n){
//     if($n==0 || $n==1){
//         return 1;
//     }else{
//         return $n*factorial($n-1);
//     }
// }
// echo factorial(5); // Output: 120
// echo "<br>";

// 13 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>   Loops

// for loop

// for($i=0;$i<5;$i++){
//     echo "The value of i is : $i <br>";
// }

                       // while loop


// $i=0;
// while($i<5){
//     echo "The value of i is : $i <br>";
//     $i++;
// }

// echo "<br>";
// $i=5;
// while($i>0){
//     echo "The value of i is : $i <br>";
//     $i--;
// }

// $i=1;
// $num=5;

// while($i<=10){
//     echo $num.'x'. $i.'='.($num*$i) .'<br>';
//     $i++;
// }

                       // Do While loop

// $i=0;
// do{
//     echo "The value of i is : $i <br>";
//     $i++;
// }while($i<5);



// FOR EACH LOOP


// $arr=array(
//     "name"=>"Hammad",
//     "age"=>25,
//     "city"=>"Karachi"
// );
// foreach($arr as $key=>$value){
//     echo "$key : $value <br>";
// }
// echo "<br>";


// $arr2=array(
//     "HTML"=> 2000,
//     "CSS"=> 3000,
//     "JavaScript"=> 4000,
//     "PHP"=> 5000
// );
// foreach($arr2 as $k=>$v){
//     echo "$k : $v <br>";
//     }


// 14   >>>>>>>>>>>>>>>>>>>>>  BREAK STATEMENT


// for($i=0;$i<10;$i++){
//     if($i==5){
//         break;
//     }
//         echo "The value of i is : $i <br>";

// }
//     echo "LOOP ENDS" ."<br>";

// echo "<br>";



// $i=0;
// while($i<10){
//     if($i==5){
//         break;
//     }
//         echo "The value of i is : $i <br>";
//         $i++;
// }
//     echo "LOOP ENDS" ."<br>";   

// 15 >>>>>>>>>>>>>>>>>>>>>>>      CONTINUE STATEMENT



// for($i=0;$i<10;$i++){
//     if($i==5){
//         continue;
//     }
//         echo "The value of i is : $i <br>";
// }
// echo "LOOP ENDS" ."<br>";
// echo "<br>";


// $i=0;
// while($i<10){
//     if($i==5){
//         $i++;
//         continue;
//     }
//         echo "The value of i is : $i <br>";
//         $i++;
// }

// echo "<br>";


// """even numbers reverse order"""


// $i=10;
// while($i>0){
//     if($i%2 == 0){
//         continue;
//     }
        // echo "The value of i is". ":" .$i . "<br>";
//         $i--;
// }
// echo "LOOP ENDS" ."<br>";   


// 16 >>>>>>>>>>>>>>>>>>>>>>>>>   SWITCH STATEMENT

// $day=3;
// switch($day){
//     case 1:
//         echo "Monday";
//         break;
//     case 2:
//         echo "Tuesday";
//         break;
//     case 3:
//         echo "Wednesday";
//         break;
//     case 4:
//         echo "Thursday";
//         break;
//     case 5:
//         echo "Friday";
//         break;
//     case 6:
//         echo "Saturday";
//         break;
//     case 7:
//         echo "Sunday";
//         break;
//     default:
//         echo "Invalid day";
// }

// $color="red";
// switch($color){
//     case "red":
//         echo "The color is red.";
//         break;
//     case "blue":
//         echo "The color is blue.";
//         break;
//     case "green":
//         echo "The color is green.";
//         break;
//     default:
//         echo "The color is not red, blue, or green.";
// }


// 17 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> RECURSION FUNCTION

// print 1 to 10 using recursion

// function printNumbers($n){
//     if($n>0){
//         echo $n . "<br>";
//         $n--;
//         printNumbers($n);
//     }
// }
// printNumbers(10);


// function printNumbers($n){
//     echo $n . "<br>";
//     if($n<10){
//         $n++;
//         printNumbers($n);
        
//     }else{
//         return;
//     }
// }
// printNumbers(1);

// 18 >>>>>>>>>>>>>>>>>>>>>>>>>> Implode and Explode functions

// $arr=[
//     '1','2','3','4','5'
// ];
// $str=implode(",",$arr); // Output: 1,2,3,4,5
// echo $str;


// $arr=[
//     'Hello',
//     'everyone',
//     'kaise ho',
//     'sab',
// ];

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo "<br>";
// $str=implode(" ",$arr); // Output: Hello everyone kaise ho sab
// echo $str;

// $str2="Hello everyone kaise ho sab";
// $arr2=explode(" ",$str2); // Output: Array ( [0] => Hello [1] => everyone [2] => kaise [3] => ho [4] => sab )
// echo "<br>";

// echo "<pre>";
// print_r($arr2);
// echo "</pre>";


// $str2="Hello everyone kaise ho sab";
// $arr2=explode(" ",$str2,3); // Output: Array ( [0] => Hello [1] => everyone [2] => kaise [3] => ho [4] => sab )
// echo "<br>";

// echo "<pre>";
// print_r($arr2);
// echo "</pre>";

// 19 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Case Change Methods(functions)

// $str='hello World Kaise ho';
// echo strtoupper($str); // Output: HELLO WORLD KAISE HO
// echo "<br>";

// echo strtolower($str); // Output: hello world kaise ho
// echo "<br>";

// echo lcfirst($str); // Output: hello world kaise ho
// echo "<br>";

// echo ucfirst($str); // Output: Hello world kaise ho
// echo "<br>";

// echo ucwords($str); // Output: Hello World Kaise Ho
// echo "<br>";


// 20 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> str Replace


// $name="Himmid";
// echo str_replace("i","a",$name)."<br>"; // Output: Hammad

// $name="M Hammad";
// echo str_replace("M","Mr.",$name); // Output: Mr Hammad


// 21 >>>>>>>>>>>>>>>>>>>>>>>>>>>  Strrev() String Reverse function

// $str="Hello, World!";
// echo $str."<br>"; // Output: Hello, World!
// echo strrev($str); // Output: !dlroW ,olleH



// 22 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Substr() String Substring function



// echo substr("Hello, World!",7); // Output: World!
// echo "<br>";
// echo substr("Hello, World!",0,5); // Output: Hello
// echo "<br>";
// echo substr("Hello, World!",-6); // Output: World!
// echo "<br>";

// $demo="Hello, World!";
// echo substr($demo,0,-7); // Output: Hello
// echo "<br>";
// echo substr($demo,7,-1); // Output: World
// echo "<br>";
// echo substr($demo,0,-1); // Output: Hello, World
// echo "<br>";

// $str="ipsum, dolor sit amet consectetur adipisicing elit. Sapiente porro voluptas omnis doloremque rem dolore cum provident quisquam fugiat illo qui ullam explicabo, necessitatibus placeat quae inventore aliquid sit, veritatis ex magni nam earum ipsa excepturi. Aliquam doloribus eius aut? Quaerat sequi beatae mollitia vero quibusdam fugit laboriosam nisi cupiditate
// ipsum, dolor sit amet consectetur adipisicing elit. Sapiente porro voluptas omnis doloremque rem dolore cum provident quisquam fugiat illo qui ullam explicabo, necessitatibus placeat quae inventore aliquid sit, veritatis ex magni nam earum ipsa excepturi. Aliquam doloribus eius aut? Quaerat sequi beatae mollitia vero quibusdam fugit laboriosam nisi cupiditate
// ipsum, dolor sit amet consectetur adipisicing elit. Sapiente porro voluptas omnis doloremque rem dolore cum provident quisquam fugiat illo qui ullam explicabo, necessitatibus placeat quae inventore aliquid sit, veritatis ex magni nam earum ipsa excepturi. Aliquam doloribus eius aut? Quaerat sequi beatae mollitia vero quibusdam fugit laboriosam nisi cupiditate";

// echo substr($str,0,150)."...";
// echo "<br>";


// 23 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> str_word_count() ,strlen() and str_repeat() functions


// $str="Hello, World! ";
// echo str_word_count($str); // Output: 2
// echo "<br>";
// echo strlen($str); // Output: 13
// echo "<br>";
// echo strrev($str); // Output: !dlroW ,olleH
// echo "<br>";
// echo str_repeat($str."<br>",3); 
// echo "<br>";


// echo str_repeat("Hello<br>",3); 
// echo "<br>";


// 24 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> rand() and mt_rand() functions

// echo rand(1,100); // Output: A random number between 1 and 100
// echo "<br>";

// echo rand(1000,9999); // Output: A random number between 1000 and 9999
// echo "<br>";

// echo mt_rand(1,100); // Output: A random number between 1 and 100
// echo "<br>";

// 25 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Ceil and Floor Functions

// echo ceil(4.2); // Output: 5
// echo "<br>";
// $n=7/4;
// echo floor(4.8); // Output: 4
// echo "<br>";
// echo $n ." Value"; // Output: 1.75 Value
// echo "<br>";
// echo ceil($n) ."Ceil"; // Output: 2
// echo "<br>";
// echo floor($n) ."Floor"; // Output: 1

// 25 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>pow() and sqrt() functions

// echo pow(2,3); // Output: 8
// echo "<br>";
// echo pow(5,2); // Output: 25
// echo "<br>";

// echo sqrt(16); // Output: 4
// echo "<br>";
// echo sqrt(25); // Output: 5
// echo "<br>";


// 26 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> date_default_timezone_set() and date() time() functions


// date_default_timezone_set("Asia/Karachi");
// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

// echo date('d-D(N)');    // Output: Current day of the month and abbreviated day of the week (e.g., 15-Mon)
// echo "<br>";
// echo date('m-M');    // Output: Current month number and abbreviated month name (e.g., 08-Aug)
// echo "<br>";
// echo date('Y-y');    // Output: Current year in 4-digit and 2-digit formats (e.g., 2024-24)
// echo "<br>";
// echo date('j,l F Y');    // Output: Current day of the month without leading zeros, full day name, full month name, and 4-digit year (e.g., 15, Monday August 2024)
// echo time(); // Output: Current Unix timestamp (number of seconds since January 1, 1970)
// echo "<br>";
// echo time()/60/60/24/365; // Output: Approximate number of years since January 1, 1970



// echo date("Y-m-d H:i:s"); // Output: Current date and time in the format YYYY-MM-DD HH:MM:SS
// echo "<br>";
// echo date("l, F j, Y,t"); // Output: Current date in the format Day, Month Date, Year
// echo "<br>";
// echo date("h:i A"); // Output: Current time in the format HH:MM AM/PM


// 27 >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>   Include and include_once functions

