<?php
    include_once 'dbcon.php';
    $a = "SELECT * from topbar";
    $b = mysqli_query($con,$a);
    
    $c=mysqli_fetch_array($b);
                    
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <style>

        .Client{
            background-color: cadetblue!important;
            height: 984px!important;

            @media(mix-width: )
        }
        
        .blog {
    
    background:rebeccapurple!important;
 
    @media (min-width: 794px;){
        padding-top: 100px!important;
        height: 1050px!important;
       
        
    
}
}
        .about {
            
            background:linear-gradient(45deg, #6733b9, #ff220b)!important;
            height: 1050px!important;
                margin-top: -25px!important;
            @media (min-width: 784px;){

                
            }
        }

        .footer{
            background-color: saddlebrown!important;
                margin-top: -26px!important;
        }
        .resip_section{
            background: linear-gradient(45deg, #52dfe6, #0c0404)!important;
                padding: 102px 0px 50px 0px!important;
        }


        .a{
     background: linear-gradient(45deg, #4a194900, transparent)!important;

     transition: 0.5s ease;
        }
    .a.scrolled{
         background-color: #ef0d0db8;
      
 }

  .slider_section {
     background: linear-gradient(45deg, #0f0658, #ef0d0db8)!important;
 }
        
        #main_slider {
     padding: 0px 0px 0px!important;
 }
     #main_slider a.carousel-control-prev {

      @media (min-width: 794px;){
        position: absolute;
     left: 50px;
     top: 35%!important;


}
}


.product_blog_img {

    @media (max-width: 769px;){
        position: relative;
        right: 20px;
    }
}


     


    </style>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Spicyo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="">

    <link rel="stylesheet" type="text/css" href="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/c4cb9abc7c69713e7e816e6a624ce7f8.gif"   alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutfooter.php">About</a>
                    </li>
                    <li>
                        <a href="recipefooter.php">Recipe</a>
                    </li>
                    <li>
                        <a href="blogfooter.php">Blog</a>
                    </li>
                    <li>
                        <a href="contactfoooter.php">Contact Us</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header class="a" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo ml-5" href="index.html"><img src="admin/<?php echo $c['logo'] ?> " style='height: 63px; width: px;' ></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info" >
                            <ul>
                                <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#"><?php echo $c['phone']; ?></a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#"><?php echo $c['email']; ?></a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#"><?php echo $c['address']; ?></a></li>
                                <li class="button_user"><a class="button active" href="#">Login</a><a class="button" href="#">Register</a></li>
                                <li><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
  