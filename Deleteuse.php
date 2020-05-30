<?php
require_once("Include/DB.php");
require_once("Include/Sessions.php");
require_once("Include/Functions.php");
require_once("navbar.php");

$SearchQueryParameter = $_GET["id"];
if (isset($_POST["Submit"])) {
  $User  = $_POST["User"];
  $Name = $_POST["Name"];
  date_default_timezone_set("Asia/Riyadh");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
    global $ConnectingDB;
    $sql ="DELETE FROM users WHERE id='$SearchQueryParameter'";
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

<title>حذف المستخدمين</title>


<!-- MAIN CSS -->

</head>
<body>
  <?php
     global $ConnectingDB;
     $sql ="SELECT * FROM users";
     $stmt = $ConnectingDB->query($sql);
     while ($DataRows=$stmt->fetch()) {
       $Id = $DataRows["id"];
       $User = $DataRows["user"];
       $Name = $DataRows["name"];
       $DateTime = $DataRows["datetime"];

}
   ?>
<div align=right dir=rtl>

  <div style="height:10px; background: #133922;"></div>
<!-- PRE LOADER -->
<header class="bg text-white" style="background-color: #133922;" "py-3">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1><i class="fas fa-users" style="color:#27aae1;"></i>  حذف المستخدمين</h1>
</div>
</div>
</div>
</header>

<section class="container py-2 mb-4">
  <div class="row">
    <div class="offset-lg-1 col-lg-10" style="min-height:400px;">
      <form class="" action="Deleteuse.php?id=<?php echo $SearchQueryParameter;  ?>" method="post">
        <div class="card bg text-light mb-3" style="background-color:#4dc47d;">
           <div class="card-header">
             <h1>بيانات المستخدمين</h1>
           </div>
           <div class="card-body bg" style="background-color:#133922;">
             <div class="form-group">
               <label for="title"><span class="FieldInfo">اسم المستخدم: </span></label>
               <input class="form-control" type="text" name="User" id="title" placeholder="" value="<?php echo $User;  ?>"></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">الإسم: </span></label>
               <input class="form-control" type="text" name="Name" id="title" placeholder="ج " value="<?php echo $Name;  ?>"></input>
             </div>


             <div class="row">
               <div class="col-lg-6 mb-2">
                 <a href="index.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>العودة للصفحة الرئسية</a>
               </div>
               <div class="col-lg-6 mb-2">
                 <button type="submit" name="Submit" class="btn btn-danger btn-block" value="">
                   <i class="fas fa-check"></i>حذف
                 </button>
               </div>
           </div>
           </div>
        </div>
      </form>

  </div>
</div>

</section>




<!-- FOOTER -->

<footer class="bg text-white"  style="background-color: #4dc47d;">
  <div class="container">
<div class="row">
  <div class="col">
  <p class="lead text-center">Them By | Ahmed Zakan |   جميع الحقوق محفوظة---&copy;</p>
</div>
</div>
  </div>
</footer>

<div style="height:10px; background: #133922;"></div>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>
</body>
</html>
