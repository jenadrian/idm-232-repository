<div class="topnav">
<div class="row">
  <ul class="nav-pages">
    <li><a href="home.php">Home</a></li>
    <?php
      $query = "SELECT id, title FROM pages ORDER BY id ASC";
      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("Database query failed.");
      }

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "<a href=\"home.php?id={$row['id']}\">";
        echo $row['home'];
        echo "</a>";
        echo "</li>";
      }
    ?>
    </ul>
</div>
</div>



<!-- <div class="topnav">
  <div class="row">
      <ul class="nav-pages">
        <li class="nav-item active"><a href="home.html">Home</a></li>
        <li class="nav-item"><a href="apartment-style.html">Apartment Style</a></li>
        <li class="nav-item"><a href="beauty.html">Beauty</a></li>
        <li class="nav-item"><a href="health.html">Health</a></li>
        <li class="nav-item"><a href="inspo.html">Inspo</a></li>
        <li class="nav-item"><a href="style.html">Style</a></li>
      </ul>
    </div>
    </div> -->
