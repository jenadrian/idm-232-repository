<?php require 'config.php';
?>
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
    <?php

      $query = "SELECT id, title FROM pages WHERE title = 'Home' or title = 'Life' or title = 'Style'";
      // $query = "SELECT id, title FROM pages ORDER BY id ASC";
      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("Database query failed.");
      }

      while ($row = mysqli_fetch_assoc($result)) {
        $title = strtolower($row['title']);
        echo "<li class=\"nav-item\">";
        echo "<a href=\"" . $title . ".php?id={$row['id']}\">";
        echo $row['title'];
        echo "</a>";
        echo "</li>";
      }
    ?>
    </ul>
</div>
</div>
