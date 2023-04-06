<?php include "loginCheck.php"; ?>
<?php include "src/questions.php"; ?>

<?php

if (isset($_GET['question_id'])) {
    $question = new questions;
    $getQuestion = $question->getOneQuestion($_GET['question_id']);

    if (count($getQuestion) == 1) {
        $getQuestion = $getQuestion[0];

        if ($getQuestion['user_id'] != $_SESSION['user_id']) {
            echo "Wrong activation";
            exit();
        } else {
            $question->deleteQuestion($getQuestion['ID']);
            header("location:index.php");
        }

    } else {
        echo "Something Wrong";
        exit();
    }
}


?>