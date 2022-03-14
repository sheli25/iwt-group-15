<?php
include('../config/constrants.php');
?>
<?php
      $id=$_GET['id'];
      $sql="DELETE FROM tbl_admin where id=$id ";
      $res=mysqli_query($conn,$sql);
      if($res==TRUE){
          $_SESSION['delete']="Admin delete Successfully";
          header('location:'.SITEURL.'admin/manage-admin.php');
      }
      else{
        $_SESSION['delete']="Admin delete Unsuccessful";
        header('location:'.SITEURL.'admin/manage-admin.php');
      }
?>