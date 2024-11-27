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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        if (isset($_GET['delete_id'])) {
            $id = intval($_GET['delete_id']);
            $sql_del = "DELETE FROM `users` WHERE `users`.`id` = $id";
            $result_del = mysqli_query($conn, $sql_del);
            if ($result_del) {
              header("Location: view.php");
              echo "Data deleted from DB";
            }
            exit();
          }

      
    ?>

    <table class="table table-striped table-inverse">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
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
                    "<td>  <a href='?delete_id=" . $row['id'] . " 
                            'class='btn btn-danger' ><i class='fa fa-trash'></i>
                            </a> 
                    </td>",
                 "</tr>";
           }
        } else{
            echo "<tr>
                  <td colspan='5' class='text-center h4'> No data found </td>
                  </tr>";
        }
    ?>
        </tbody>
    </table>

</body>
</html>