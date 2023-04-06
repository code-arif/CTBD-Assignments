<?php include "header.php"; ?>
<?php include "src/user.php" ?>


<div class="login-box">
    <h2> Login </h2>
    <form action="" method="POST">
        <div class="user-box">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="user-box">
            <label> Password </label>
            <input type="password" name="password" required>
        </div>
        <div class="btn-box">
            <input class="a" type="submit" name="submit" value="Log in">
        </div>
        <div class="user-box">
            <label> Need an account?? &nbsp; </label>
            <a href="register.php" style='color:aqua;'> Sign up </a>
        </div>
    </form>


    <?php
  
    if (isset($_POST['submit'])) {
        $user = new user;
        $checkOneUser = $user->checkOneUser($_POST['username'], $_POST['password']);
    
        if (count($checkOneUser) == 1) {
            $getUserId = $checkOneUser[0]['ID'];
            $getUserName = $checkOneUser[0]['username'];
        
            // Set to SESSION
            
            session_start();
            $_SESSION['user_id'] = $getUserId;
            $_SESSION['username'] = $getUserName;
            header("location:index.php");
        
        } else {
            echo "<p style='color:red; padding-top: 15px;'>Username or Password doesn't match</p>";
        }
    }
    



    ?>
</div>


<?php include "footer.php"; ?>