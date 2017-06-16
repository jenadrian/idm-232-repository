<?php require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'nav.php'; ?>
    <div class="content-wrapper">
    <div class="who-i-am-wrapper">
      <picture class="about-me-photo">
          <source media= "screen and (min-width: 40rem)"
          srcset="../photos/self-large.jpg 800w,
          ../photos/self-medium.jpg 640w,
          ../photos/self-small.jpg 375w"
          sizes="33.3vw"/>
          <img src="../photos/self-small.jpg" alt="photo of me"/>
      </picture>
      <div class="who-i-am-text">
        <h2>who i am</h2>
          <p>Hi, I'm Jenna! I write <i>and some like it haute</i> — everything from the content to the code! I write and edit for several editorial publications, but this is my creative outlet. Enjoy reading! </p>
      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>
  </body>
</html>
