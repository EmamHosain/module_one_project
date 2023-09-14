<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade calculator</title>
    <style>
        <?php include './style.css' ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="heading_div">
            <h1>grade calculator</h1>
        </div>
        <form method="post" action="">
            <div class="">
                <label for="user_input1">Arabic</label>
                <input max="100" min="0" type="number" name="user_input_1" id="user_input1" required>
            </div>
            <div class="">
                <label for="user_input2">English</label>
                <input max="100" min="0" type="number" name="user_input_2" id="user_input2" required>
            </div>
            <div class="">
                <label for="user_input3">Bangla</label>
                <input max="100" min="0" type="number" name="user_input_3" id="user_input3" required>
            </div>
            <div class="last_div">
                <button type="submit">submit</button>
            </div>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $arabic = $_POST["user_input_1"];
                $english = $_POST["user_input_2"];
                $bangla = $_POST["user_input_3"];

                $average = ($arabic + $english + $bangla) / 3;
                echo "Average : $average <br>";

                if ($average >= 80 && $average <= 100) {
                    echo "You have got A+";
                } else if ($average >= 70) {
                    echo "You have got A";
                } else if ($average >= 60) {
                    echo "You have got A-";
                } else if ($average >= 50) {
                    echo "You have got B";
                } else if ($average >= 40) {
                    echo "You have got C";
                } else if ($average >= 33) {
                    echo "You have got D";
                } else if ($average >= 0) {
                    echo "You have got F";
                } else {
                    echo "Invalid Number";
                }

            }

            ?>
        </div>
    </div>
</body>

</html>