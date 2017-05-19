<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "andsomelikeithaute";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
  die ("Database connection failed:" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
}

$type = "article";
$category = "beauty";
$date = "05-17-2017";
$title = "Pricey Skincare Product Dupes";
$img = "https://unsplash.it/300/300/?random";
$alt = "skincare products";
$body = "This is currently placeholder text.";

$query = "INSERT INTO andsomelikeithaute (type, category, date, title, img, alt, body) VALUES ('${type}', '${category}', '${date}', '${title}', '${img}', '${alt}', '${body}')";
$result = mysqli_query($connection, $query);

if ($result){
  echo "Success!";
} else {
  die ("Database query failed." . mysqli_error($connection));
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
mysqli_close($connection);
?>
  </body>
</html>
