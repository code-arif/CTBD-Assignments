<?php
if (!isset($_SESSION['username'])) {
    session_start();
}

?>
<?php include "header.php"; ?>


<section class="sec-01">
    <header class="sec-01-header">
        <nav class="sec-01-nav">
            <div class="sec-01-logo">
                <a href="index.php">
                    <i class="fa-brands fa-html5"> LOGO </i>
                </a>
            </div>

            <div class="user-box">
                <form action="" method="GET">
                    <input type="text" name="query" placeholder="search" aria-label="Search">
                    <button type="submit"> Search </button>
                </form>
            </div>

            <div class="sec-01-menu">



                <ul class="sec-01-ul">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li> <a href="index.php"> Home </a> </li>
                        <li> <a class="sec-01-a" href="add_question.php"> Add Question </a> </li>
                        <li>
                            <a href="logout.php"
                                style="color:rgb(206, 206, 33); border:1px solid wheat;background-color:#311E25;">
                                <?= $_SESSION['username'] . "(Logout)" ?>
                            </a>
                        </li>

                    <?php else: ?>

                        <li> <a href="register.php"> Sign up </a> </li>
                        <li> <a href="login.php"> Log in </a> </li>
                    <?php endif; ?>
                </ul>
            </div>


        </nav>
    </header>
</section>

<?php include "footer.php" ?>