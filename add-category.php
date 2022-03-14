<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add category</h1>
        <br><br>
        <?php
         if(isset($_SESSION['add']))
         {
             echo $_SESSION['add'];
             unset($_SESSION['add']);

         }
         
         ?>
         <?php
         if(isset($_SESSION['upload']))
         {
             echo $_SESSION['upload'];
             unset($_SESSION['upload']);

         }

         ?>
         <br><br>
        <form action="" method="POST" >
            <table class="tbl-30">
    <tr>
        <td>Title</td>
        <td>
    <input type="text" name="title" placeholder="category tile">
        </td>
    </tr>
    <tr>
    <td>Select image: </td>
    <td>
        <input type="file" name="image">
</td>
</tr> 
    <tr>
        <td>Featured</td>
        <td>
            <input type="radio" name="featured" value="Yes" >Yes
            <input type="radio" name="featured" value="No" >No
        </td>
    </tr>
    <tr>
        <td>Active</td>
        <td>
            <input type="radio" name="active" value="Yes" >Yes
            <input type="radio" name="active" value="No" >No
        </td>
    </tr>
    <tr>
        <td colspan="2">
        <input type="submit" name="submit" value="Add category" class="btn-primary">
        </td>
    </tr>
            </table>

        </form>
        <?php
if(isset($_POST['submit']))
{
    

   $title=$_POST['title'];
   // $description=$_POST['description'];
    

   if(isset($POST['featured']))
    {
       $featured=$_POST['featured'];
    }
   else{
       $featured="YES";
    }  
    
    if(isset($POST['active']))
    {
        $active=$_POST['active'];
    }
    else{
        $active="YES";
    }

    if(isset($_FILES['image']['name']))

    {

        $image_name= $_FILES['image']['name'];

        if($image_name!="")
        {
            $ext = end(explode('.', $image_name));

            $image_name="Food-Name-".rand(0000,9999).".".$ext;

            $src= $_FILES ['image']['tmp_name'];

            $dst= "../images/category/".$image_name;

            $upload=move_uploaded_file($src,$dst);

            if($upload==false)
            {
                $_SESSION['upload']="<div class='error'>Failed</div>";
                header('admin/add-category.php');
                die();
            }

        }

    }

    else
    {

        $image_name="";
    }









    $sql1="INSERT INTO tbl_category (title,image_name,featured,active)VALUES('$title','$image_name','$featured','$active')";
 
 $result=mysqli_query($conn,$sql1);

  if($result==true)
  {
      $_SESSION['add']="<div class=''>food Added </div>";
    
    // header('location:'.SITE)
    }
 else{
     $_SESSION['add']="<div class='error'>Failed </div>";

 }
}
        ?>
    </div>
</div>
 <?php include('partials/footer.php'); ?> 