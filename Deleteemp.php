<?php
require_once("Include/DB.php");
$SearchQueryParameter = $_GET["id"];
if (isset($_POST["Submit"])) {
      $Name = $_POST["Name"];
      $User = $_POST["User"];
      $Email = $_POST["Email"];
      $Mobile  = $_POST["Mobile"];
      $Address = $_POST["Address"];
      global $ConnectingDB;
      $sql ="DELETE FROM employees WHERE id='$SearchQueryParameter'";
      $Execute=$ConnectingDB->query($sql);

    }
 ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">




<!-- MAIN CSS -->

</head>
<body>
  <?php
    global $ConnectingDB;
    $sql ="SELECT * FROM employees WHERE id='$SearchQueryParameter'";
    $stmt=$ConnectingDB->query($sql);
    while ($DataRows = $stmt->fetch()) {
      $Id = $DataRows["id"];
      $Name = $DataRows["name"];
      $User = $DataRows["user"];
      $Email = $DataRows["email"];
      $Mobile = $DataRows["mobile"];
      $Address = $DataRows["address"];
      // code...
    }
    ?>
<div align=right dir=rtl>
  <div style="height:10px; background: #133922;"></div>
<div class="nav11">
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
    <a class="navbar-brand ml-auto" style="color: #fff;" href="fs344.html"> FS344</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS"
      style="font-size: 25px;" style="‎font-style: bold;">


      <ul class="navbar-nav ml-auto">

                <li class="nav-item">
          <a class="nav-link" style="color: #fff;" href="Products.php">المنتجات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #fff;" href="ٍٍSales.php">المبيعات</a>
          <li class="nav-item">
            <a class="nav-link" style="color: #fff;" href="Branch.php">طلبات الصيانة</a>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="users.php">المستخدمين</a>
            </li><li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="fs344.html">الصفحة الرئيسة</a>
            </li>
          </li>
        </li>

              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="Logout.php" class="nav-link" style="color: #fff;"><i class="fas fa-user" style="color: #e62e00;"></i>  تسجيل الخروج</a></li>
              </ul>
            </div>
        </div>
  </nav>
</div>
  <div style="height:10px; background: #133922;"></div>
<!-- PRE LOADER -->
<header class="bg text-white" style="background-color: #133922;" "py-3">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1><i class="fas fa-user-slash" style="color:#27aae1;"></i>حذف بيانات الموظف</h1>
</div>
</div>
</div>
</header>

<section class="container py-2 mb-4">
  <div class="row">
    <div class="offset-lg-1 col-lg-10" style="min-height:400px;">

      <form class="" action="Deleteemp.php?id=<?php echo $SearchQueryParameter;  ?>" method="post">
        <div class="card bg text-light mb-3" style="background-color:#4dc47d;">
           <div class="card-header">
             <h1>حذف البيانات</h1>
           </div>
           <div class="card-body bg" style="background-color:#133922;">
             <div class="form-group">
               <label for="title"><span class="FieldInfo">إسم الموظف: </span></label>
               <input class="form-control" type="text" name="Name" id="title" placeholder="الأسم" value="<?php echo $Name;  ?>"></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">الرقم الوظيفي: </span></label>
               <input class="form-control" type="text" name="User" id="title" placeholder="اليوزر " value="<?php echo $User;  ?>"></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">الإيميل: </span></label>
               <input class="form-control" type="email" name="Email" id="title" placeholder="أدخل عنوان البريد الإلكترونيّ" value="<?php echo $Email;  ?>"></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">رقم التواصل: </span></label>
               <input class="form-control" type="text" name="Mobile" id="title" placeholder="رقم الجوال" value="<?php echo $Mobile;  ?>"></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">العنوان: </span></label>
               <textarea class="form-control" type="text" name="Address" id="title" placeholder="إكتب العنوان" value="<?php echo $Address;  ?>"></textarea>
             </div>
             <div class="row">
               <div class="col-lg-6 mb-2">
                 <a href="fs344.html" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>العودة للصفحة الرئسية</a>
               </div>
               <div class="col-lg-6 mb-2">
                 <button type="submit" name="Submit" class="btn btn-success btn-block" value="Employees.php">
                   <i class="fas fa-check"></i>حذف
                 </button>
               </div>
           </div>
           </div>
        </div>
      </form>
