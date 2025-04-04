<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>

<!-- Login form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required />

    <label for="password">Password:</label>
    <input type="password" name="password" required min=10>

    <input type="submit" value="Login" />
</form>

<!-- Display error message if any -->
<?php if (!empty($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root";
$serverPassword = "alex";
$dbname = "School";

// Create connection
$conn = new mysqli($servername, $username, $serverPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message variable
$error = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate if email and password are provided
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password']; // Plain-text password from the form

        // Fetch user from the database
        $sql = "SELECT * FROM mysignup WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row["password"])) {
                // Successful login, start session
                $_SESSION['user_id'] = $row['id']; // Store user ID in session
                $_SESSION['firstname'] = $row['firstname']; // Optionally store first name
                
                // Redirect to goAhead.php after login
                header("Location: goAhead.php");
                exit(); // Ensure no further code runs after redirect
            } else {
                $error = "Invalid password. Please try again.";
            }
        } else {
            $error = "No user found with that email.";
        }
    } else {
        $error = "Please fill in both email and password.";
    }
}

$conn->close(); // Close the connection
?>

</body>
</html>
