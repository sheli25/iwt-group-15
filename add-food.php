<?php include('../config/constrants.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1> Add food </h1>
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


        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="title of the food">
</td>
</tr>
<!-- <tr>
<td>
    Description: </td>
    <td>
        <textarea name="description" cols="30" row="5" placeholder="description of the food"></textarea>
</td>
</tr> -->

<tr>
    <td> Price: </td>
    <td>
        <input type="number" name="price">
</td>
</tr>
 <tr>
    <td>Select image: </td>
    <td>
        <input type="file" name="image">
</td>
</tr> 

 <!-- <tr>
    <td>
        <select name="category">
<?php
        $sql="SELECT * FROM tbl_category WHERE active='Yes' ";
$res=mysqli_query($conn,$sql);

        $count=mysqli_num_rows($res);
        if($count>0)
        {
while($row=mysqli_fetch_assoc($res))
{
    $id=$row['id'];
    $title=$row['title'];
    ?>
    <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
    <?php
}
        }
        else{
            ?>
            <option value="0">No category found</option>
            <?php
        }
        ?>
            <!-- <option value="1"> Cake</option>
            <option value="2"> Brownie</option> 
</select>
</td>
</tr>  -->

<tr>
    <td>Featured: </td>
    <td>
        <input type="radio" name="featured" value="yes">Yes
        <input type="radio" name="featured" value="no">No 
</td>
</tr>
<tr>
    <td>Active: </td>
    <td>
        <input type="radio" name="active" value="yes">Yes
        <input type="radio" name="active" value="no">No 
</td>
</tr>

<tr>
    <td colspan="2">
        <input type="submit" name="submit" value="add food" class="btn-secondary">
</td>
</tr>








</table>
</from>

<?php
if(isset($_POST['submit']))
{
    

   $title=$_POST['title'];
   // $description=$_POST['description'];
    $price=$_POST['price'];
    

   if(isset($POST['featured']))
    {
       $featured=$_POST['featured'];
    }
   else{
       $featured="No";
    }  
    
    if(isset($POST['active']))
    {
        $active=$_POST['active'];
    }
    else{
        $active="Yes";
    }

    if(isset($_FILES['image']['name']))

    {

        $image_name= $_FILES['image']['name'];

        if($image_name!="")
        {
            $ext = end(explode('.', $image_name));

            $image_name="Food-Name-".rand(0000,9999).".".$ext;

            $src= $_FILES ['image']['tmp_name'];

            $dst= "../images/food/".$image_name;

            $upload=move_uploaded_file($src,$dst);

            if($upload==false)
            {
                $_SESSION['upload']="<div class='error'>Failed</div>";
                header('admin/add-food.php');
                die();
            }

        }

    }

    else
    {

        $image_name="";
    }









    $sql2="INSERT INTO tbl_food (title,price,image_name,featured,active)VALUES('$title',$price,'$image_name','$featured','$active')";
 
 $res2=mysqli_query($conn,$sql2);

  if($res2==true)
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
