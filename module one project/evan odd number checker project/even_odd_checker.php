<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even odd number checker</title>
    <style>
        <?php include './style.css' ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="heading_div">
            <h2>even or odd number checker</h2>
        </div>
        <form method="post" action="">
            <label for="num1">Enter your number</label>
            <input name="num1" required type="number" id="num1" placeholder="Type...">
            <button type="submit">submit</button>
        </form>
        <div id="result">
            <?php
            if($_SERVER["REQUEST_METHOD"]=== "POST"){
                $user_input = $_POST["num1"];

                if($user_input % 2 == 0){
                    echo "$user_input is Even.";
                }
                else{
                    echo "$user_input is Odd.";
                }
            }
            
            
            ?>
        </div>

    </div>
</body>

</html>