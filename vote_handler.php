<?php
// Check if form is submitted and vote is selected
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vote'])) {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "online_v");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the selected person's ID
    $C_id = $_POST['vote'];

    // Update the votes for the selected person
    $sql = "UPDATE candidate SET vote = vote + 1 WHERE C_id = $C_id";
    if ($conn->query($sql) === TRUE) {


        // Close the database connection
        $conn->close();
        
        // Redirect back to the voting page
        header("Location: vote.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    // Redirect back to the voting page if vote is not selected
    header("Location: vote.php");
    exit();
}
?>
