<!DOCTYPE html>
<html>
<head>
    <title>Online Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: rgb(156, 209, 156);
            color: white;
            max-width: 500px;
            margin: 0 auto; 
            max-height: 40px;
        }
        .registration-title {
            margin-bottom: 20px;
            text-align: center;
            margin-top: 0;
        }
        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="date"], input[type="password"], input[type="number"], input[type="submit"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .dob-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .calendar-icon {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <br>
    <div class="header">
        <h1 class="registration-title">Online Registration</h1>
    </div>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <h3>First Name</h3>
                    <input type="text" name="firstName" placeholder="Enter your first name" required>
                </div>
                <div style="width: 48%;">
                    <h3>Last Name</h3>
                    <input type="text" name="lastName" placeholder="Enter your last name" required>
                </div>
            </div>
            <h3>Email</h3>
            <input type="email" name="email" placeholder="Enter your email" required>
            <h3>Company (if applicable)</h3>
            <input type="text" name="company" placeholder="Enter your company">
            <h3>Physical Address</h3>
            <input type="text" name="address" placeholder="Enter your address" required>
            <h3>Date of Birth</h3>
            <div class="dob-container">
                <div style="width: 22%;">
                    <input type="number" name="day" placeholder="Day" min="1" max="31" required>
                </div>
                <div style="width: 22%;">
                    <input type="number" name="month" placeholder="Month" min="1" max="12" required>
                </div>
                <div style="width: 22%;">
                    <input type="number" name="year" placeholder="Year" min="1900" max="2023" required>
                </div>
                <div style="width: 22%;">
                    <span class="calendar-icon">&#128197;</span>
                </div>
            </div>
            <input type="submit" value="Register">
        </form>

        <?php
        // Process form data on submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $address = $_POST['address'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            // Display entered data
            echo "<div id='displayData'>";
            echo "<h2>Entered Data:</h2>";
            echo "<p>First Name: " . $firstName . "</p>";
            echo "<p>Last Name: " . $lastName . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Company: " . $company . "</p>";
            echo "<p>Physical Address: " . $address . "</p>";
            echo "<p>Date of Birth: " . $day . "/" . $month . "/" . $year . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
