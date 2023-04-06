<?php include "header.php"; ?>
<?php include "src/user.php" ?>



<!-- user input -->

<div class="login-box">
    <h2> Registration </h2>
    <form action="" method="POST">
        <div class="user-box">
            <label>Username</label>
            <input type="text" name="username" required>

        </div>
        <div class="user-box">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="user-box">

            <label> Password </label>
            <input type="password" name="password" required>

        </div>

        <div class="btn-box">
            <input class="a" type="submit" name="submit" value="Sign up">
        </div>

        <div class="user-box">
            <label> Already have an account? &nbsp; </label>
            <a href="login.php" style = 'color: aqua'>Log in</a>
        </div>
    </form>


    <?php
    ///input validation
    
    if (isset($_POST['submit'])) {
        $user = new user;
        $userCount = $user->checkPriviousUser($_POST['username'], $_POST['email']);

        if (count($userCount) > 0) {
            echo "<p style = 'color:red;' 'font-style: sans-serif;'> Username or Email already Exists </p>";
        } else {
            $user->ragister($_POST['username'], $_POST['email'], md5($_POST['password']));

            echo "<p style = 'color: rgb(206, 206, 33);' 'font-style: sans-serif;'> <i class='fa-solid fa-check'> </i> Ragister Successfully </p>";
        }
    }
    ?>
</div>




<?php include "footer.php"; ?>