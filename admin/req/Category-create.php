<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username']) ) {

    if(isset($_POST['category'])){
      include "../../db_conn.php";
      $category = $_POST['category'];

      if(empty($category)){
         $em = "Kategori gerekli"; 
         header("Location: ../category-add.php?error=$em");
         exit;
      }
    
      $sql = "INSERT INTO category(category) VALUES (?)";
      $stmt = $conn->prepare($sql);
      $res = $stmt->execute([$category]);
    
      
     if ($res) {
          $sm = "Başarıyla oluşturuldu!"; 
          header("Location: ../category-add.php?success=$sm");
          exit;
      }else {
        $em = "Bilinmeyen bir hata oluştu"; 
        header("Location: ../category-add.php?error=$em");
        exit;
      }


    }else {
        header("Location: ../category-add.php");
        exit;
    }


}else {
    header("Location: ../admin-login.php");
    exit;
} 