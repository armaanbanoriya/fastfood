<?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from ourblog";
                   $b = mysqli_query($con,$a);
                  $c =mysqli_fetch_array($b);
                     # code...
                  
?>
<div class="blog">
  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2><?php echo $c['title'] ?></h2>
          <span><?php echo $c['description'] ?></span>
        </div>
      </div>
    </div>
    