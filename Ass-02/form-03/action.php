<html>

<head>

    <style>
        .output-box {
            position: absolute;
            top: 20%;
            left: 30%;
            bottom: 10%;
            /* margin-top: 50px; */
            width: 100vh;
            height: min-content;
            padding: 50px 30px 50px 30px;
            background: #0281b1;
            /* box-sizing: border-box; */
            border: transparent;
            /* box-shadow: 0 5px 25px  #b71403 ; */
            border-radius: 10px;
            color: wheat;
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;

        }

        .a {
            position: relative;
            display: block;
            text-align: center;
            color: rgb(253, 253, 252);
            /* align-items: center; */
            padding: 10px 20px;
            margin-top: 15px;
            background: transparent;
            border: 1px solid rgb(255, 255, 255);
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            font-family: sans-serif;
            transition: .2s;
        }

        .a:hover {
            background: #e6dfe1;
            color: #0281b1;
        }
    </style>

<body class="output-back">
    <section class="output-box">
        <?php

        ////conditional structure
        

        // $uname = $_POST["username"];
        $mail = $_POST["email"];
        // $phone = $_POST["phone"];
        // $password = $_POST["password"];
        $address = $_POST["address"];




        ///username condition
        
        if (isset($_POST["Submit"])) {

            $uname = $_POST["username"];
            $unamelen = strlen($uname);
            $phone = $_POST["phone"];
            $password = $_POST["password"];


            if ((empty($uname)) || ($uname == "") || $unamelen < 6 ) {
                echo "WARNING!!!: username must be 6 character . <br>";

            } elseif ((strlen($password) < 8) && (empty($password)) && ($password == "")) {
                
                
                echo "WARNING!!!: password must be 8 character . <br>";
            } elseif (is_numeric($phone) != true) {
                
                
                echo "WARNING!!!: number must be numaric";
            } else {
                echo "Username: $uname . <br>";
                echo "Phone: $phone . <br>";
                echo "Password: .$password <br>";
                echo "Address : $address";

            }


        }
        
        ?>

        <a class="a" href="index.php"> Back to home </a>
    </section>

</body>
</head>

</html>