<?php include('partial-front/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1> </h1>
        <br><br>
       
<section>
<!-- <?php
         if(isset($_SESSION['add']))
         {
             echo $_SESSION['add'];
             unset($_SESSION['add']);

         }

         ?> -->
    <h1 class="heading"> <span>   Find</span> Us </h1>
    <br>

    <div class="row">

         <iframe class="map" src="https://maps.google.com/maps?q=jahangirnagar%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe> 
            <br> <br>

          

        <form action="" method="POST" enctype="multipart/form-data">
            <h3>      Get in touch </h3>
            <br>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="namee" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                 <textarea name="msg" cols="30" row="5" placeholder="type your message"></textarea>
            </div>
            <br>
            <input type="submit" value="contact now" class="btn-btn-primary">
        </form>

        
<?php
if(isset($_POST['submit']))
{
   $namee=$_POST['namee'];
   $email=$_POST['email'];
   $msg=$_POST['msg'];

   
   $sql="INSERT INTO tbl_contact(namee,email,msg)VALUES ('$name','$email','$msg') ";
 
 $res=mysqli_query($conn,$sql);

 if($res==true)
 {
     $_SESSION['add']="<div class='success'> </div>";
    
    // header('location:'.SITE)
    }
else{
    $_SESSION['add']="<div class='error'>Failed </div>";

}
}
?>

    </div>
    
        </div>
        </div>

</section>

<?php include('partial-front/footer.php'); ?>