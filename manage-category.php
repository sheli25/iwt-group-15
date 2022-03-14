<?php include('partials/menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage category</h1>
        <br> <br> 
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
         <br> <br>
  <a href="<?php echo SITEURL?>admin/add-category.php" class="btn-primary">add category</a>
  <br><br>
  <table class="tbl-full">
    <tr>
      <th>SN</th>
      <th>Title</th>
      <th>image_name</th>
      <th>featured</th>
      <th>active</th>
      
    </tr>
    <br> <br>
    <?php
      $sql1="SELECT*FROM tbl_category";
      $result=mysqli_query($conn,$sql1);
      
        $count = mysqli_num_rows($result);
        
        if($count>0)
        {
      while($rows=mysqli_fetch_assoc($result)){
        $id=$rows['id'];
        $title=$rows['title'];
        $image_name=$rows['image_name'];
        $featured=$rows['featured'];
        $active=$rows['active'];
      ?>
      <tr>
   <td><?php echo $id;?></td>
    <td><?php echo $title;?></td>
    <td>
      <?php 
      if($image_name!=""){
        
        ?>
       
        <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" >;
        <?php
      }
      else{
       echo "<div class='error'>Failed</div>";
      }
    ?>
    </td>
    <td><?php echo $featured;?></td>
    <td><?php echo $active;?></td>
      </tr>
      <?php
      }
    }
      else{
        ?>
        <tr>
          <td colspan="6"><div class="error">no category added</div></td>
        </tr>
        <?php
      }
     ?>
      
          
   
    
   
  </table>
    </div>

</div>

<?php include('partials/footer.php')?>