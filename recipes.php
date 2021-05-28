
</div>
    <!-- section -->
    <?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from recipes";
                   $b = mysqli_query($con,$a);
                   
                   $d= mysqli_num_rows($b);
                   // while () {
                   //  
                                       
?>
    <section class="resip_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Recipes</h2>
  </div>
</div>  
               
                <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <?php
                     for ($i=1; $i<=$d; $i++){
                    $e = mysqli_fetch_array($b);
                 ?>
                 <?php
                if ($i==1) {
                 ?>
                                  

                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $e['img'] ?>" style=' height: 212px; ' alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $e['name'] ?></h3>
                        <h4><span class="theme_color">$</span><?php echo $e['price'] ?></h4>
                    </div>
                </div>
                <?php
                
                }elseif($i==2){
                 ?>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $e['img'] ?>" style=' height: 212px;' alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $e['name'] ?></h3>
                        <h4><span class="theme_color">$</span><?php echo $e['price'] ?></h4>
                    </div>
                </div>
                <?php
                }elseif ($i==3) {                   
                ?>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $e['img'] ?>" style=' height: 212px;' alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $e['name'] ?></h3>
                        <h4><span class="theme_color">$</span><?php echo $e['price'] ?></h4>
                    </div>
                </div>
                <?php
                }elseif ($i==4) {                   
                ?>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $e['img'] ?>" style=' height: 212px;' alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $e['name'] ?></h3>
                        <h4><span class="theme_color">$</span><?php echo $e['price'] ?></h4>
                    </div>
                </div>
                <?php
                }elseif ($i==5) {                   
                ?>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $e['img'] ?>" style=' height: 212px;' alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $e['name'] ?></h3>
                        <h4><span class="theme_color">$</span><?php echo $e['price'] ?></h4>
                    </div>
                </div>
                <?php
                } 
                ?>            
                
                <?php
            }
                ?>

            </div>
        </div>
            </div>
        </div>
    </section>