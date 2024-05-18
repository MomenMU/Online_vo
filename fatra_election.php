<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>اضافة مرشح</title>
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
			<img src="logo-og.png" alt="Logo">
			<div>
				<p class="p1">الموقع الرسمي</p>
				<p class="p2">للهيئة العليا للانتخابات</p>
			</div>
		</div>
	</header>
  <center>
  <h4> إضافة فترة إنتخابية </h4>

        <fieldset>
          <legend style="font-size:larger; font-weight: bold;">إضافة فترة إنتخابية</legend>  


  <form  action="" method="post" enctype="multipart/form-data"></a>
          رقم الفتره الانتخابيه:<br><input type="text" name="E_id"><br>
          نوع الفترة الانتخابية: <br><select class="input" type="text" name="E_Type">
            
            <option class="input">
              إنتخابات رئاسية
           </option>
           <option class="input">
               إنتخابات مجلس الشعب
           </option>
           <option class="input">
               إنتخابات الدستور
           </option>
</select><br>

          تاريخ بداية الفترة الانتخابية: <br><input type="date" name="E_Start"><br>
          تاريخ نهاية الفترة الانتخابية:<br><input type="date" name="E_End"><br>
        <center> 
      <input type="submit" value="إدخال">
      

        </center> 
      </form></fieldset>

      </center>


  <footer class="footer" style="position: relative; margin-top: 20px;">
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <p>جميع حقوق الطبع محفوظة للهيئة الوطنية للانتخابات</p>
</footer>

</body>
</html>


<?php
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "online_v";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the required keys are set in $_POST
if(isset($_POST['E_id'], $_POST['E_Start'], $_POST['E_End'], $_POST['E_Type'])) {
    // Retrieve data from $_POST
    $E_id = $_POST['E_id'];
    $E_Start = $_POST['E_Start'];
    $E_End = $_POST['E_End'];
    $E_Type = $_POST['E_Type'];

    // Your SQL INSERT query
    $sql = "INSERT INTO elections (E_id, E_Start, E_End, E_Type) 
            VALUES ('$E_id', '$E_Start', '$E_End', '$E_Type')";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {

        echo '<script type="text/javascript"> alert ("Successfully ADD")</script>';

    } else {
         echo '<script type="text/javascript"> alert ("Unsuccessfully ADD")</script>';

    }
} else {
    // Handle case where required keys are missing
    echo "Some form fields are missing.";
}
?>