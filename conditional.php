<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        $day = date("l");
        echo $day;
        echo "<h1 class='text-center' >Conditionals in PHP </h1>";
        echo  "<h1 class='text-center'>" . date("H:i:s", strtotime("+4 hours")) . "</h1>";
        $time = date_default_timezone_set('UTC');
        // Get the current UTC time and add hours
        $currentTime = new DateTime(); // Current time in UTC
        $currentTime->modify('+8 hours');
        $currentHour = $currentTime->format("H");
        echo "<h1> $currentHour </h1>";

        if ($currentHour >= 10 && $currentHour < 12) {
            echo "<p class='h2'> Class is live </p>";
        } elseif ($currentHour >= 14 && $currentHour <= 16) {
            echo "<p class='h2'> Class 2 is live </p>";
        } else{
            echo "<p class='h2'> Class completed </p>";
        }

        $dayoftheWeek = date("l");
        switch ($dayoftheWeek) {
            case 'Monday':
                echo "Today's food is Biryani 1";
                break;
            case 'Tuesday':
                echo "Today's food is Biryani 2";
                break;
            case 'Wednesday':
                echo "Today's food is Biryani 3";
                break;
            case 'Thursday':
                echo "Today's food is Biryani 4";
                break;
            case 'Friday':
                echo "Today's food is Biryani 5";
                break;
            case 'Saturday':
                echo "Today's food is Biryani 6";
            break;
            case 'Sunday':
                echo "Today's food is Biryani 7";
                break;
            default:
                echo "Today's food is chef choice";
                break;
        }

        $isPremiumMember = false;
        $messge = ($isPremiumMember) ? ("You can get 30% discount") : ("Become Premium Member to avail this discount");
        echo "<h1> $messge </h1>";
    ?>
</body>
</html>