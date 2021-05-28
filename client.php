<?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from client";
                   $b = mysqli_query($con,$a);
                   while ($c=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
<div class="Client">
  <div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2><?php echo $c['heading'] ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="Client_box">
           <img src="admin/<?php echo $c['image'] ?>" style='width: 226px; width: 206px;' >
           <h3><?php echo $c['title'] ?></h3>
           <p><?php echo $c['description'] ?></p>
           <i><img src="images/client_icon.png" alt="#"/></i>
         </div>
      </div>
    </div>
  </div>
   <?php
}
  ?>
</div>
</div>

</
 
</div>  
</div>
<br>
