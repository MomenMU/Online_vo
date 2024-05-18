<!DOCTYPE html>
<html dir="rtl">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>   
إضافة أحزاب سياسية    
</title>

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
<h4>بيانات إضافة حزب وطني</h4>
        <form action="" method="post" enctype="multipart/form-data">
    <table class="content">
    <tr>
      <td>
        <fieldset>
          <legend>بيانات الخاصة بالحزب الوطني</legend>  
          رقم الحزب الوطني: <br><input type="text" name="ahzab_id"><br>
          اسم الحزب الوطني : <br><input type="text" name="_name"><br>    
         رمز الحزب الوطني * <br><input type="file" name="image" id="image" accept="image/gif, image/jpeg, image/png"><br>
			
  <div style="text-align: center;">
    <input type="submit" name="upload" value="إرسال">
  </div></form>
    </body>
</html>










<?php
$connection= mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,"online_v");

if(isset($_POST['upload']))
{
    
    $ahzab_id =$_POST['ahzab_id'];
    $_name=$_POST['_name'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


    $query = "INSERT INTO ahzab (ahzab_id,_name,image) VALUES ('$ahzab_id','$_name','$file') ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert ("Image uploaded")</script>';
    }else{
        echo '<script type="text/javascript"> alert ("Image not uploaded")</script>';

    }
    

}



?>