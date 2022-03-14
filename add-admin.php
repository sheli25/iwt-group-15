<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>

        <form action="" method="POST">
    <Table class="tbl-30">
            <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                   ?>
   <tr>
       <td>full name</td>
       <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
    </tr>
    <tr>
    <td>username</td>
       <td><input type="text" name="username" placeholder="Enter UserName"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" placeholder="your password"></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
        </td>
</tr>
</Table>

        </form>
    </div>
</div>


<?php include('partials/footer.php')?>
<?php
    if (isset($_POST['submit'])) {
        $full_name=$_POST['full_name'];
         $username=$_POST['username'];
         $password=md5($_POST['password']);
        $sql="INSERT INTO tbl_admin (`full_name`, `username`, `password`) VALUES ('$full_name','$username','$password')
            ";
     $res = mysqli_query($conn,$sql) or die(mysqli_error());
     if($res==TRUE){
        $_SESSION['add']="Admin Added successfully";
        header("location:".SITEURL.'admin/manage-admin.php');
     }
           
      else{
        $_SESSION['add']="Failed to add admin";
        header("location:".SITEURL.'admin/add-admin.php');
      }     
            
           
              
    }
   
  
?>