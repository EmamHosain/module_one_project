<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature converter project</title>
    <style>
        <?php include './style.css'?>
    </style>
</head>

<body>
    <div class="container">
        <div class="heading_div">
            <h1>Temperature Converter</h1>
        </div>

        <form method="post" action="">
            <label for="num1">Enter Temperature</label> <br>
            <input type="number" name="num1" required id="num1"><br>

            <label for="oparetion">Select Conversion</label><br>
            <select name="operation" id="oparetion">
                <option value="celciusToFahrenheit">Celsius to fahrenheit</option>
                <option value="fahrenheitToCelcius"> Fahrenheit to celsius</option>
            </select><br>
            <button type="submit">Convert</button>
        </form>
        <div id="result">
            <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $user_input = $_POST["num1"];
                $operation = $_POST["operation"];

               switch ($operation) {
                case "celciusToFahrenheit":
                    # code...
                    $result = $user_input * 9/5 + 32;
                    echo "Result : $user_input degrees celcius is equal to $result degrees fahrenheit";
                    break;
                
                default:
                    # code...
                    $result = ($user_input - 32) * 5/9;
                    echo "Result : $user_input degrees fahrenhiet is equal to $result degrees celcius";
                    break;
               }
            }
            
            
            ?>
        </div>
    </div>
</body>

</html>