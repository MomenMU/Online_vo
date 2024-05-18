<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "online_v"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if(isset($_POST['upload'])){
    // Get form data
    $f_Name = $_POST['f_Name'];
    $m_Name = $_POST['m_Name'];
    $l_Name = $_POST['l_Name'];
    $C_id = $_POST['C_id'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Nationality = $_POST['Nationality'];
    $Card_id = $_POST['Card_id'];
    $v_Password = $_POST['v_Password'];
    $Birthdate = $_POST['Birthdate'];
    $Address = $_POST['Address'];
    $Job = $_POST['Job'];
    $Father_Name = $_POST['Father_Name'];
    $Father_Id = $_POST['Father_Id'];
    $Father_Birth = $_POST['Father_Birth'];
    $Father_Death = $_POST['Father_Death'];
    $Father_Job = $_POST['Father_Job'];
    $Father_Nationality = $_POST['Father_Nationality'];
    $Mother_Name = $_POST['Mother_Name'];
    $Mother_Id = $_POST['Mother_Id'];
    $Mother_Birth = $_POST['Mother_Birth'];
    $Mother_Death = $_POST['Mother_Death'];
    $Mother_Job = $_POST['Mother_Job'];
    $Mother_Nationality = $_POST['Mother_Nationality'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    // Get image data
   
    // SQL query to insert data into the database
    $sql = "INSERT INTO candidate (f_Name, m_Name, l_Name, C_id, Gender, Email, Nationality, Card_id, v_Password, Birthdate, Address, Job, Father_Name, Father_Id, Father_Birth, Father_Death, Father_Job, Father_Nationality, Mother_Name, Mother_Id, Mother_Birth, Mother_Death, Mother_Job, Mother_Nationality, image) 
            VALUES ('$f_Name', '$m_Name', '$l_Name', '$C_id', '$Gender', '$Email', '$Nationality', '$Card_id', '$v_Password', '$Birthdate', '$Address', '$Job', '$Father_Name', '$Father_Id', '$Father_Birth', '$Father_Death', '$Father_Job', '$Father_Nationality', '$Mother_Name', '$Mother_Id', '$Mother_Birth', '$Mother_Death', '$Mother_Job', '$Mother_Nationality', '$file')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript"> alert ("Successfully ADD")</script>';
    } else {
        echo '<script type="text/javascript"> alert ("Unsuccessfully ADD")</script>';
    }
}

// Close connection
$conn->close();
?>
