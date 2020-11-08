<?php

include("dbh.inc.php");
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {​​
  // username and password sent from form 
  $loginid = mysqli_real_escape_string($db,$_POST['loginid']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $sql = "SELECT id FROM tbl_login WHERE loginid = '$loginid' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      if($count == 1) {​​
         session_register("loginid");

         $_SESSION['login_user'] = $liginid;
         header("location: admin.html");
      }​​else {​​
         $error = "Your Login Name or Password is invalid";
      }​​
   }​​
?>