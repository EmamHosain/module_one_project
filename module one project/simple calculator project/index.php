<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include './style.css' ?>
    </style>
</head>

<body>

    <div class="container">
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter your first number" required>
            <input type="number" name="num2" placeholder="Enter your first number" required>

            <select name="oparation" id="select_btn">
                <option value="add">Addition</option>
                <option value="substract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Devition</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["oparation"];

                switch ($operation) {
                    case 'add':
                        # code...
                        $result = $num1 + $num2;
                        echo "<h2> Result is : $result</h2>";
                        break;
                    case 'substract':
                        # code...
                        $result = $num1 - $num2;
                        echo "<h2> Result is : $result</h2>";

                        break;
                    case 'multiply':
                        # code...
                        $result = $num1 * $num2;
                        echo "<h2> Result is : $result</h2>";

                        break;
                    case 'divide':
                        # code...
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "<h2> Result is : $result</h2>";

                        } else {
                            $result = 'Cannot divide by zero';
                            echo "<h2> Result is : $result</h2>";

                        }
                        break;
                    default:
                        echo "<h2> Invalid Number </h2>";



                }
            }


            ?>
        </div>

    </div>



</body>

</html>