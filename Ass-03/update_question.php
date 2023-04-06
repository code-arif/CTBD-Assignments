<?php include "header.php"; ?>
<?php include "loginCheck.php"; ?>
<?php include "nav.php"; ?>
<?php include "src/questions.php"; ?>


<!-- show queston functional code-->
<?php
if (isset($_GET['question_id'])) {
    $question = new questions;
    $getQuestion = $question->getOneQuestion($_GET['question_id']);

    ///count here

    if (count($getQuestion) == 1) {
        $getQuestion = $getQuestion[0];
        ///check here and ensure the question owner
        if ($getQuestion['user_id'] != $_SESSION['user_id']) {
            echo "Wrong activation";
            exit();
        }

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



<div class="question-box">
    <h2 class="box-caption"> Update Question </h2>

    <?php
    if (isset($_POST['submit'])) {
        $question = new questions();
        $question->updateQuestion($getQuestion['ID'], $_POST['title'], $_POST['description']);
        header("location:index.php");
    } else {

    }
    ?>

    <form action="" method="POST">
        <div class="input-box">
            <label class="title">Question Title</label>
            <input type="text" name="title" value="<?= $getQuestion['title'] ?>">
        </div>

        <div class="input-box">
            <label class="description"> Question Details </label>
            <div class="tiny-cloud">
                <textarea id="textarea" type="password" name="description">
                    <?= $getQuestion['description'] ?>
                </textarea>
            </div>
        </div>
        <div class="btn-box">
            <div class="btn-box">
                <input class="a" type="submit" name="submit" value="Update Question">
            </div>
        </div>

        <div class="user-box">
            <label style='color: wheat;'> Do you want to go back home? &nbsp; </label>
            <a href="index.php" style='color: aqua;'> Go Back </a>
        </div>
    </form>

</div>



<!-- tiny cloud editor CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<!-- tiny clour editor JS -->
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

<?php include "footer.php"; ?>