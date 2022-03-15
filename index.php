  <?php include('partial-front/menu.php'); ?>

    
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
   
    <?php
         if(isset($_SESSION['order']))
         {
             echo $_SESSION['order'];
             unset($_SESSION['order']);

         }

         ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>


            <a href="foods.php">
            <div class="box-3 float-container">
                <img src="images/pic1.jpg" alt=""height="500" width="300" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>

            <a href="foods.php">
            <div class="box-3 float-container">
                <img src="images/pic3.jpg" alt=""height="500" width="300" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>

            <a href="foods.php">
            <div class="box-3 float-container">
                <img src="images/pic2.jpg" alt=""height="500" width="300" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>
            

            
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/choc1.jpg" alt="Basic Chocolate Cake" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Basic Chocolate Cake</h4>
                    <p class="food-price">500 BDT</p>
                    <p class="food-detail">
                        Topped with chocolate ganache
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

             <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/brownie.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fudgy Brownie</h4>
                    <p class="food-price">80 BDT</p>
                    <p class="food-detail">
                    Fudgy brownies whith chocolate chips
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div> 

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vani1.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Vanilla Cake</h4>
                    <p class="food-price">500 BDT</p>
                    <p class="food-detail">
                        Basic vanilla cake topped with fondant
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vani2.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Vanilla Sponge</h4>
                    <p class="food-price">500 BDT</p>
                    <p class="food-detail">
                        Basic vanilla sponge cake with vanilla frosting
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


           
            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>
   
    
    
     <?php include('partial-front/footer.php'); ?>