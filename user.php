<?php 

    require("db.php");

    $id = $_GET['id'];
    $users = $db->query("SELECT * FROM users WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);

    $users = $users[0]

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

        <div class = "menu">
            
            <a href = "index.php">выбрать аккаунт</a>
            <a href = "create.php">создать аккаунт</a>
            
        </div>

    </header>

    <div class = "island" id = "profile">

        <div class = "user_name"> <?php echo $users['name']?> </div>

        <div class = "id" > <?php echo $users['tag']?> </div>

    </div>


</body>

</html>