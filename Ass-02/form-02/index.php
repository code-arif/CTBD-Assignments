<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login form </title>


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-box">
        <h2>Registration Form</h2>
        <form action="" method="post">
            <div class="user-box">
                <label for="">Username</label>
                <input type="text" name="username" required="">

            </div>

            <div class="user-box">

                <label for=""> Password </label>
                <input type="password" name="password" required="">

            </div>

            <div class="btn-box">
                <input class="a" type="submit" name="Submit" value="Register">
            </div>



            </a>
        </form>

        <?php

        if (isset($_POST["Submit"])) {

            if (($_POST["username"]) != "" && ($_POST["password"] != "")) {
                    $Uname = "ariful";
                $Pass = "123456";

            }
            if (($_POST["username"] == $Uname) && ($_POST["password"] == $Pass)) {
                header("Location:action.php");
            } else {
                echo "<div class='login_output'> Invalid Username or password !!! </div>";
            }
        }


        ?>

    </div>



</body>

</html>