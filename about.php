<?php
include_once 'dbcon.php';

$a ="SELECT * from about_food";
$b= mysqli_query($con,$a);
$c= mysqli_fetch_assoc($b);
?>

<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2><?php echo $c['title'] ?></h2>
                <span><?php echo $c['description'] ?>
                   <br>
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3><?php echo $c['sub_title'] ?></h3>
                 <p><?php echo $c['sub_description']; ?></p>
                 <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="admin/<?php echo $c['image'] ?>" ></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->
