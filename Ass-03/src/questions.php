<?php
include "database.php";
class questions extends database
{
    ///question input
    public function all_questions($title, $description, $user_id, )
    {
        $created_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO questions(title, description, user_id, created_at) VALUES('$title', '$description', '$user_id', '$created_at')";
        $this->exec($sql);
        return true;
    }

    ///show all question on index page
    public function getAllQuestion($search = "")
    {
        if ($search = "") {
            $sql = "SELECT questions.id,questions.title,questions.user_id,questions.created_at,users_info.username FROM questions join users_info on users_info.ID = questions.user_id";
        } else{
            $sql = "SELECT questions.id,questions.title,questions.user_id,questions.created_at,users_info.username FROM questions join users_info on users_info.ID = questions.user_id WHERE questions.title LIKE '%$search%' ";
        }

        return $this->fetch($sql);
    }

    ///show one question details on question details page
    public function getOneQuestion($question_id)
    {
        $sql = "SELECT * FROM questions WHERE ID = $question_id";
        return $this->fetch($sql);
    }

    ///add comment on question details page

    public function makeAnswer($question_id, $user_id, $details)
    {
        $sql = "INSERT INTO answers(question_id, user_id, details) VALUES ('$question_id','$user_id','$details')";
        $this->exec($sql);
    }


    ///show comment on question detials page
    public function getAnswers($question_id)
    {
        $sql = "SELECT answers.*,users_info.username FROM answers join users_info on users_info.ID = answers.user_id WHERE question_id = '$question_id'";

        return $this->fetch($sql);
    }

    ///update question on question_update page
    public function updateQuestion($question_id, $title, $description)
    {
        $sql = "UPDATE questions SET title= '$title', description= '$description'  WHERE ID = $question_id";
        $this->exec($sql);
    }

    ///delete question on delete_question page
    public function deleteQuestion($question_id)
    {
        $sql = "DELETE FROM questions WHERE ID = '$question_id'";
        $this->exec($sql);
    }


    ///mark answer as right on mark answer page

    public function makeAnswerAsRight($question_id, $ans_id)
    {
        $sql1 = "UPDATE answers SET corrcet= 'no' WHERE question_id = '$question_id'";
        $this->exec($sql1);

        $sql2 = "UPDATE answers SET corrcet= 'yes' WHERE question_id  = '$question_id' AND ID = '$ans_id'";
        $this->exec($sql2);
    }

}
?>