<?php
session_start(); // Start the session

// Set the session variable to indicate the user has accessed this page
$_SESSION['accessed'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<body>
    <h1 style="text-align: center;
    justify-items: center;">
    
    welcome to signup page </h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" required>

        <label for="phonenumber">Phone Number:</label>
        <input type="number" name="phonenumber" id="phonenumber" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required min(10)>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="female" id="female">Female
        <input type="radio" name="gender" value="male" id="male">Male
        <input type="radio" name="gender" value="other" id="other">Other
        <br>
        <input type="submit" value="Sign Up">
        <br>
        <h4>Have an account? <a href="login.php">Login here</a></h4>
    </form>

    <?php
    // Initialize error and success message variables
    $error = "";
    $success = "success";

    // PHP Code for form processing
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize user input
        $fname = htmlspecialchars(trim($_POST["firstname"]));
        $lname = htmlspecialchars(trim($_POST["lastname"]));
        $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hash the password

        // Database connection
        $servername = "localhost";
        $username = "root";
        $serverPassword = "alex";
        $dbname = "School"; // Make sure the database exists

        $conn = new mysqli($servername, $username, $serverPassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, phonenumber, email, password, gender) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error); // Add this line to check for errors
}
        $stmt->bind_param("ssssss", $fname, $lname, $phonenumber, $email, $password, $_POST['gender']); // Use the gender value

        // Execute the prepared statement
        if ($stmt->execute()) {
            $success = "Signup successful! You can now log in.";
        } else {
            $error = "Error: " . $stmt->error; // Capture any errors during insertion
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }

    // Display success or error message
    if (!empty($success)) {
        echo "<p style='color: green;'>$success</p>";
    }
    if (!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }


    ?>
</body>
</html>
