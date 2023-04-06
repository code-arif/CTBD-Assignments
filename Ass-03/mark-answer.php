<?php include "src/questions.php"; ?>

<?php

if (isset($_GET['question_id']) && isset($_GET['ID'])) {
    $question_id = $_GET['question_id'];
    $ans_id = $_GET['ID'];

    $question = new questions;
    $question->makeAnswerAsRight($question_id, $ans_id);
    header("Location:question_details.php?question_id=".$question_id);
    
}

?>