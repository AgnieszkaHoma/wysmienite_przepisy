<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])) {
        $username = $_POST['username'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments_s (username, date, message)
        VALUES ('$username', '$date', '$message')";
        $result = $conn->query($sql);

    }
}

function getComments($conn) {
    $sql = "SELECT * FROM comments_s";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<div class ='comment-area'><p>";
            echo $row['username']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>
           </div>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Śniadanie - sekcja komentarzy</h1>
</body>
</html>