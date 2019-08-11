<?php require("./db.php"); ?>
<?php 
	if(isset($_POST["submit"])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$city = $_POST['city'];
		$contact = $_POST['contact'];

		$query = "INSERT INTO user(name, email, password, city, contact) VALUES('$name','$email','$password','$city','$contact')";
		$result = mysqli_query($con, $query);
		if(!$result){
			echo "Not Succefully!";
		}
		return header("Location:login.php");
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
				<li><a href="login.php">Login</a></li>
			</ul>
		</div><!-- links -->
	</div><!-- login -->
</div>
<div class="wrapper1 clerafix">
	<form action="" method="post">
		<h1>Register</h1>
		<div class="form-group">
			<label>Name:</label><br>
			<input type="text" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label>Email:</label><br>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Password:</label><br>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<label>City:</label><br>
			<input type="text" name="city" placeholder="City">
		</div>
		<div class="form-group">
			<label>Contact:</label><br>
			<input type="text" name="contact" placeholder="Contact">
		</div>
		<div class="button">
			<input type="submit" name="submit" value="SUBMIT">
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