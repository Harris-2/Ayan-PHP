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
        echo "<h1 class='text-center'>Functions in PHP </h1>";

        function greet($name){
            return "<h1 class='text-center'> Hello $name </h1>";
        }
        echo greet("Haris");

        $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

        switch ($operation) {
            case 'add':
               $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num1 / $num2;
                break;
            default:
                echo "Invalid input";
                break;
        }
    }
    ?>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width:400px">
            <div class="card-body">
                <h4 class="card-title text-center">Simple Calculator</h4>
                <form action="" method="post">
                    <div class="mb-3">
                        <div class="form-group">
                          <label for="num1">Number 1</label>
                          <input type="text"
                            class="form-control" name="num1" id="num1" placeholder="Enter a number">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                          <label for="num2">Number 2</label>
                          <input type="text"
                            class="form-control" name="num2" id="num2" placeholder="Enter a number">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                          <label for="operation">Select Operator</label>
                          <select name="operation" id="operation" class="form-control">
                            <option value="add">Add</option>
                            <option value="subtract">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="divide">Divide</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calculate</button>
                </form>
                <?php if ($result !== 0) : ?>
                    <div class="alert alert-success mt-4 fw-bold"> Result: <?= $result  ?></div>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>