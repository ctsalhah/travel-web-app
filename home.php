<!DOCTYPE html>
<html>
    <head>
        <title>Travel Website</title>
        <style>
            /* Style for the body */
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }

            /* Style for the top container */
            .top-container {
                background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8dHJhdmVsJTIwYWlycGxhbmV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60https://images.unsplash.com/photo-1614850715649-1d0106293bd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80');
                background-size: 100% 100%;
                height: 450px;
				/* width: 700px; */
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 50px;
                /* position: relative; */
            }

            .topnav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                padding: 5px;
                /* background-color: rgba(0,0,0,0.6); */
            }

            .left-nav {
                display: flex;
                align-items: center;
            }

            .right-nav {
                display: flex;
                align-items: center;
            }

            .register,
            .signin {
                margin-left: 10px;
            }

            /* Style for the top navigation bar */
            /* .topnav {
        display: flex;
        justify-content: space-between;
         align-items: center;
         position: absolute;
         top: 0;
        left: 0;
        right: 0; */
            /* padding: 5px 5px; */
            /* background-color: rgba(0,0,0,0.6); */
            /* justify-content: flex-end; */
            /* } */

            /* Style for the navigation bar links */
            .topnav a {
                color: #fff;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
				font-weight: 300;
				font-family:Verdana, Geneva, Tahoma, sans-serif;
                font-size: 16px;
            }

            /* Style for the register and sign in buttons */
            
            .topnav .register {
            /* background-color: #000000; */
            color: #636363;
            padding: 14px 16px;
             border: none;
             border-radius: 5px;
             cursor: pointer;
             font-size: 12px;
             margin-right: 10px;
            transition: background-color 0.3s ease-in-out; /* added transition property */
            }

            .topnav .register:hover {
            background-color: #000000; /* added hover effect */
            color: #ffffff; /* added hover effect */
            }

			.topnav .signin {
                background-color: #000000;
                color: white;
                /* padding: 14px 16px; */
				width: 70px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 12px;
                margin-right: 10px;
            }

            /* Style for the burger menu icon */
            .burger {
                display: none;
                cursor: pointer;
                margin-right: 10px;
                color: #fff;
                font-size: 25px;
            }

            /* Style for the logo */
            .logo {
                color: #fff;
                font-size: 36px;
                font-weight: bold;
				font-family: sans-serif;
            }

            /* Style for the row of containers */
            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                margin: 50px;
            }

            /* Style for each container */
            .container {
				position: relative;
                width: 240px;
                margin: 20px;
                /* border: 1px solid black; */

                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            /* Style for the container image */
            .container img {
                width: 95%;
                height: 150px;
                /* object-fit: cover; */
                padding: 5px;


            }
            .container h3 {
                text-align: left;
                font-weight: 600;
                padding-left: 5px;
                font-size: 16px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            /* Style for the container description */
            .container p {
                /* padding: 15px; */
                text-align: left;
                font-size: 12px;
                padding-left: 5px;
				padding-bottom: 70px;
                font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
            }
            .square-btn {
                position: absolute;
                bottom: 0;
                right: 0;
                padding: 10px 20px; /* add padding to the button */
                background-color: black; /* set the background color of the button to blue */
                color: white;
				font-size: x-small; /* set the text color of the button to white */
                text-decoration: none; /* remove underline from the button text */
                border: none; /* remove border from the button */
                border-radius: 5px; /* remove border radius from the button */
                transition: background-color 0.3s ease; /*
			 add a transition effect to the background color */
			 padding: 10px;
            }

            .square-btn:hover {
                background-color: grey; /* change the background color of the button on hover */
                
            }

            /* Media query for small screens */
            @media screen and(max-width: 600px) {
                .topnav a:not(:first-child),
                .register {
                    display: none;
                }
                .topnav a.icon {
                    float: right;
                    display: block;
                }
                .topnav.responsive {
                    position: relative;
                }
                .topnav.responsive .icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: center;
                    padding: 16px;
                }
                .topnav.responsive .register,
                .topnav.responsive .signin {
                    float: none;
                    display: block;
                    text-align: center;
                
                }
                .topnav.responsive .logo {
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                }
                .burger {
                    display: block;
                }
                .row {
                    margin: 20px;
                    
                }
                .container {
                    width: 100%;
                }
            }
        </style>

    </head>
    <body>
        <!-- Top container with background image -->
        <div class="top-container">
            <div class="topnav" id="myTopnav">
                <div class="left-nav">
                    <a href="#" class="logo">Tix And Fly</a>
                </div>
                <!-- start from here -->
                <div class="right-nav">
                    <a href="access.php" class="register">Register</a>
                    <a href="access.php" class="signin">Log In</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars burger"></i>
                    </a>
                </div>

                <!-- change to display username and email when login -->
            </div>
        </div>

        <!-- Row of containers -->
        <div class="row">
            <div class="container">
                <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2538&q=80" alt="Beach">
                <h3>Indonesia</h3>
                <p>Indonesia: Beautiful landscapes, diverse culture, delicious cuisine, hospitable people.
                </p>
                <a href="moreinfoindonesia.html" class="square-btn">More Info</a>
            </div>
            <div class="container">
                <img src="https://images.unsplash.com/photo-1572529593091-6c05c37cacc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHRoYWlsYW5kfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="Thailand">
                <h3>Thailand</h3>
				<p>Thailand: Stunning beaches, historic temples, spicy cuisine, friendly people.
                </p>
                <a href="moreinfothailand.html" class="square-btn">More Info</a>
            </div>
            <div class="container">
                <img src="https://images.unsplash.com/photo-1570366583862-f91883984fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHZpZXRuYW18ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="City">
                <h3>Vietnam</h3>
				<p>Vietnam: Breathtaking scenery, rich heritage, flavorful cuisine, gracious hospitality.
                </p>
                <a href="moreinfovietnam.html" class="square-btn">More Info</a>
            </div>
            <div class="container">
                <img src="https://plus.unsplash.com/premium_photo-1661885493074-e18964497278?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c291dGglMjBrb3JlYSUyMG5hbXNhbiUyMHRvd2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" alt="SouthKorea">
                <h3>South Korea</h3>
				<p>South Korea: Rich history, delicious food, modern attractions. Must-visit destination.
                </p>
                <a href="moreinfosouthkorea.html" class="square-btn">More Info</a>
            </div>
        </div>

        <!-- JavaScript for the burger menu functionality -->
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
