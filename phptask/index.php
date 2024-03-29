<!DOCTYPE html>
<html>
<head>
    <title>Tour Booking System</title>
    <link rel="stylesheet" href="Index.css"></link>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            /* background-color: #050505; */
            background-color: #3ff3f9;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            
        }
        /* input[type="body"]:hover {
            background-color: #050505;
            color: #3ff3f9;
        } */
        form {
            width: 50%;
            margin: 0 auto;
            /* background-color: #fff; */
            /* background-color: #050505; */
            background-color: #050505;
            /* color: #fff */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #3ff3f9;
            color: #050505;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #050505;
            color: #3ff3f9;
        }
    </style>
</head>
<body>
    <h2>Book a Tour Package</h2>
    <form action="datapost.php" method="post">
        <label for="Full_name">Full name:</label>
        <input type="text" id="Full_name" name="Full_name" required>
        
        <label for="Phone_number">Phone number:</label>
        <input type="text" id="Phone_number" name="Phone_number" required>
        
        <label for="Destination">Destination:</label>
        <input type="text" id="Destination" name="Destination" required>

        <label for="date">Travel month:</label>
        <input type="date" id="travel_month" name="date" required>
        
        <label for="No_of_pax">No of pax:</label>
        <input type="text" id="passenger" name="No_of_pax" required>
        
        <input type="submit" value="Book Tour package">
    </form>
</body>
</html>