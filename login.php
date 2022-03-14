<?php include('../config/constrants.php');
?>
<html>
    <head>
        <title>
            food-order
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
        <div class="login text-center" id="login1">
            <h1 class="text-center">Admin Login</h1> <br>
            <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-message'])){
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>
            <br>
            <form action=""method="POST">
                username :
            <input type="text"name="username" placeholder="Enter Name" class="text-center">
            <br>
            <br>
            Password:
            <input type="password" name="password" placeholder="Enter password" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="Login"class="btn-primary" class="text-center">
            <br><br>
            </form>
            <p class="text-center">Created By Group 15.</p>
        </div>
</html>
<?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $sql="SELECT * FROM tbl_admin where username='$username' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['login']="<div class='success'>Login Successful.</div>";
            $_SESSION['user']=$username;
            header('location:'.SITEURL.'admin/');
        }
        else{
            $_SESSION['login']="<div class='error text-center'>Name or Password didn't match.</div>";
            header('location:'.SITEURL.'admin/login.php');
        }
    }

?>