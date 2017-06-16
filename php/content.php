<?php require_once 'config.php'; ?>
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = rand(1, 100);
  }
?>
<!DOCTYPE html>
<html>
    <?php include 'nav.php'; ?>
      <div class="content-wrapper">

        <?php
          $query = "SELECT * FROM master WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class ="img-wrapper">
        <img src="<?php echo $row['image']; ?>"
          alt="<?php echo $row['alt']; ?>"/>
        </div>
          <h2><b><?php echo $row['title']; ?></b></h2>
          <p> <b><?php echo $row['body']; ?></b></p>


        <?php
          } // end while loop
          mysqli_free_result($result);
        ?>
      </div>
    </main>

    <?php mysqli_close($connection); ?>

  </body>
  <?php include 'footer.php'; ?>
</html>
