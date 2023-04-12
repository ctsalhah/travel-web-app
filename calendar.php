<!DOCTYPE html>
<html>
<head>
    <title>Datepicker Example</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker-departure" ).datepicker({
                dateFormat: "yy-mm-dd",
            });
            $( "#datepicker-return" ).datepicker({
                dateFormat: "yy-mm-dd",
            });
        });
    </script>
    <style>
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <h1>Select Departure and Return Dates</h1>
    <form>
        <label for="datepicker-departure">Departure Date:</label>
        <input type="text" id="datepicker-departure">
        <label for="datepicker-return">Return Date:</label>
        <input type="text" id="datepicker-return">
        <button type="submit">Book Now</button>
        <button href="index.html" class="square-btn">Back to Homepage</button>
    </form>
  
	
</body>
</html>
