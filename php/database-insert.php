
<?php require_once 'config.php';

// to create new table CREATE TABLE `andsomelikeithaute`.`pages` ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(50) NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;
// to insert content into new table INSERT INTO `pages` (`title`) VALUES ('Home');

INSERT INTO `master`  (`type`, `category`, `date`, `title`, `image`, `alt`, `body`)
VALUES ('article', 'about-me', '06-05-2017', 'About Me', '../photos/id-4-sm','a photo of me', '');




$result = mysqli_query($connection, $query);
 if ($result) {
   echo "Success!";
 } else {
   die ("Database query failed. " . mysqli_error($connection));
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Databases</title>
</head>
<body>
 <?php
   mysqli_close($connection);
 ?>
</body>
</html>
