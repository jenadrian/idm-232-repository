<?php require_once 'config.php';
$query = "SELECT * FROM master";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die ("Database query failed.");
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
      <li class="nav-item"><a href="beauty.php">Beauty</a></li>
      <!-- <li class="nav-item"><a href="health.php">Health</a></li> -->
      <li class="nav-item"><a href="life.php">Life</a></li>
      <li class="nav-item active"><a href="style.php">Style</a></li>
    </ul>
  </div>
</div>
<div class="content-wrapper">
<?php
$query = "SELECT * FROM master where category = 'fashion'";
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
  </body>
  <div class="footer">
    <div class="row">
      <ul class="footer-pages">
        <li class="footer-item"><a href="home.php">Home</a></li>
        <li class="footer-item"><a href="about-me.html">About Me</li>
        <li class="footer-item"><a id="personal-site" href="http://jennaadriancreative.com/" target="blank">Jenna Adrian Creative</a></li>
      </ul>
  </div>
</div>
</html>
