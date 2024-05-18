<?php


// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'Online_Voting_System';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





// Include database connection
include_once 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to fetch password from database
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
            // Redirect to dashboard or another page
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "User not found.";
    }
}
?>
