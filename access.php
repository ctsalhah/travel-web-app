<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>

	<style>
		.form-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 50px auto;
}

h2 {
  margin-bottom: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="email"],
input[type="password"],
input[type="text"] {
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 16px;
  width: 100%;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#toggle-form {
  color: #007bff;
  cursor: pointer;
}

	</style>
</head>
<body>
	<h2>Registration Form</h2>
<div class="form-container">

  <h2 id="form-title">Login Form</h2>
  <form id="login-form" method="post" action="">
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
  <form id="register-form" method="post" action="" style="display:none;">
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
  <script>
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");
    const formTitle = document.getElementById("form-title");
    const registerLink = document.getElementById("register-link");
    const loginLink = document.getElementById("login-link");

    function toggleForm(e) {
      e.preventDefault();
      if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        registerForm.style.display = "none";
        formTitle.innerText = "Login Form";
        registerLink.innerText = "Register here";
      } else {
        loginForm.style.display = "none";
        registerForm.style.display = "block";
        formTitle.innerText = "Registration Form";
        loginLink.innerText = "Login here";
      }
    }

    registerLink.addEventListener("click", toggleForm);
    loginLink.addEventListener("click", toggleForm);
  </script>

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
