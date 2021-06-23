<?php
    date_default_timezone_set('Europe/Warsaw');
    include 'dbcon.inc.php';
    include 'comments.inc.user.php';
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentarze</title>
    <link rel="stylesheet" type="text/css" href="commentsstyle.css">
</head>
<body>
<?php
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='username' value='Użytkownik'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type = 'submit'name='commentSubmit'>Skomentuj</button>
</form>";

getComments($conn);
?>
</body>
</html>