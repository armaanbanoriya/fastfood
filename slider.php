 
   <?php 
       include "dbcon.php";
       $v="SELECT * FROM slider";
       $q=mysqli_query($con,$v);
       $r = mysqli_num_rows($q);     
 ?>


 <!-- start slider section -->

    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <?php
                                 for ($i=1; $i<=$r; $i++)     
                                  {
                                  $data = mysqli_fetch_array($q);
                
                                
                                  ?>
                                  <?php
                                  if ($i==1) {
                                      
                                  
                                  ?>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3><?php echo $data['title']?></h3>
                                                <p><?php echo $data['description']?></p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="admin/<?php echo $data['image']?>" style='width: 786px; height: 635px; ' alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            <?php 
                             } 
                             else
                             {
                                ?>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3><?php echo $data['title']?></h3>
                                                <p><?php echo $data['description']?></p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="admin/<?php echo $data['image']?>" style='width: 786px; height: 635px;'  alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            <?php 
                             }
                            ?>                           
                              <?php 
                            } 
                            ?>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->