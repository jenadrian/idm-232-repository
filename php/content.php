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
  <head>
    <script src="https://use.typekit.net/ver1rjm.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/master.css">
    <title>and some like it haute</title>
  </head>
  <body>
<h1>and some like it haute</h1>
<div class="topnav">
  <div class="row">
      <ul class="nav-pages">
        <li class="nav-item"><a href="home.php">Home</a></li>
        <!-- <li class="nav-item"><a href="apartment-style.php">Apartment Style</a></li> -->
        <li class="nav-item active"><a href="beauty.php">Beauty</a></li>
        <!-- <li class="nav-item"><a href="health.php">Health</a></li> -->
        <li class="nav-item"><a href="life.php">Life</a></li>
        <li class="nav-item"><a href="style.php">Style</a></li>
      </ul>
    </div>
    </div>
    <body>
    <main>
      <div class="content-wrapper">

        <?php
          $query = "SELECT * FROM master WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <img src="<?php echo $row['image']; ?>"
          alt="<?php echo $row['alt']; ?>"/>
          <p><?php echo $row['category']; ?>
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
</html>
