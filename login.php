<?php require("./db.php");
session_start(); 
?>
<?php 
	
	if(isset($_POST["submit"])){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$query = "SELECT * FROM user WHERE email='$email' AND password=$password";
		$result = mysqli_query($con, $query);

		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['id'];
			header('Location: home.php');
		}else{
			echo "erro";
			header('Location: login.php');
		}
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="wrapper">
	<div class="login clearfix">
		<div class="links">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</div><!-- links -->
	</div><!-- login -->
</div>
<div class="wrapper1 clerafix">
	<form action="" method="post">
		<h1>Login</h1>
		<div class="form-group">
			<label>Email:</label><br>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Password:</label><br>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="button">
			<input type="submit" name="submit" value="LOGIN">
		</div>
	</form>

	<footer class="clerafix">
		<div class="footer-group">
			<h4>tharindukavishna@gmail.com &copy; panama</h4>
		</div>
	</footer>
</div><!-- wrapper -->
</body>
</html>