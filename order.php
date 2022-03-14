<?php include('partial-front/menu.php'); ?>

    
    <section class="food-search">
        <div class="container">
        
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <p>** A person cannot order more than one category of food items due to delivery complexities **</p>
                    <br><br>

                    <div class="food-menu-img">
                       
                    </div>
    
                    <div class="select-food-title">
                        <h3>Food Title</h3>
                        <!-- <input type="text" name="food-name" placeholder="" class="input-responsive" required> -->
                         <select id="select"  >
                        <option >Select</option>
                            <option value="500" >Basic Chocolate cake</option>
                            <option value="500" >Basic Vanila Cake </option>
                            <option value="100" >Cupcake </option>
                            <option value="80" >Brownie </option>
                            <option value="900" >Customised Cake</option>
                            <option value="600" > Red velvet</option> 


                            <select name="title">

           
</select>
</td>
</tr> 
                           
</select>
</div>
<br>
 <button onclick="getPrice()" class="btn btn-primary" >Price </button> 

<br><br>
                        <div class="order-label">Quantity</div>
                        <input type="number" id="n1" name="qty" class="input-responsive" value="0" required>
                        <div class="order-label">Price</div>
                        <input class="output" id="n2"  name="price" class="input-responsive" value="" required readonly="">
                        <br><br>
                        <button onclick="calc();"  class="btn btn-primary" >Total Price </button>
                        <br><br>
                       <form> <input class="value" name="total" id="total" value="" readonly=""> </from>
                       <br><br>
                       
                        
<script src="calculate.js"></script>
                        
                        
                        
                    </div>

                </fieldset>

               
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order"  class="btn btn-primary">
                </fieldset>

            </form>
<?php
if(isset($_POST['submit']))
{
   // $food=$_POST['food'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $total=$_POST['total'];
     
    // $status=['ordered'];
    $c_name=$_POST['full-name'];
    $c_phone=$_POST['contact'];
    $c_email=$_POST['email'];
    $c_add=$_POST['address'];

    $sql2="INSERT INTO tbl_order(price,qty,total,customer_name,customer_contact,email,addresss)VALUES('$price','$qty','$total','$c_name','$c_phone','$c_email','$c_add') ";
    $res=mysqli_query($conn,$sql2);

 if($res==true)
 {
     $_SESSION['order']="<div class='success'> </div>";
    
    
    // header('location:'.SITE)
    }
else{
    $_SESSION['order']="<div class='error'>Failed </div>";

}
}

?>
        </div>
    </section>
    

    <?php include('partial-front/footer.php'); ?>