<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Current Time</title>
  </head>
  <body>
    Current Time:
    <?php
      date_default_timezone_set("Asia/Dhaka");
      echo date("h:i:sa");
    ?>
  </body>
</html>
