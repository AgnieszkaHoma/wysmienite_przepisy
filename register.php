<?php

include 'configuration.php';
error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, password)
					VALUES ('$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Rejestracja zakończona sukcesem.')</script>";
				$username ="";
				$_POST['password'] ="";
				$_POST['cpassword'] ="";
			} else {
				echo "<script>alert('Ups! Spróbuj jeszcze raz.')</script>";
			}
		} else {
			echo "<script>alert('Ups! Nazwa użytkownika jest już zajęta.')</script>";
		}
		
	} else {
		echo "<script>alert('Hasła do siebie nie pasują.')</script>";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="appp.css">
	<title>Wyśmienite przepisy</title>
</head>
<body>

        <div class="container">
            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Załóż konto</p>
                <div class="input-group">
                    <input type="text" placeholder="Nazwa użytkownika" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Hasło" name = "password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Potwierdź hasło" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Zarejestruj się</button>
                </div>
                <p class="login-register-message">
                Masz już konto? <a href="login.php">Zaloguj się</a>
                </p>
            </form>
        </div>
</body>
</html>