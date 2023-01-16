<?php

    require('db.php');
    
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $usertag = $_POST['usertag'];

        $db->query("INSERT INTO users(name, tag) VALUES ('$username', '$usertag')");

        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" href = "src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

    <title>Лаба 5</title>

</head>

<body>
    
    <header>

        <a id = "back" href = "index.php"> <span>назад</span> </a>

    </header>

    <div class = "island" id = "create_island">

        <form method="POST" action="create.php">
            <div> <input type = "text" name = "name" required placeholder = "имя пользователя"/> </div>
            <div> <input type = "text" name = "tag" required placeholder = "тэг пользователя"/> </div>
            <div> <input id = "create_button" type = "submit" value = "создать" /> </div>
        </form>

    </div>

</body>

</html>