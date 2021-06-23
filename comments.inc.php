<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])) {
        $username = $_POST['username'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO poczekalnia (username, date, message)
        VALUES ('$username', '$date', '$message')";
        $result = $conn->query($sql);

    }
}

function getComments($conn) {
    $sql = "SELECT * FROM poczekalnia";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<div class ='comment-area'><p>";
            echo $row['username']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>
            <form class='delete-form' method = 'POST' action='".deleteComments($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Usuń</button>
            </form>
            <form class='edit-form' method = 'POST' action='commentedit.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='username' value='".$row['username']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Edytuj</button>
            </form>
        </div>";
    }
    }
    
    function editComments($conn) {
        if(isset($_POST['commentSubmit'])) {
            $cid = $_POST['cid'];
            $username = $_POST['username'];
            $date = $_POST['date'];
            $message = $_POST['message'];
    
            $sql = "UPDATE poczekalnia SET message='$message' WHERE cid='$cid'";
            $result = $conn->query($sql);
            header("location: poczekalniaadmin.php");
    
        }
    }

    function deleteComments($conn) {
        if(isset($_POST['commentDelete'])) {
            $cid = $_POST['cid'];
    
            $sql = "DELETE FROM poczekalnia WHERE cid='$cid'";
            $result = $conn->query($sql);
            header("location: poczekalniaadmin.php");
    
        }
    }
?>