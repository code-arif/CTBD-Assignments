<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM </title>


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-box">
        <h2>Form</h2>
        <form action="action.php" method="POST">
            <div class="user-box">
                <label for="">First name</label>
                <input type="text" name="Fname" >

            </div>


            <div class="user-box">
                <label for="">Last name</label>
                <input type="text" name="Lname">

            </div>

            <div class="user-box">

                <label for=""> Age </label>
                <input type="tel" name="age">

            </div>


            <div class="radio-box">

                <h3 class="gender-title">Gender</h3>
                <br>

                <input type="radio" name="gender" value="Male">
                <label for="">Male </label> 
                <input type="radio" name="gender" value="Female">
                <label for=""> Female </label><br>
                <br>


            </div>
            <input class="form-submit" type="submit" name="submit" value="Submit">
        </form>
    </div>



</body>