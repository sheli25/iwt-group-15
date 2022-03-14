<?php
    include('partials/menu.php');
?>
<div class="main">
    <div class="wrapper">
        <h1>Update Admin.</h1>
        <br>
        <br>
        <?php
            $id=$_GET['id'];
            $sql="SELECT * FROM tbl_admin where id=$id";
            $res=mysqli_query($conn,$sql);
            if($res==TRUE){
                $count=mysqli_num_rows($res);
                if($count==1){
                        $row=mysqli_fetch_assoc($res);
                        $full_name=$row['full_name'];
                        $id=$row['id'];
                        $username=$row['username'];
                }
                else{
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>full name:</td>
                   <td><input type="text"name="full_name"value="<?php echo $full_name?>" placeholder="Enter full Name"></td> 
                </tr>
                <tr>
                    <td>username:</td>
                   <td> <input type="text"name="username"value="<?php echo $username?>" placeholder="Enter username"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="hidden"name="id" value="<?php echo $id?>">
                        <input type="submit" name="submit" value="Edit Admin" class="btn-secondary">

                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $sql="UPDATE tbl_admin SET
        full_name='$full_name',
        username='$username'
        where id='$id'";
        $res=mysqli_query($conn,$sql);
        if($res==TRUE){
            $_SESSION['update']="Admin Updated Successfully";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else{
            $_SESSION['update']="Failed to update admin";
            header('location:'.SITEURL.'admin/manage-admin.php');
    
        }
    }
?>



<?php
include('partials/footer.php');
?>