<?php 

  session_start();
  $name =  $_SESSION['user_name'];
  $id =  $_SESSION['user_id'];
  if($_SESSION['user_login_status'] !=1 )
  {
    header("location: ../index.php");
  }
  else
  {
    echo "Welcome ". $name . $id;
    echo  '<br /> <hr> <a href="logoff.php">Log Out</a>';
  }
  
  $sql = "select '.$id.' From Users, chats WHERE users.userid == chats.userid";
?>