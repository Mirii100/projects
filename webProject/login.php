<?php
// Check for a success message in the URL
$success = isset($_GET['success']) ? htmlspecialchars($_GET['success']) : '';
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$serverPassword = "alex";
$dbname = "School";

$conn = new mysqli($servername, $username, $serverPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error and success message variables
$error = "";
$success = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if email and password are set and not empty
    if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $conn->real_escape_string(trim($_POST['email'])); // Sanitize email input
        $password = $_POST['password']; // Plain-text password from the form

        // Fetch user from the database
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row["password"])) {
                // Successful login, prepare success message
                $success = "Login successful! Welcome, " . htmlspecialchars($row['firstname']) . ".";

                // Redirect to homepage
                header("Location: home.php?success=" . urlencode($success));
                exit(); // Make sure no further code is executed after redirect
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

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        // Function to display alert messages
        function showAlert(message) {
            alert(message);
        }

        // Execute alert for success or error message
        window.onload = function() {
            <?php if (!empty($success)): ?>
                showAlert('<?php echo addslashes($success); ?>');
            <?php elseif (!empty($error)): ?>
                showAlert('<?php echo addslashes($error); ?>');
            <?php endif; ?>
        };
    </script>
</head>
<body>
<h2>Login</h2>

<!-- Login form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required />

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login" />
    <i><h4>dont have an account ? signup here <br><a href="index.php">signup</a></h4> </i>
</form>

</body>
</html>
