<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>إضافة مسئول</title>
<link rel="stylesheet" href="C:\xampp\htdocs\pro\pro\css/counter.css">
<meta charset="UTF-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  input[type="date"] {
      height: 35px;
      width: 750px;
      margin-right: 10px;
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
<div class="container">
  <h1>Admin</h1>
  <form id="personForm" action="" method="post">

    <label for="nationalId">الاسم الأول</label>
    <input type="text" id="name" name="f_Name" required><br><br>
    <label for="nationalId">الأسم الثاني </label>
    <input type="text" id="name" name="m_Name" required><br><br>
    <label for="nationalId">الاسم الثالث</label>
    <input type="text" id="name" name="l_Name" required><br><br>
    <label for="nationalId">Ad-Id</label>
    <input type="text" id="nationalId" name="Ad_id" required><br><br>
    <label for="nationalId">Password</label>
    <input type="text" id="nationalId" name="v_Password" required><br><br>
    <label for="name">Email</label>
    <input type="text" id="name" name="Email" required><br><br>
    <label for="name">Birthdate</label><br>
    <input type="date" id="date" name="Birthdate" required><br><br>
    <label for="name">Address</label>
    <input type="text" id="name" name="Address" required><br><br>
    <label for="name">Card-Id</label>
    <input type="text" id="card_id" name="card_id" required><br><br>

    
    <button type="submit">ADD</button>
  </form>
  <div id="output"></div>
</div>
<script src="script.js"></script>

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
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "online_v");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$f_Name = $_POST['f_Name'];
$m_Name = $_POST['m_Name'];
$l_Name = $_POST['l_Name'];
$Ad_id = $_POST['Ad_id'];
$v_Password = $_POST['v_Password'];
$Email = $_POST['Email'];
$Birthdate = $_POST['Birthdate'];
$Address = $_POST['Address'];
$card_id = $_POST['card_id'];

// Insert data into database
$sql = "INSERT INTO admin (f_Name, m_Name, l_Name, Ad_id, v_Password, Email, Birthdate, Address, card_id)
        VALUES ('$f_Name', '$m_Name', '$l_Name', '$Ad_id', '$v_Password', '$Email', '$Birthdate', '$Address', '$card_id')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript"> alert ("Successful addition")</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
