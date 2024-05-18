<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>بيانات إضافة مستشار</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #eeeeee; /* رمادي فاتح */
      color: #333333; /* أسود */
      margin: 0;
      padding: 0;
      font-size: 20px;
    }
	header {
  
      color: #ffffff;
      padding: 10px;
      text-align: right;
	 

    }
	
    .di {
      display: flex;
      align-items: center;
      background-color: #000000;
    }
    .di img {
      width: 70px;
      margin-right: 10px;
    }
    
    .p1, .p2 {
      margin: 0;
    }

    h4 {
      text-align: center;
      color: #d32f2f; /* أحمر */
      margin-bottom: 20px;
      font-size: 35px;
    }

    fieldset {
      border: 2px solid #d32f2f; /* أحمر */
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #ffffff; /* أبيض */
      width: 600px;
      text-align: right;
      
    }

    input, select {
      height: 40px;
      width: 100%;
      margin-bottom: 20px;
      padding: 5px;
      box-sizing: border-box;
    }

    input[type="radio"] {
      height: 20px;
      width: 20px;
      margin-right: 10px;
    }

    input[type="submit"] {
      height: 50px;
      width: 250px;
      font-size: 20px;
      margin-top: 20px;
      background-color: #d32f2f; /* أحمر */
      color: #ffffff; /* أبيض */
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    select {
      height: 40px;
      width: 100%;
      margin-bottom: 20px;
      padding: 5px;
      box-sizing: border-box;
    }

    table.content {
      direction: rtl;
      margin: auto;
      width: 100%;
      max-width: 800px;
    }

    table.content th, table.content td {
      border: 1px solid #cccccc; /* رمادي */
      padding: 10px;
      text-align: right;
    }

    table.content th {
      background-color: #d32f2f; /* أحمر */
      color: #ffffff; /* أبيض */
    }

    table.content tr:nth-child(even) {
      background-color: #f2f2f2; /* رمادي فاتح */
    }

    table.content tr:hover {
      background-color: #dddddd; /* رمادي فاتح قاتم */
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
      z-index: 999;
    }
    .social-icons {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
    }
    .social-icons a {
      text-decoration: none;
      margin: 0 5px;
      color: white;
    }
    .social-icons a:hover {
      color: #ccc;
    }
    .footer p {
      margin: 0;
      font-size: 14px;
    }
  </style>
</head>
<body>
<header style="text-align: right; background-color:#000000; color: #ffffff; padding: 10px;">

<div class="di">
    <img src="logo.png" alt="Logo">
    <div>
        <p class="p1">الموقع الرسمي</p>
        <p class="p2" style="font-size:20px">للهيئة العليا للأنتخابات</p>
    </div>
    <a href="mainend.html"><img src="home.png" style="margin-right:55rem; "></a>

</div>
</header>
  <center>
  

      

<h4>إضافة مستشار </h4>


          <form action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>بيانات  المستشار</legend>  
                الأسم الأول: <br><input type="text" name="f_Name"><br>
                الأسم الثاني: <br><input type="text" name="m_Name"><br>
                الأسم الثالث: <br><input type="text" name="l_Name"><br>
                الرقم القومي: <br><input type="text" name="J_id"><br>
                تاريخ الميلاد: <br><input type="date" name="Birthdate"><br>
                البريد الإلكتروني: <br><input type="text" name="Email"><br>
                العنوان: <br><input type="text" name="Address"><br>
                الرقم السري: <br><input type="text" name="v_Password"><br>
                رقم الكارت: <br><input type="text" name="Card_id"><br>
            <div style="text-align: center;">
                <input  type="submit" value="إرسال">
            </div>   
        </form>
      </center>
  <footer class="footer" style="position: relative; margin-top: 20px;">
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <p>جميع حقوق الطبع محفوظة للهيئة الوطنية للأنتخابات</p>
</footer>

</body>
</html>
<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "online_v"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $f_Name = $_POST['f_Name'];
    $m_Name = $_POST['m_Name'];
    $l_Name = $_POST['l_Name'];
    $J_id = $_POST['J_id'];
    $v_Password = $_POST['v_Password'];
    $Email = $_POST['Email'];
    $Birthdate = $_POST['Birthdate'];
    $Address = $_POST['Address'];
    $Card_id = $_POST['Card_id'];
     

    // SQL query to insert data into the database
    $sql = "INSERT INTO  judge (f_Name, m_Name, l_Name, J_id,v_Password, Email, Birthdate, Address, Card_id) VALUES ('$f_Name', '$m_Name', '$l_Name', '$J_id', '$v_Password', '$Email', '$Birthdate', '$Address', '$Card_id')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
      echo '<script type="text/javascript"> alert ("Successful addition")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>