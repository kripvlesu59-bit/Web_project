<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_4</title>
</head>
<body>
    <p><?php echo $_SESSION["team_name"], "- Название команды\n"; ?> </p><br>
    <p><?php echo $_SESSION["type_of_sport"], "- Вид спорта\n"; ?> </p><br>
    <p><?php echo $_SESSION["count_of_players"], "- Число игроков\n"; ?> </p><br>
</body>
</html>