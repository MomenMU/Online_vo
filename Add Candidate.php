<!DOCTYPE html>
<html dir="rtl">
<head>
<title>بيانات إضافة مرشح</title>
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
  <h4>بيانات المرشح الأساسية</h4>

    


          <form action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>بيانات المرشح الأساسية</legend>  
                الصورة الشخصية للمرشح: * <br><input type="file" name="image" accept="image/gif, image/jpeg, image/png"><br>
                صورة رمز الخاص بالمرشح * <br><input type="file" name="image_ramz" accept="image/gif, image/jpeg, image/png"><br>
                الأسم المرشح الأول: <br><input type="text" name="f_Name"><br>
                الأسم الثاني: <br><input type="text" name="m_Name"><br>
                الأسم الثالث: <br><input type="text" name="l_Name"><br>
                الرقم القومي: <br><input type="text" name="C_id"><br>
                النوع: <br>
                <input type="radio" name="Gender" value="male">ذكر
                <input type="radio" name="Gender" value="female">أنثى <br>
                البريد الإلكتروني: <br><input type="text" name="Email"><br>
                الجنسية: <br><input type="text" name="Nationality"><br>
                رقم الكارت: <br><input type="text" name="Card_id"><br>
                الرقم السري: <br><input type="text" name="v_Password"><br>
                تاريخ الميلاد: <br><input type="date" name="Birthdate"><br>
                محل الميلاد: <br>
                <select name="Address">
                    <option value="">جميع المحافظات</option>
                    <option value="86">القليوبية</option>
                    <option value="141">الجيزة</option>
				<option value="19" class="no-lc 99901">القاهرة</option>
				<option value="205" class="no-lc 99902">قنا</option>
				<option value="51" class="no-lc 99903">دمياط</option>
				<option value="78" class="no-lc 99903">الشرقية</option>
				<option value="159" class="no-lc 99902">بني سويف</option>
				<option value="311" class="no-lc 99902">الأقصر</option>
				<option value="221" class="no-lc 99902">البحر الأحمر</option>
				<option value="61" class="no-lc 99901">الدقهلية</option>
				<option value="264" class="no-lc 99903">جنوب سيناء</option>
				<option value="248" class="no-lc 99904">مرسى مطروح</option>
				<option value="132" class="no-lc 99903">الإسماعيلية</option>
				<option value="116" class="no-lc 99901">المنوفية</option>
				<option value="183" class="no-lc 99902">أسيوط</option>
				<option value="43" class="no-lc 99903">السويس</option>
				<option value="167" class="no-lc 99902">الفيوم</option>
				<option value="175" class="no-lc 99902">المنيا</option>
				<option value="231" class="no-lc 99902">الوادي الجديد</option>
				<option value="35" class="no-lc 99903">بورسعيد</option>
				<option value="191" class="no-lc 99902">سوهاج</option>
				<option value="256" class="no-lc 99903">شمال سيناء</option>
				<option value="108" class="no-lc 99901">الغربية</option>
				<option value="27" class="no-lc 99904">الأسكندرية</option>
				<option value="124" class="no-lc 99904">البحيرة</option>
				<option value="94" class="no-lc 99901">كفر الشيخ</option>
				<option value="213" class="no-lc 99902">أسوان</option>
          </select><br>
                    <!-- Add more options -->
            
                العمل التابع له: <br><input type="text" name="Job"><br>

            </fieldset>
            <fieldset>
                <legend>بيانات الأب</legend>  
                أسم الوالد: <br><input type="text" name="Father_Name"><br>
                الرقم القومي للوالد: <br><input type="text" name="Father_Id"><br>
                جنسية الوالد: <br><input type="text" name="Father_Nationality"><br>
                تاريخ ميلاد الوالد: <br><input type="date" name="Father_Birth"><br>
                جهة العمل: <br><input type="text" name="Father_Job"><br>
            </fieldset>
            <fieldset>
                <legend>بيانات الأم</legend>  
                أسم الوالدة: <br><input type="text" name="Mother_Name"><br>
                الرقم القومي للوالدة: <br><input type="text" name="Mother_Id"><br>
                جنسية الوالدة: <br><input type="text" name="Mother_Nationality"><br>
                تاريخ ميلاد الوالدة: <br><input type="date" name="Mother_Birth"><br>
                جهة العمل:<br><input type="text" name="Mother_Job"><br>
            </fieldset>
            <div style="text-align: center;">
                <input type="submit" value="إرسال">
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
    <p>جميع حقوق الطبع محفوظة للهيئة الوطنية للانتخابات</p>
</footer>

</body>
</html>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $Father_Job = $_POST['Father_Job'];
    $Father_Nationality = $_POST['Father_Nationality'];
    $Mother_Name = $_POST['Mother_Name'];
    $Mother_Id = $_POST['Mother_Id'];
    $Mother_Birth = $_POST['Mother_Birth'];
    $Mother_Job = $_POST['Mother_Job'];
    $Mother_Nationality = $_POST['Mother_Nationality'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $ramz= addslashes(file_get_contents($_FILES["image_ramz"]["tmp_name"]));

    // Get image data
   
    // SQL query to insert data into the database
    $sql = "INSERT INTO candidate(f_Name, m_Name, l_Name, C_id, Gender, Email, Nationality, Card_id, v_Password, Birthdate, Address, Job, Father_Name, Father_Id,  Father_Nationality,Father_Birth, Father_Job,  Mother_Name, Mother_Id,  Mother_Nationality, Mother_Birth, Mother_Job, image,image_ramz) 
            VALUES ('$f_Name', '$m_Name', '$l_Name', '$C_id', '$Gender', '$Email', '$Nationality', '$Card_id', '$v_Password', '$Birthdate', '$Address', '$Job', '$Father_Name', '$Father_Id','$Father_Nationality', '$Father_Birth', '$Father_Job',  '$Mother_Name', '$Mother_Id','$Mother_Nationality', '$Mother_Birth', '$Mother_Job','$file','$ramz')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript"> alert ("Successfully ADD")</script>';
    } else {
        echo '<script type="text/javascript"> alert ("Unsuccessfully ADD")</script>';
    }
}

// Close connection
$conn->close();
?>
