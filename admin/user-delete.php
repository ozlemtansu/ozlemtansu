<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username']) 
    && $_GET['user_id']) {

  $user_id = $_GET['user_id'];

  include_once("data/User.php");
  include_once("../db_conn.php");
  $res = deleteById($conn, $user_id);
  if ($res) {
      $sm = "Başarıyla silindi!"; 
      header("Location: users.php?success=$sm");
      exit;
  }else {
    $em = "Bilinmeyen bir hata oluştu!"; 
    header("Location: users.php?error=$em");
    exit;
  }

}else {
    header("Location: ../admin-login.php");
    exit;
}