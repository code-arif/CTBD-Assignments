<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "src/questions.php"; ?>



<!-- show queston functional code-->
<?php
if (isset($_GET['question_id'])) {
    $question = new questions;
    $getQuestion = $question->getOneQuestion($_GET['question_id']);

    if (count($getQuestion) == 1) {
        $getQuestion = $getQuestion[0];
    } else {
        echo "Something Wrong";
        exit();
    }

    // echo "<pre>";
    // print_r($getQuestion);
    // echo "</pre>";

} else {
    echo "Invalid Request";
    exit();
}
?>



<section class="question_details_container">

    <div class="question_details_container_left">
        <h2 class="question-heading">Question Details</h2>

        <!-- show question deials -->
        <div class="show_question_details">
            <h3>
                <?= $getQuestion['title'] ?>
            </h3>
            <p>
                <?= $getQuestion['description'] ?>
            </p>
        </div>


        <!-- show comment -->
        <h2 class="question-heading"> Answers </h2>

        <?php
        $getAnswers = $question->getAnswers($getQuestion['ID']);
        ?>


        <?php foreach ($getAnswers as $answers): ?>
            <div class="show_question_details">
                <h4 class="show_answer">
                    <?= $answers['details'] ?>
                </h4>
                <small>Answerd by:
                    <?= $answers['username'] ?>
                </small>



                <?php if ($getQuestion['user_id'] == $_SESSION['user_id'] && $answers['correct'] == 'no'): ?>

                    <a href="mark-answer.php?question_id=<?=$getQuestion['user_id']?>&ans_id=<?= $answers['ID'] ?>"
                        class="back_to_home"> Mark as Right Answer </a>

                <?php endif; ?>

            </div>
        <?php endforeach; ?>





        <!-- comment box -->

        <?php if (isset($_SESSION['username'])): ?>

            <?php
            if (isset($_POST['submit'])) {
                $question->makeAnswer($getQuestion['ID'], $_SESSION['user_id'], $_POST['details']);
                echo "Comment Submit";
            }
            ?>



            <div class="comment_box">
                <form action="" method="POST">
                    <textarea id="textarea" name="details" placeholder="add your answer..."></textarea>
                    <button name="submit" type="submit"> Add comment </button>
                    <!-- <input type="submit" name="comment" value="Add comment"> -->
                </form>
            </div>
        <?php endif; ?>



        <div class="back_btn">
            <a href="index.php" class="back_to_home"> <i class="fa-solid fa-arrow-left"></i> Back to HOME </a>
        </div>
    </div>


    <!-- show recent question in side bar -->

    <div class="question_details_container_right">
        <h1 class="recent_question"> Recent Question </h1>

        <div class="show_recent_question">

            <?php
            $question = new questions();
            $allQuestion = $question->getAllQuestion();
            ?>

            <?php foreach ($allQuestion as $question): ?>
                <div class="all_question_title_list">
                    <div class="show_question_bg">

                        <?php
                        $link = "question_details.php?question_id=" . $question['id'];
                        ?>


                        <h3 class="recent">
                            <a href="<?= $link ?>">
                                <?= $question['title'] ?>
                            </a>
                        </h3>
                        <small> <i class="fa-solid fa-circle"></i> Created:
                            <?= date('d M, y', strtotime($question['created_at'])) ?> || question by:
                            <?= $question['username'] ?>
                        </small>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>




</section>


<!-- tiny cloud editor CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<!-- tiny clour editor JS -->
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>


<?php include "footer.php"; ?>