<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>PHP</title>
  </head>
  <body>
    <h1 class="text-center mt-2">Registration form</h1>
    <form action="" method="post" class="container">
        <div class="form-group">
          <label for="email" class="h4">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="username" class="h4">User Name</label>
          <input type="text"
            class="form-control" name="username" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="contact" class="h4">Contact</label>
          <input type="text"
            class="form-control" name="contact" id="contact" placeholder="Enter contact details">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    
    <?php
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "webmorn";

        $conn = new mysqli($server, $user, $password, $database);
        
        //Submit data 
        
        // $sql_manually = "INSERT INTO `users` (`username`, `email`, `contact`) VALUES ('Haris', 'haris@gmail.com', '03001234567')";

        // $result = mysqli_query($conn, $sql_manually);
        //     if ($result) {
        //         echo "<h1 class='text-center'> Data submitted </h1>";
        //     }

        //Submit DATA with FORM method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $username = $_POST["username"];
            $contact = $_POST["contact"];
            
            
        $sql_form = "INSERT INTO `users` (`username`, `email`, `contact`) VALUES ('$username', '$email', '$contact')";

        $result = mysqli_query($conn, $sql_form);

            if ($result) {
                echo "<h1 class='text-center'> Data submitted </h1>";
            }
        }

        mysqli_close($conn);
    ?>
  </body>
</html>
