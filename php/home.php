<?php require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <?php include 'nav.php'; ?>
    <div class="content-wrapper">
      <?php
      $query = "SELECT * FROM master";
        $result = mysqli_query($connection, $query);
        if (!$result) {
          die ("Database query failed.");
        }

       ?>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="content">
      <img class="home" src="<?php echo $row['image']; ?>"
        alt="<?php echo $row['alt']; ?>"/>
      <p class="content-title">
      <a href="content.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
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
