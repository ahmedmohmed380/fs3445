<?php
require_once("Include/DB.php");
require_once("Include/Sessions.php");
require_once("Include/Functions.php");
require_once("navbar.php");

if (isset($_POST["Submit"])) {
  $Name = $_POST["Name"];
  $Number  = $_POST["Number"];
  $Post = $_POST["Post"];
  date_default_timezone_set("Asia/Riyadh");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
    global $ConnectingDB;
  $sql = "INSERT INTO branch(name,number,post)
  VALUES(:namE, :numbeR, :posT)";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':namE',$Name);
  $stmt->bindValue(':numbeR',$Number);
  $stmt->bindValue(':posT',$Post);
  $Execute=$stmt->execute();

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
<title>طلبات صيانة الفرع</title>



<!-- MAIN CSS -->

</head>
<body>
<div align=right dir=rtl>

  <div style="height:10px; background: #133922;"></div>
<!-- PRE LOADER -->
<header class="bg text-white" style="background-color: #133922;" "py-3">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1><i class="fas fa-tools" style="color:#27aae1;"></i>  صيانة الفرع</h1>
</div>
</div>
</div>
</header>

<section class="container py-2 mb-4">
  <div class="row">
    <div class="offset-lg-1 col-lg-10" style="min-height:400px;">
      <form class="" action="Branch.php" method="post">
        <div class="card bg text-light mb-3" style="background-color:#4dc47d;">
           <div class="card-header">
             <h1>طلبات الصيانة</h1>
           </div>
           <div class="card-body bg" style="background-color:#133922;">
             <div class="form-group">
               <label for="title"><span class="FieldInfo">نوع المشكلة: </span></label>
               <textarea class="form-control" type="text" name="Name" id="title" placeholder="الرجاء شرح المشكلة" value=""></textarea>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">رقم الطلب: </span></label>
               <input class="form-control" type="text" name="Number" id="title" placeholder="رقم طلب إصلاح المشكلة " value=""></input>
             </div>
             <div class="form-group">
               <label for="title"><span class="FieldInfo">حالة الطلب: </span></label>
               <input class="form-control" type="text" name="Post" id="title" placeholder="هل تم حل المشكلة ؟" value=""></input>
             </div>

             <div class="row">
               <div class="col-lg-6 mb-2">
                 <a href="index.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>العودة للصفحة الرئسية</a>
               </div>
               <div class="col-lg-6 mb-2">
                 <button type="submit" name="Submit" class="btn btn-success btn-block" value="">
                   <i class="fas fa-check"></i>إضافة
                 </button>
               </div>
           </div>
           </div>
        </div>
      </form>
      <h2>جميع الموظفين</h2>
      <table class="table table-stri-striped table-hover">
        <thead class="thead text-white" style="background-color: #133922">

          <tr>
            <th>الرقم</th>
            <th>نوع المشكلة</th>
            <th>رقم الطلب</th>
            <th>الحالة</th>
            <th>الوقت</th>
            <th>التعديل</th>
            <th>حذف</th>
          </tr>
          <?php
             global $ConnectingDB;
             $sql ="SELECT * FROM branch";
             $stmt = $ConnectingDB->query($sql);
             while ($DataRows=$stmt->fetch()) {
               $Id = $DataRows["id"];
               $Name = $DataRows["name"];
               $Number = $DataRows["number"];
               $Post = $DataRows["post"];
               $DateTime = $DataRows["datetime"];


           ?>
        </thead>

       <tbody>
         <tr>
           <td><?php echo $Id; ?></td>
            <td><?php echo $Name; ?></td>
           <td><?php echo $Number; ?></td>
           <td><?php echo $Post; ?></td>
           <td><?php echo $DateTime; ?></td>
           <td><a href="Editbra.php?id=<?php echo $Id; ?>"><span class="btn btn-warning">التعديل</span></a></td>
           <td><a href="Deletebra.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">الحذف</span></a></td>
         </tr>
       </tbody>
     <?php } ?>
         </table>
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
