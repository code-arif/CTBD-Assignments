<html>

<head>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;1,400&display=swap"
        rel="stylesheet">



    <style>

        .user-box {
            color: white;
            background:  #6804ae;
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            position: relative;
            /* background: #2d2f38e5; */
            position: absolute;
            top: 30%;
            left: 30%;
            width: 100vh;
            padding: 50px 30px 50px 30px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .back-button {
            color: white;
            background: transparent;
            border: 1px solid white;
            display: block;
            text-align: center;
            padding: 10px 15px 10px 15px;
            margin-top: 20px;
            text-decoration: none;

        }
    </style>
</head>

<body>
    <section class="user-box">

        <?php

        if (isset($_POST["Fname"]) && ($_POST["Lname"]) && ($_POST["age"]) && ($_POST["age"])) {
            
            
            $fname = $_POST["Fname"];
            $lname = $_POST["Lname"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];


            echo "First Name: " . $fname . "<br>";
            echo "Last Name: " . $lname . "<br>";
            echo "Age is: " . $age . "<br>";
            echo "Gender is: " . $gender;
        } else {
            echo "Undefiend value";
        }

        ?>


        <a class="back-button" href="index.php"> Back </a>
    </section>
</body>


</html>