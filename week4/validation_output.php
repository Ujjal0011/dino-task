<?php
    $name = $email = $gender = $comment = $website = $prog_lan[] = $laptop = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
        $prog_lan = $_POST["prog_lan"];
        $laptop = $_POST["laptop"];
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo "<h2>Your Input:</h2>";
    echo $name;     echo "<br>"; echo "<br>";
    echo $email;    echo "<br>"; echo "<br>";
    echo $website;  echo "<br>"; echo "<br>";
    echo $gender;   echo "<br>"; echo "<br>";
    echo $comment;  echo "<br>"; echo "<br>";
    
    foreach($prog_lan as $key => $value){
        echo $value . '<br>';
    }
    echo "<br>"; echo "<br>";
    echo $laptop;

    ?>