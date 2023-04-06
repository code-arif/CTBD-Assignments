<?php include "header.php"; ?>
<?php include "src/questions.php";
$question = new questions();

$search = "";
if(isset($_GET['query'])){
    $search = $_GET['query'];
}
$allQuestion = $question->getAllQuestion($search);
?>



<body>

    <?php include "nav.php" ?> <!-- php nav block -->

    <section class="sec-02">
        <div class="sec-02-left">


            <div>
                <h1 class="logo"> All Category</h1>

                <ul class="menu-list">
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>
                    <li class="menu-name"> <i class="fa-solid fa-arrow-right"></i> <a href="#">Category</a> </li>

                </ul>
            </div>
            <div class="desclaimar-paragraph">
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                </p>
            </div>


        </div>

        <div class="sec-02-right">
            <h1 class="question-heading"> All my question </h1>


            <?php foreach ($allQuestion as $question): ?>
                <div class="all_question_title_list">
                    <div class="show_question">

                        <?php
                        $link = "question_details.php?question_id=" . $question['id'];
                        ?>

                        <h4 class=""><i class="fa-solid fa-circle"></i><a href=" <?= $link ?> ">
                                <?= $question['title'] ?>
                            </a></h4>
                        <small>Created:
                            <?= date('d M, y', strtotime($question['created_at'])) ?> || question by:
                            <?= $question['username'] ?>
                        </small>


                        <!-- update and delete question titel and qustion -->
                        <div class="update_delete">
                            <?php if (isset($_SESSION['user_id']) && $question['user_id'] == $_SESSION['user_id']): ?>
                                <a href="update_question.php?question_id=<?= $question['id'] ?>">Edit</a>
                                <a href="delete_question.php?question_id=<?= $question['id'] ?>"
                                    onclick="return confirm('Are you sure to delete question?')" style="color:red;">Delete</a>
                            <?php endif; ?>
                        </div>
                    </div>



                </div>
            <?php endforeach; ?>
        </div>

    </section>




    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/c8bb01c38c.js" crossorigin="anonymous"></script>



    <?php include "footer.php"; ?>