
<div class="row" style=" @media(max-width: 600px){  height: 1950px;}">
                  <?php 
                           include "dbcon.php";
                            $v="SELECT * FROM blogdata";
                            $q=mysqli_query($con,$v);
                            while($result=mysqli_fetch_array($q))
                            {
                            ?>

                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                   
                     <div class="blog_box">
                      <div class="blog_img_box">
                        
                        <figure><img src="admin/<?php echo $result['image'] ?>" style='width: 348px; height: 310px;' />
                         <span><?php echo $result['created_at'] ?></span>
                        </figure>
                      </div>
                      <h3><?php echo $result['title'] ?></h3>
                      <p><?php echo substr($result['description'],0,243); ?></p>
                    
                    </div>
                  </div>

                    <?php } ?>

</div>
</div>
</div>

       
    
 
  

