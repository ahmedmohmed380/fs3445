<?php
require_once("Include/DB.php");
require_once("Include/Sessions.php");
require_once("Include/Functions.php");
?>
<?php
 if (isset($_POST["Submit"])) {
   $User = $_POST["User"];
   $Password = $_["Password"];
   global $ConnectingDB;
 $sql = "SELECT * FROM users WHERE user=:useR AND password=:passworD LIMIT 1";
 $stmt = $ConnectingDB->prepare($sql);
 $stmt->bindValue(':useR',$User);
 $stmt->bindValue(':passworD',$Password);
$stmt->execute();
$Result = $stmt->rowcount();
 }
  ?>

<!DOCTYPE html>
 <html lang="ar">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/login.css">

<title>تسجيل الدخول </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div align=right dir=rtl>
<div class="container">
    <section id="content">
        <form action="Sales.php">
            <h1>الدخول إلى الموقع</h1>
            <div>
                <input type="text" placeholder="User" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="Submit" value="تسجيل الدخول" />
                <a href="#">إعادة تعين كلة المرور</a>
            </div>
        </form><!-- form -->

    </section><!-- content -->
</div><!-- container -->
<div>
</body>
</html>
