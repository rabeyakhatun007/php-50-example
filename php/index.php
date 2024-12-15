  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">


  <!--Example:1 -->
  <h6>1. A simple .php file with both HTML code and PHP code< </h6>
    <?php
    echo "My First PHP";
    ?>


  <!--Example:2 -->
  <h6>2. ECHO is the same as echo</h6>
    <?php
    echo "Hello PHP<br>";
    ?>


  <!--Example:3 -->
  <h6>3. $COLOR is not same as $color</h6>
    <?php
    $color = "red";
    echo "My dress is " . $color . "<br>";
    ?>


  <!--Example:4 -->
  <h6>4. Syntax for comments in PHP code</h6>
    <?php
      // This is a single-line comment
      # This is also a single-line comment
      /* This is a multi-line comment */
    ?>


  <!--Example:5 -->
 <h6>5. Variable</h6>
   <?php
    $x = 5;
    $y = "John";
    echo $x;
    echo "<br>";
    echo $y;
   ?>


  <!--Example:6 -->
  <h6>6.</h6>
  <?php
   $txt = "Myself";
   echo "I love $txt!";
  ?>


  <!--Example:7 -->
  <h6>7. </h6>
  <?php
   $x = 5;
   $y = 4;
   echo $x + $y;
  ?>


  <!--Example:8 -->
  <h6>8.</h6>
  <?php
   $x = 5;      // $x is an integer
   $y = "John"; // $y is a string
   echo $x;
   echo $y;
   ?>

  <!--Example:9 -->
  <h6>9.The var_dump() function returns the data type and the value </h6>
  <?php
   $x = 5;
   var_dump($x);
  ?>


  <!--Example:10 -->
  <h6>10. See what var_dump() returns for other data types</h6>
 <?php
  var_dump(5);
  var_dump("John");
  var_dump(3.14);
  var_dump(true);
  var_dump([2, 3, 56]);
  var_dump(NULL);
  ?>


  <!-- Example:11 -->
  <h6>11. </h6>
  <?php
  echo(pi());
  ?>


  <!-- Example: 12 -->
  <h6>12. </h6>
  <?php
   echo(min(0, 150, 30, 20, -8, -200) . "<br>");
   echo(max(0, 150, 30, 20, -8, -200));
  ?>

  <!-- Example: 13 -->
  <h6>13. </h6>
  <?php
    echo(rand());
  ?>



  <!-- Example: 14 -->
  <h6>14. </h6>
  <?php
    echo(sqrt(64));
  ?>


  <!-- Example: 15 -->
  <h6>15. </h6>
  <?php
    $x = 1000;  
    $y = 500;
    echo $x - $y;
   ?>


  <!-- Example: 16 -->
  <h6>16. </h6>
  <?php
    $x = 100;  
    $y = 50;
    echo $x * $y;
  ?>


  <!-- Example: 17 -->
  <h6>17. </h6>
  <?php
    $x = 2000;  
    $y = 50;
    echo $x / $y;
  ?>


  <!-- Example: 18 -->
  <h6>18. </h6>
  <?php
    $x = 3000;  
    $y = 50;
    echo $x % $y;
  ?>

  <!--Example:19 -->
  <h6>19.Assigning a string to a variable is done with the variable name followed by an equal sign and the string </h6>
  <?php
   $x = "John";
   echo $x;
   ?>

  <!--Example:20 -->
  <h6>20. All three variables get the value "Fruit"</h6>
  <?php
  $x = $y = $z = "Fruit";

  echo $x;
  echo $y;
  echo $z;
  ?>


  <!--Example:21 -->
  <h6>21.Variable with global & local scope </h6>
 <?php
  // global
  $name ="Rabeya";
  function calling_name(){
  // local
  global $name;
  echo "<h3>"."My name is"." ". "$name"."</h3>";
  }
  calling_name();
  ?>


  <!--Example:22 -->
  <h6>22. echo command </h6>
  <?php
   echo "<h5>PHP is Fun!</h5>";
   echo "Hello world!<br>";
   echo "I'm about to learn PHP!<br>";
   echo "This ", "string ", "was ", "made ", "with multiple parameters.";
  ?>


  <!--Example:23 -->
  <h6>23. echo statement</h6>
  <?php
  $txt1 = "Learn PHP";
  $txt2 = "Our Mentor ";
  echo "<h5>$txt1</h5>";
  echo "<p>Study PHP at $txt2</p>";
  ?>


  <!--Example:24 -->
  <h6>24. Variables have to be inserted using the operator, </h6>
  <?php
   $txt1 = "Learn PHP";
   $txt2 = "W3Schools.com";

   echo '<h5>' . $txt1 . '</h5>';
   echo '<p>Study PHP at ' . $txt2 . '</p>';
   ?>
   

  <!--Example:25 -->
  <h6>25. print or print() </h6>
  <?php
  print "Hello";
  //same as:
  print("Hello");
  ?>


  <!--Example:26 -->
  <h6>26. Text and variables with the print statement </h6>
  <?php
  $txt1 = "Learn PHP";
  $txt2 = "Shikhbe Shobai";

  print "<h5>$txt1</h5>";
  print "<p>Study PHP in $txt2</p>";
  ?>

  <!--Example:27 -->
  <h6>27. The PHP var_dump() function returns the data type and value </h6>
  <?php  
  $x = 5985;
  var_dump($x);
  ?> 


  <!--Example:28 -->
  <h6>28. A Boolean represents two possible states: TRUE or FALSE </h6>
  <?php 
  $x = true;
  var_dump($x);
  ?>


  <!--Example:29 -->
  <h6>29. array and data type</h6>
  <?php  
  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);
  ?> 

  <!--Example:30 -->
  <h6>30.To verify the type of any object in PHP, use the var_dump() function </h6>
  <?php
  $a = 5;
  $b = 5.34;
  $c = "25";

  var_dump($a);
  echo "<br>";
  var_dump($b);
  echo "<br>";
  var_dump($c);
  ?>

  <!--Example:31 -->
  <h6>31. Create a constant with a case-sensitive name</h6>
  <?php
  // case-sensitive constant name
  define("GREETING", "Welcome to php");
  echo GREETING;
  ?> 


  <!--Example:32 -->
  <h6>32.Case-sensitive constant with the const </h6>
  <?php
  const MYCAR = "Volvo";
  echo MYCAR;
  ?> 


  <!--Example:33 -->
  <h6>33. Array constant </h6>
  <?php
  define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
  ]);
  echo cars[0];
  ?> 

  <!--Example:34 -->
  <h3>34. PHP Arithmetic Operators</h3>
  <h6>*Addition</h6>
  <?php
  $x = 10;  
  $y = 6;
  echo $x + $y;
  ?> 


  <h6>*Subtraction</h6>
  <?php
  $x = 10;  
  $y = 6;
  echo $x - $y;
  ?>

  <h6>*Multiplication</h6>
  <?php
   $x = 10;  
   $y = 6;
   echo $x * $y;
  ?>

  <h6>*Division</h6>
  <?php
  $x = 10;  
  $y = 6;
  echo $x / $y;
  ?> 

  <h6>*Modulus</h6>
  <?php
  $x = 10;  
  $y = 6;
  echo $x % $y;
  ?>

  <h6>*Exponentiation</h6>
  <?php
  $x = 10;  
  $y = 3;
  echo $x ** $y;
  ?> 



  <!--Example:35 -->
  <h3>35. PHP Assignment Operators</h3>
  <h6>*Addition </h6>
  <?php
   $x = 20;  
   $x += 100;
  echo $x;
  ?>  

  <h6>*Subtraction</h6>
  <?php
  $x = 50;
  $x -= 30;
  echo $x;
  ?>

  <h6>*Multiplication</h6> 
  <?php
  $x = 5;
  $x *= 6;
  echo $x;
  ?> 

  <h6>*Division</h6>
  <?php
  $x = 10;
  $x /= 5;
  echo $x;
  ?>

  <h6>*Modulus</h6>
  <?php
  $x = 15;
  $x %= 4;
  echo $x;
  ?>


  <!--Example:36 -->
  <h2>36.PHP Logical Operators </h2>
  <h5>*And</h5>
  <?php
  $x = 100;  
  $y = 50;
  if ($x == 100 and $y == 50) {
  echo "Hello world!";
  }
  ?> 
  

  <h5>*Or</h5>
  <?php
  $x = 100;  
  $y = 50;
  if ($x == 100 or $y == 80) {
    echo "Hello world!";
  }
  ?> 


  <h5>*Xor</h5>
  <?php
  $x = 100;  
  $y = 50;
  if ($x == 100 xor $y == 80) {
    echo "Hello world!";
  }
  ?>

  <h5>*Not</h5>
  <?php
  $x = 100;  
  if (!($x == 90)) {
    echo "Hello world!";
  }
  ?>


  <!--Example:37 -->
  <h3>37. PHP IF Statement </h3>
  <?php
  $t = 14;
  if ($t < 20) {
  echo "Have a good day!";
  }
  ?>

  <!--Example:38-->
  <h3>38. PHP IF Else Statement </h3>
  ?php
  $t = date("H");
  echo "<p>The hour (of the server) is " . $t; 
  echo ", and will give the following message:</p>";
  if ($t < "10") {
  echo "Have a good morning!";
  } elseif ($t < "20") {
  echo "Have a good day!";
  } else {
  echo "Have a good night!";
  }
  ?>


  <!--Example:39 -->
  <h5>39. Associative Arrays</h5>
  <h6>Display the model of the car</h6>
  <?php
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
  echo $car["model"];
  ?>


  <!--Example:40 -->
  <h6>40.Change the year item </h6>
  <?php
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
  $car["year"] = 2024;
  var_dump($car);
  ?>


  <!--Example:41 -->
  <h3>41. PHP Form Validation</h3>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h5>Your Input:</h5>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<!--Example:42 -->
  <h6>42 Date and Time. </h6>
  <?php
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l");
  ?>

  <!--Example:43 -->
  <h6>43. PHP Function </h6> 
  <?php
   function familyName($fname) {
  echo "$fname Refsnes.<br>";
  }

  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
  ?>

  <!--Example:44 -->
  <h6>44.Define $x as global inside a function </h6>
  <?php  
  $x = 75; 
  function myfunction() {
  global $x;
  echo $x;
  }
  myfunction()
  ?> 




    
    </div>
    
  </body>
  </html>
