<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        echo "<h1 class='text-center'> Loops in PHP </h1>";
        echo "<ul class='h3'>
        <li>For Loop</li>
        <li>Foreach Loop</li>
        <li>While Loop</li>
        <li>doWhile Loop</li>
        </ul>";

        //Foreach Loop
        $products = ["Laptop" => 10000, "Mobile" => 15000, "Tablet" => 5000, "LED" => 20000];
        
        foreach ($products as $product => $price) {
            echo "<h4> The price of $product is $price </h4> <br>" ;
        }

        //For Loop
        $students = ["Haris", "Haseeb", "Noman", "Adil", "Sumair"];
        $totalStudents = count($students);
        for ($i=0; $i < $totalStudents; $i++) { 
            echo "<h2 class='mb-4'> Sending email to " . $students[$i] . "</h2>";
        }

        //While Loop
        $waterLevel = 0;
        $tankCapacity = 100;
        while ($waterLevel < $tankCapacity )  {
            $waterLevel += 10;
            echo "<h2> Filling Tank, Current capacity : $waterLevel <br>";
        }
        echo "Tank is full";

        //doWhile Loop
        $correctPassword = "1234";
        $userPassword;
        do {
            $userPassword = "1234";
            echo "<h2>Checking User Password </h2>";
        } while ($userPassword != $correctPassword);
        echo "<h2> Password is correct </h2>";
    ?>
</body>
</html>