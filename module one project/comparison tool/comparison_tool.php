<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison tool</title>
    <style>
        <?php include './style.css'?>
    </style>
</head>
<body>
<div class="container">
        <div class="heading_div">
            <h1>comparison tool</h1>
        </div>
        <form method="post" action="">
            <input type="number" name="num1" required id="num1" placeholder="Enter Your First Number">
            <input type="number" name="num2" required id="num2" placeholder="Enter Your Second Number">
            <button type="submit">compare</button>
        </form>
        <div id="result">
            <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

               if($num1 > $num2){
                echo "$num1 is greater than $num2";
               }
               else if($num2 > $num1){
                echo "$num2 is greater than $num1";
               }
               else{
                echo "Invalid Number";
               }

            }
            
            ?>
        </div>
    </div>
</body>
</html>