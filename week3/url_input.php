<?php
  $result = 0;
  $first_number = 0;
  $second_number = 0;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input From URL</title>
  </head>
  <body>
    <?php
      
        $first_number = $_GET['first_number'];
        $second_number = $_GET['second_number'];

        $result = $first_number + $second_number;
        echo $result;
     ?>
  </body>
</html>
