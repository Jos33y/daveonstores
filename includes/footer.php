
<?php



include("includes/dbcon.php");


?>

<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container-fluid Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col"><!-- col-sm-6 col-md-3 Begin -->

               <h6>Pages</h6>
                    
                <ul><!-- ul Begin -->
                    <li><a href="cart.php"> Shopping Cart</a></li>
                    <li><a href="contactus.php"> Contact Us</a></li>
                    <li><a href="showroom.php"> Showroom</a></li>
                    <li> <?php 
                                
                                if(!isset($_SESSION['customer_email'])){

                                    echo  "<a href='customer/my_account.php'>My Account</a>";

                                  }else{
                                    echo "<a href='customer/my_account.php?my_orders'> My Account </a>";
                      
                                }

                  ?></li>
                </ul><!-- ul Finish -->

                <hr>

                <h6>User Section</h6>

                <ul><!-- ul Begin -->
                    <li> <?php 
                
                if(!isset($_SESSION['customer_email'])){

                    echo  "<a href='checkout.php'> Login </a>";

                  }else{
                    echo "<a href='logout.php'> Log Out </a>";
       
                }

                ?></li>
                    <li> <?php 
                
                if(!isset($_SESSION['customer_email'])){

                    echo  "<a href='customer_register.php'> Register </a>";

                  }else{
                    echo "<a href='customer/my_account.php?edit_account'> Edit Account </a>";
       
                }

                ?></li>
                </ul><!-- ul Finish -->

                <hr class="hiddem-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col"><!-- col-sm-6 col-md-3 Begin -->

                <h6>Top Products Categories</h6>

                <ul><!-- ul Begin -->
                    <?php 
                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con, $get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                            
                                <li>
                                
                                    <a href='showroom.php?p_cat=$p_cat_id'>

                                        $p_cat_title

                                    </a>

                                </li>
                            ";
                        }
                        ?>

                </ul><!-- ul Finish -->

                <hr  class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->   
             
            <div class="col"><!-- col-sm-6 col-md-3 Begin -->

                <h6>Find Us:</h6>
                <?php 
                $customer_id = 11;
                $get_address = "select * from user_db where user_id=$customer_id";
                $run_address = mysqli_query($conn, $get_address);
               $row_add= mysqli_fetch_array($run_address);
                    $first_name = $row_add['first_name'];
                    $last_name = $row_add['last_name'];
                    $email = $row_add['email'];
                   $phone = $row_add['phone_number'];
                   $address = $row_add['address'];
                   $state = $row_add['state'];
                   $country = $row_add['country'];   
               ?>

                <p><!-- p Begin -->

                <strong>Daveon Stores inc</strong>
                    <br/><?php echo $address; ?>,
                    <br/> <?php echo $state; ?> State,
                    <br/> <?php echo $country; ?>.
                    <br/><a href="tel:+234<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    <br><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    <br/><strong><?php echo $first_name . " " . $last_name; ?></strong>

              
                </p><!-- p Finish -->

                </p><!-- p Finish -->

                <a href="contactus.php">Check Our Contact Page</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->  

            <div class="col"><!-- col-sm-6 col-md-3 Begin -->

                    <h6>Get The News</h6>

                    <p class="text-muted">
                    Don't miss our latest products update.
                    </p>

                    <form action="../sub.php" method="post"><!-- form Begin-->
                        <div class="input-group"><!-- input-group Begin-->
                            <input type="text" class="form-control-sm" name="email">

                            <span class="input-group-btn"><!-- input-group-btn Begin-->

                                <input type="submit" value="subscribe" class="btn btn-sm btn-secondary">

                            </span><!--input-group-btn Finish-->

                        </div><!-- input-group Finish-->

                    </form><!-- form Finish-->

                    <hr>

                    <h6>Keep In Touch</h6>
                    <?php 
                $get_social = "select * from social_link";
                $run_social = mysqli_query($con, $get_social);
               while($row_social= mysqli_fetch_array($run_social)){
                   $fb = $row_social['facebook'];
                   $tweet = $row_social['twitter'];
                   $insta = $row_social['instagram'];
                   $whatsapp = $row_social['whatsapp'];
                   $email = $row_social['email'];


?>

                    <p class="social">
                        <a href="https://<?php echo $fb; ?>" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://<?php echo $tweet; ?>" target="_blank"  class="fa fa-twitter"></a>
                        <a href="https://<?php echo $insta; ?>" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://<?php echo $whatsapp; ?>" target="_blank" class="fa fa-whatsapp"></a>
                        <a href="https://<?php echo $email; ?>" target="_blank" class="fa fa-envelope"></a>
                    </p>

               <?php } ?>
                    <h6>Payment Method</h6>
                <img class="img-fluid" src="images/paystackimg.png" width="200" height="50" alt="Paystack Image">
        </div><!-- row Finish -->
    </div><!-- container-fluid Finish -->
</div><!-- #footer Finish -->

<div class="copyright"><!-- copyright Begin -->
    <div class="container clearfix"><!-- container-fluid Begin  -->
        <div class="col-md-6"><!-- col-md-6 Begin  -->
<br>
            <p class="float-left">&copy; Copyright e-acez 2020,</p>


        </div><!-- col-md-6 Finish -->

        <div class="col-md-6"><!-- col-md-6 Begin  -->

            <p class="float-right">Theme by: <a href="mailto:josephlagbalu@gmail.com">Joseey</a></p>

        </div><!-- col-md-6 Finish -->
    </div><!-- container-fluid Finish -->
</div><!-- copyright Finish -->

