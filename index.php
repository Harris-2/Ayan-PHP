<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>PHP</title>
  </head>
  <body>
    <h1>Welcome to PHP</h1>
    
    <?php
      //PHP String Methods
      $number = 10;
      $str = 'this is string data type';
      $greet = "<h1 class='text-center'> Hello World </h1>";
      echo $greet;
      echo str_replace("World", $number, $greet);

      echo  "<h1 class='text-center'>" . strtoupper($str) . "</h1>";

      echo "<h1 class='text-center'>" . $str . "</h1>";
      echo strlen($str) . "<br>";
      echo "<h1 class='text-center'>" . str_word_count($str) . "</h1>";
      echo "<h1 class='text-center'>" . strpos($str, 'string') . "</h1>";

      // PHP Data Types
      $str = 'This is string data type';
      $num = 100;
      $float = 9.99;
      $bool = true;
      $undef;
      $null = null;
      $arr = ['string', 100, 9.99, false];
      
      // PHP Variable
      $name = 'Haris';
      $city = 'Lahore';
      $age = 24;

      echo "<h1> My name is $name </h1>";
      
      echo '<h1> Hello $name </h1>';
      echo "<h1> Hello $name </h1>";
      
      echo "<div class='container'>
                <h1>$name, $city, $age </h1>
            </div>";
            
      // PHP Syntax
      echo "<br> 
        <ul class='h3'> 
            <li> Variables </li>
            <li> Data Types </li>
            <li> Conditionals </li>
            <li> Loops </li>
            <li> Functions </li>
        </ul> <br>";
      echo "<h1> My First PHP website </h1> ";
    ?>

  </body>
</html>

