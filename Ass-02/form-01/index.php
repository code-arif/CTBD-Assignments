<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simple form </title>

    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap cdn -->

</head>



<body class="body-color">
    <div class="users-box">
        <h2> SUM </h2>

        <!-- GET/POST method -->



        <form class="form-handel" action="" method="GET">
            <div class="user-box">
                <input type="number" name="number1">
            </div>

            <div class="user-box">
                <h1 class="sum">+</h1>
            </div>

            <div class="user-box">
                <input type="number" name="number2">
            </div>

            <div class="sum-box">
                <input class="button" type="submit" name="submit" value="=">
            </div>


        </form>

        <?php
        if (isset($_GET['submit'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $sum = $number1 + $number2;
            echo "<div class='output-sum'>Answer: $sum </div>";

            if (empty($number1) || $number1 == '' || $number2 == '' || empty($number2)) {
                echo "Input Numebr";
            } else {
                //No code;
            }

        }
        ?>


    </div>

</body>



</html>