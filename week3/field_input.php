<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Field Input</title>
</head>
<body>
    
    <form action="field_input.php" method="GET">
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br><br>
        <input type="submit" value="OK"><br><br>
    </form>

    <?php
    /* 
    step-1: Does the input existed? or "Has it been submitted?".
    step-2: Is it empty? or "Does value == NULL".
    step-3: Display back to the user.
    */

    if(isset($_GET['first_name']) && isset($_GET['last_name'])){
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        if(!empty($first_name) && !empty($last_name)){
            echo "Full Name: " . $first_name . " " . $last_name;
        }
    }
    ?>

</body>
</html>