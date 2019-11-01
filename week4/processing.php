<?php $user_name = $password = "";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>
    <?php
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
    ?>
    Username: <?php echo $user_name;?><br>
    Password: <?php echo $password;?>

</body>
</html>