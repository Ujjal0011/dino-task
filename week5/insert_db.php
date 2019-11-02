<?php 

require "includes/db_connection.php";
$name = $email = $gender = $comment = $website = $prog_lan_str = $laptop = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $website = test_input($_POST["website"]);
    $prog_lan = $_POST["prog_lan"];
    $prog_lan_str = implode(', ', $prog_lan);
    $laptop = $_POST["laptop"];
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "INSERT INTO table_programmer (name, email, website, comment, gender, prog_lan, laptop)
        VALUES ('$name', '$email', '$website', '$comment', '$gender', '$prog_lan_str', '$laptop')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="show_data.php" method="POST">
    <h3>Data Inserted Successfully!</h3>
    <input type="submit" value="Show Data">
</form>
</body>
</html>