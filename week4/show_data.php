<?php 
include 'db_connection.php';
$name = $email = $gender = $comment = $website = $prog_lan_str = $laptop = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    </head>
    <title>Show data</title>
</head>
<body>
    
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Comment</th>
        <th>Website</th>
        <th>Programming Language</th>
        <th>Laptop</th>
    </tr>
    <?php 
        $query = "SELECT * FROM table_programmer";
        
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $email = $row['email'];
                $gender = $row['gender'];
                $comment = $row['comment'];
                $website = $row['website'];
                $prog_lan_str = $row['prog_lan'];
                $laptop = $row['laptop'];
    ?>

        <tr>
        <td width="30%"><?php echo $name;?></td>
        <td width="30%"><?php echo $email;?></td>
        <td width="30%"><?php echo $gender;?></td>
        <td width="50%"><?php echo $comment;?></td>
        <td width="30%"><?php echo $website;?></td>
        <td width="30%"><?php echo $prog_lan_str;?></td>
        <td width="30%"><?php echo $laptop;?></td>
        </tr>

    <?php 
            }
        } else {
            echo "0 results";
        }
    mysqli_close($conn);
    ?>
</table>

</body>
</html>
