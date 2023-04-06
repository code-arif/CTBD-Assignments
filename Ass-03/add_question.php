<?php include "header.php"; ?>
<?php include "loginCheck.php"; ?>
<?php include "nav.php"; ?>
<?php include "src/questions.php"; ?>


<div class="question-box">
    <h2 class="box-caption"> Add Question </h2>

    <?php
    if (isset($_POST['submit'])) {
        $question = new questions();
        $question->all_questions(($_POST['title']), ($_POST['description']), ($_SESSION['user_id']));
        echo " Your Question is Submited";

    } else {

    }
    ?>

    <form action="" method="POST">
          <div class="input-box">
              <label class="title">Question Title</label>
              <input type="text" name="title">
          </div>

          <div class="input-box">
              <label class="description"> Question Details </label>
              <div class="tiny-cloud">
                  <textarea id="textarea" type="password" name="description">
                  </textarea>

              </div>
          </div>
          <div class="btn-box">
          <div class="btn-box">
              <input class="a" type="submit" name="submit" value="Add Question">
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
