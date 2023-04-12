<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
  <link rel="stylesheet" type="text/css" href="style/access_style.css">
</head>
<body>
	<h2>Registration Form</h2>
<div class="form-container">

  <h2 id="form-title">Login Form</h2>
  <form id="login-form" method="post" action="auth.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
    </div>
    <button type="submit" name="login">Login</button>
    <p>Don't have an account yet? <a href="#" id="register-link">Register here</a></p>
  </form>
  <form id="register-form" method="post" action="auth.php" style="display:none;">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
    </div>
    <button type="submit" name="register">Register</button>
    <p>Already have an account? <a href="#" id="login-link">Login here</a></p>
  </form>
  <script src="scripts/access.js"></script>


</div>

  
</div>


	<?php
		// connect to the database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// handle registration form submission
		if (isset($_POST['register'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			// insert user data into database
			$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
			
			if (mysqli_query($conn, $sql)) {
				echo "Registration successful!";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}

		// handle login form submission
		if (isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			// check if user exists in database
			$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) == 1) {
				echo "Login successful!";
			} else {
				echo "Invalid email or password.";
			}
		}

		// close database connection
		mysqli_close($conn);
	?>

	
</body>

</html>
