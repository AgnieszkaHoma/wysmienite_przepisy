<?php
    date_default_timezone_set('Europe/Warsaw');
    include 'dbcon.inc.php';
    include 'comments.inc.php';
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poczekalnia</title>
    <link rel="stylesheet" type="text/css" href="commentsstyle.css">
</head>
<body>

<?php
$cid = $_POST['cid'];
$username = $_POST['username'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<form method='POST' action='".editComments($conn)."'>
    <input type='hidden' name='cid' value='".$cid."'>
    <input type='hidden' name='username' value='".$username."'>
    <input type='hidden' name='date' value='".date(".$$date.")."'>
    <textarea name='message'>".$message."</textarea><br>
    <button type = 'submit'name='commentSubmit'>Edycja</button>
</form>";

?>
</body>
</html>