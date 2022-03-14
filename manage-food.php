<?php include('partials/menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage food</h1>
        <br> <br> 
  <a href="<?php echo SITEURL?>admin/add-food.php" class="btn-primary">add food</a>
  <br><br>
  <?php
         if(isset($_SESSION['add']))
         {
             echo $_SESSION['add'];
             unset($_SESSION['add']);

         }
        ?>
  <table class="tbl-full">
    <tr>
      <th>S.N.</th>
      <th>full name</th>
      <th>Username</th>
      <th>Action</th>
    </tr>
    <tr>
    <td>1</td>
    <td>jannatun akter sheli</td>
    <td>jannatunaktersheli</td>
    <td>
      <a href="#" class="btn-secondary">update admin</a>
      <a href="#" class="btn-tertiary">delete admin</a>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td>tasnia jahan</td>
    <td>tasniajahan</td>
    <td>
    <a href="#" class="btn-secondary">update admin</a>
    <a href="#" class="btn-tertiary">delete admin</a>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td>pinky akter</td>
    <td>pinkyakter</td>
    <td>
    <a href="#" class="btn-secondary">update admin</a>
    <a href="#" class="btn-tertiary">delete admin</a>
    </td>
    </tr>
  </table>
    </div>

</div>

<?php include('partials/footer.php')?>