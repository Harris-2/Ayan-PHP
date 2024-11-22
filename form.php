<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        echo "<h1 class='text-center mt-4'> Login Form </h1>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $pass = $_POST["password"];

            echo "<h1> $email </h1>";
            echo "<h1> $pass </h1>";
        }

        $students = array('Haris', 'Haseeb', 'Noman', 'Adil', 5, true, [5, 6]);
        $students[1] = "Sumair";
        echo "<h1 class='text-center'>" . $students[1] . "</h1>" ;
        var_dump($students);

    ?>
    <div class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
          <input type="password"
            class="form-control" name="password" placeholder="Enter your Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>