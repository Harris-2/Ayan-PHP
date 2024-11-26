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
    <title>View Page</title>
  </head>
<body>
    <?php
        echo "<h1 class='text-center'> View Data from DataBase</h1>";
        
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "webmorn";
 
        $conn = new mysqli($server, $user, $password, $database);

        $sql_view = "SELECT `id`, `username`, `email`, `contact` FROM `users`";
        $result = mysqli_query($conn, $sql_view);
    ?>

    <table class="table table-striped table-inverse">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
    <?php
        if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
            echo "<tr>",
                    "<td>" . $row["id"] . "</td>",
                    "<td>" . $row["username"] . "</td>",
                    "<td>" . $row["email"] . "</td>",
                    "<td>" . $row["contact"] . "</td>",
                 "</tr>";
           }
        } else{
            echo "<h4 class='text-center'>No data found </h4>";
        }
    ?>
        </tbody>
    </table>

</body>
</html>