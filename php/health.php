<?php require_once 'config.php';
$query = "SELECT * FROM master";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die ("Database query failed.");
  }
?>
<!DOCTYPE html>
<html>
    <?php include 'nav.php'; ?>
    <div class="content-wrapper">
    <?php
    $query = "SELECT * FROM master where category = 'health'";
    $result = mysqli_query($connection, $query);

   while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="content">
      <img src="<?php echo $row['image']; ?>"
        alt="<?php echo $row['alt']; ?>"/>
      <p class="content-title">
        <?php echo $row['title']; ?>
      </p>
    </div>

  <?php }
  ?>

  <?php
    mysqli_free_result($result);
  ?>

  <?php
    mysqli_close($connection);
  ?>
  </div>
  <?php include 'footer.php'; ?>
  </body>
  </html>
