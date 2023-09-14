<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather report</title>
    <style>
        <?php include './style.css'?>
    </style>
</head>
<body>
    <div class="container">
        <div class="heading_div">
            <h1>weather report</h1>
        </div>
        <form method="post" action="">
            <input type="number" name="user_input" required id="num1" placeholder="Enter temperature in celsius">
            <button type="submit">Check weather</button>
        </form>
        <div id="result">
            <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $user_input = $_POST["user_input"];
                if($user_input >= 0 && $user_input <= 32){
                    echo "It's freezing!";
                }
                else if($user_input >= 33 && $user_input <= 37){
                    echo "It's cool!";
                }
                else{
                    echo "It's warm!";
                }

            }
            
            ?>
        </div>
    </div>
    
</body>
</html>