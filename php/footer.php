<?php require 'config.php';
?>
<div class="footer">
  <div class="row">
    <ul class="footer-pages">
      <?php

      $query = "SELECT id, title FROM pages WHERE title = 'Home'";

      // $query = "SELECT id, title FROM pages WHERE title = 'Home' or title = 'About Me'"
      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("Database query failed.");
      }

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li class=\"footer-item\">";
        echo "<a href=\"home.php?id={$row['id']}\">";
        echo $row['title'];
        echo "</a>";
        echo "</li>";
      }
      ?>
    </ul>
