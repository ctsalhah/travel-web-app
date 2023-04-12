<!DOCTYPE html>
<html>
<head>
    <button class="back-button" style="background-color: transparent;">
        <a href="index.html" class="back-icon" style="text-decoration:none; color: black;">&#8249; Back</a>
    </button>
    
    
      	<title>Two Content Sections HTML Page</title>
	<style>
a {

  text-decoration: none;
}
        .back-button {
  background-color: transparent;
  border: none;
  color: black;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  padding: 8px 12px;

}

.back-icon {
  display: inline-block;
  margin-right: 8px;
}
		.container {
			display: flex;
			flex-direction: row;
			height: 100vh;
		}

        .container img {
            width: 97%;
            height: 400px;
            padding: 10px;
        }

		.left-section {
			flex: 1;
			background-color: #716A5C;
			padding: 5px;
            margin-bottom: auto;
		}

		.right-section {
			flex: 1;
			background-color: e3bc9a;
			padding: 20px;
            font-family:Arial, Helvetica, sans-serif ;
		}
        .right-section h2 {
            font-family: monospace, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
        }

        .right-section p {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: justify;
        }

        .right-section h1{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
        }
        body {
	background-color: #F1E9DB;
	padding: 50px;
}

form {
    border-color: bisque;
	background-color: #fff;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    text-align: center;
}

label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
}

input[type="date"] {
	padding: 10px;
	border-radius: 5px;
	border: none;
	background-color: #f2f2f2;
	font-size: 16px;
	margin-bottom: 20px;
}

input[type="submit"]:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	padding: 10px 20px;
	border-radius: 5px;
	border: none;
	font-size: 15px;
	cursor: pointer;
    background-color: grey;
    color: #fff; 
}

.right-section h1 {
    text-align: center;
}

form label, form input {
			display: inline-block;
			vertical-align: top;
		}

form label {
			width: 120px; /* adjust this to your liking */
		}
form input[type="date"] {
			width: 200px; /* adjust this to your liking */
		}
.center {
			text-align: center;
		}

        form input[type="submit"] {
			margin-top: 10px;
			padding: 10px 20px;
			background-color:black;
            font-size: 15px;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
            text-align: center;
            margin-bottom: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 15px;
}

        
	</style>
</head>
<body>
	<div class="container">
		<div class="left-section">
            <img src="https://images.unsplash.com/photo-1570366583862-f91883984fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHZpZXRuYW18ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="Vietnam">
		</div>
		<div class="right-section">
			<!-- content for the right section -->
			<h2>V I E T N A M</h2>
            <h1>RM 1200</h1>
            <P>Vietnam is a cultural haven, offering a diverse range of experiences that include ancient temples, historical festivals, traditional crafts, and bold cuisine. Top cultural landmarks to visit include Hue's ancient temples and Hoi An's Old Town, while cooking classes and food tours offer travelers the chance to sample the unique blend of herbs and spices in Vietnamese cuisine. Ho Chi Minh City, Hanoi, and Ha Long Bay are just some of the popular destinations that showcase Vietnam's blend of French colonial and modern architecture, rich history, and stunning natural landscapes, including beautiful beaches and terraced rice fields. With a mix of cultural and natural attractions, Vietnam is a country that has something for everyone.</P>

<br>
<br>
<br>

	<body>
        <form action="booking.php" method="post">
            <h1>Book Your Flight Now!</h1>
            <br>
            <label for="depart-date">Departure Date:</label>
            <input type="date" id="depart-date" name="depart-date">
            <br><br>
            <label for="return-date">Return Date:</label>
            <input type="date" id="return-date" name="return-date">
            <br><br>
            <input type="submit" value="Book Now">
        </form>
    </body>
</html>




