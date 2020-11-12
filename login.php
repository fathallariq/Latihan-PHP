<?php 
$conn = mysqli_connect("localhost", "root", "root", "phpsiswa");
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	if(mysqli_num_rows($result) === 1){

		$row = mysqli_fetch_assoc($result);
		if ($row["password"] == $password) {
			header("Location:index.php");
			exit;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>LOGIN SISWA</h1>
	<form action="" method="POST">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
		</ul>
		<ul>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
		</ul>
		<ul>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>