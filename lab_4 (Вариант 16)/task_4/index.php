<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION["team_name"] = $_POST["TeamName"] ;
    $_SESSION["type_of_sport"] = $_POST["TypeOfSport"];
    $_SESSION["count_of_players"] = $_POST["CountOfPlayers"];
    header("Location: branch.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST"> 
            <p>Название команды: <input name="TeamName" type="text"></p>
            <p>Вид спорта: <input name="TypeOfSport" type="text"></p>
            <p>Число игроков: <input name="CountOfPlayers" type="text"></p>
            <input type="submit" value="Отправить">
        </form><br>
        
        <p><a href="branch.php">Побочная страница</a></p>
    </body>
</html>
