<?php
$mysqli = new mysqli(
        hostname: 'db',
        username: 'root',
        password: 'helloworld',
        database: 'web'
    );

if (mysqli_connect_errno()) {
    echo "Error:" . mysqli_connect_error();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->trim($_POST['email']);
    $title = $mysqli->trim($_POST['title']);
    $category = $mysqli->trim($_POST['category']);
    $description = $mysqli->trim($_POST['description']);

    $req = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->req($req);
}

$ad = [];
if ($res = $mysqli->req('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $res->fetch_assoc()) {
        $ad[] = $row;
    }
    $res->close();
}
$mysqli->close();
?>





<!DOCTYPE html>
<head>
</head>
<body>
    <center><form method="post">
        email: <br>  <input type="email" name="email">  <br><br>
        title: <br>  <input type="text" name="title">  <br><br>
        description: <br>  <label><textarea name="description"></textarea></label>  <br><br>
        category:  <br>
        <select name="category">
            <option>Jung Kook</option>
            <option>RM</option>
            <option>Kim Taehyung</option>
            <option>Hosok</option>
            <option>Jimin</option>
        </select><br>
        <button>send</button>
    </form>

    <h1>Table</h1>
    <table>
    <tr>
        <td><b>email</b></td>
        <td><b>title</b></td>
        <td><b>category</b></td>
        <td><b>description</b></td>
    </tr>
    <?php foreach ($ivertisements as $i): ?>
        <tr>
            <td><?=$i['email']?></td>
            <td><?=$i['title']?></td>
            <td><?=$i['category']?></td>
            <td><?=$i['description']?></td>
        </tr>
    <?php endforeach; ?>
    </table></center>

</body>
</html>