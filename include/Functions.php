<?php require_once("Include/DB.php"); ?>

<?php
function Redirect_to($New_Location){
  header("Location:".$New_Location);
  exit;
}
function CheckUserNameExistsOrNot($UserName){
  global $ConnectingDB;
  $sql    = "SELECT user FROM users WHERE user=:User";
  $stmt   = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':useR',$User);
  $stmt->execute();
  $Result = $stmt->rowcount();
  if ($Result==1) {
    return true;
  }else {
    return false;
  }
}

function Login_Attempt($UserName,$Password){
  global $ConnectingDB;
  $sql = "SELECT * FROM users WHERE user=:User AND password=:passWord LIMIT 1";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':useR',$User);
  $stmt->bindValue(':passworD',$Password);
  $stmt->execute();
  $Result = $stmt->rowcount();
  if ($Result==1) {
    return $Found_Account=$stmt->fetch();
  }else {
    return null;
  }
}
?>
