<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 05/02/2018
 * Time: 12:56
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()?>nice/img/favicon.png">

    <title>marketing site</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()?>nice/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>nice/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>nice/css/fullcalendar.css">
    <link href="<?php echo base_url()?>nice/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>nice/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!--fonts icon-->


    <!--custom style sheet-->
    <style>

        .icon_menu{
            color: black;
        }

        .search-row {

            float: left;

            margin-top: 15px;

            margin-left: 5px;

        }
        .icon_menu{
            color: black;
        }
        .front-head{
            color: #DC7633  ;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }



    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start -->

<div id="container" class="#">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="#" class="logo">MI<span class="lite">MARKET</span></a>
        <!--logo end-->


            <!--  search form start -->

            <form class="row search-row" action="#" method="post" enctype="multipart/form-data">

                <div class="col-sm-3">
                    <div class="form-group input-group">
                        <label for="ProductName"></label>
                        <input class="form-control" type="text" name="ProductName" id="ProductName">
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="form-group input-group">
                        <select class="form-control" id="category"  name="category">
                            <option value="electronics" selected>Electronics</option>
                            <option value="construction">Construction</option>
                            <option value="hardware">Hardware</option>
                            <option value="plumbing">Plumbing</option>
                            <option value="furniture">Furniture</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group input-group">
                        <select class="form-control" id="location" name="location">
                            <option value="Arusha">Arusha</option>
                            <option value="Dar es salaam" selected>Dar es salaam</option>
                            <option value="dodoma">Dodoma</option>
                            <option value="geita">Geita</option>
                            <option value="iringa">Iringa</option>
                            <option value="kagera">Kagera</option>
                            <option value="katavi">Katavi</option>
                            <option value="kigoma">Kigoma</option>
                            <option value="kilimanjaro">Kilimanjaro</option>
                            <option value="lindi">Lindi</option>
                            <option value="manyara">Manyara</option>
                            <option value="mara">Mara</option>
                            <option value="mbeya">Mbeya</option>
                            <option value="morogoro">Morogoro</option>
                            <option value="mtwara">Mtwara</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="njombe">Njombe</option>
                            <option value="pemba north">Pemba North</option>
                            <option value="pemba south">Pemba South</option>
                            <option value="pwani">Pwani</option>
                            <option value="rukwa">Rukwa</option>
                            <option value="ruvuma">Ruvuma</option>
                            <option value="">Shinyanga</option>
                            <option value="simiyu">Simiyu</option>
                            <option value="singida">Singida</option>
                            <option value="tabora">Tabora</option>
                            <option value="tanga">Tanga</option>
                            <option value="zanzibar north">Zanzibar north</option>
                            <option value="zanzibar south">Zanzibar south and central</option>
                            <option value="zanzibar west">Zanzibar West</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group input-group">
                        <button class="btn btn-danger" type="submit" name="IndexSearch">Search</button>
                    </div>
                </div>
            </form>

            <!--  search form end -->

        <div class="top-nav notification-row" style="margin-top: 25px">
            <!--drop down start-->
            <ul class="nav pull-right top-menu">

                <li class="dropdown">
                    <a  href="<?php echo base_url()?>index.php/Direct/login">
                        <span class="username"><i class="fa fa-user" style="font-size: larger"></i> User login</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href=""><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-user"></i>
                        <span>Account</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Login</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Register</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-object-group"></i>
                        <span>Categories</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Electronics</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Construction</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Plumbing</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Furniture</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Hardware</a></li>

                    </ul>
                </li>

            </ul>


            <ul class="sidebar-menu">

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-cog"></i>
                        <span>System</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-cogs"></i>
                        <span>Privacy policies</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-server"></i>
                        <span>About us</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-phone"></i>
                        <span>Contact us</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-question-circle"></i>
                        <span>Help</span>
                    </a>
                </li>

            </ul>


            <!-- sidebar menu end-->

        </div>
    </aside>
    <!--sidebar end-->

    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="#"><i class="fa fa-home"></i> Home</h5>
                </div>
                <div class="col-lg-8">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-sm-offset-1">
                    <section class="">
                        <div class="col-lg-11">
                            <div class="row items" >
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner" style="height: 200px">
                                        <div class="item active">
                                            <img src="<?php echo base_url()?>/Images/systemImages/body.jpg" width="100%"  alt="First Slide">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url()?>/Images/systemImages/toi2.jpg" width="100%"  alt="Second Slide">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url()?>/Images/systemImages/body2.jpg" width="100%" alt="Third Slide">
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                 </div>

            <div class="row">
                <div class="col-lg-11 col-sm-offset-1">
                    <section class="">
                        <div class="col-lg-11">
                            <h4 class="#">Popular products</h4>
                            <div class="row items" >

                                popular products queries goes here

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-sm-offset-1">
                    <section class="">
                        <div class="col-lg-11">
                            <h4 class="#">Most ordered companies</h4>
                            <div class="row items" >
                                most ordered companies comes here
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
</body>

<!-- statics end -->
<!-- javascripts -->
<script src="<?php echo base_url()?>nice/js/jquery.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>nice/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url()?>nice/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url()?>nice/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url()?>nice/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo base_url()?>nice/assets/chart-master/chart.js"></script>
<script src="<?php echo base_url()?>nice/js/chartsjs-custom.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>nice/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="<?php echo base_url()?>nice/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url()?>nice/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="<?php echo base_url()?>nice/js/calendar-custom.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo base_url()?>nice/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url()?>nice/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url()?>nice/js/scripts.js"></script>
<!-- custom script for this page-->

</html>


