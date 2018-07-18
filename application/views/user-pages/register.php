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
        .error{
            color: red;
            font-size: smaller;
        }
        .default{
            padding: 5px;
            margin: 5px 15px 5px 5px;
            font-size: small;
            border: 1px solid #D5D8DC;
            background-color: whitesmoke;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 5px;
            background-color: white;
        }
        .icon_menu{
            color: black;
        }
        .front-head{
            color: #DC7633  ;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            font-size: medium;
            text-transform: uppercase;
        }
        .form-control{
            border-radius: 0;
        }
        .input-group-addon{
            border-radius: 0;
            padding-top: 5px;
        }
        .navbar-form .form-control{

            width: 300px;

            height: 38px;

            padding-left: 20px;

            margin-top: 0;

        }




    </style>
</head>
<?php
require 'validation.php';
?>

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


        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu" style="margin-left: 190px">
                <li>
                    <form class="navbar-form" action="<?php echo base_url()?>index.php/Products/IndexSearch" method="post">
                        <div class="col-sm-12 input-group">
                        <span class="input-group-addon">
                        <select class="" id="location"  name="location" style="font-size: small; padding: 3px">
                        <option value="Arusha" selected>All regions</option>
                        <option value="Arusha">Arusha</option>
                        <option value="Dar es salaam">Dar es salaam</option>
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
                     </span>

                            <span class="input-group-addon">
                        <select class="" id="category"  name="category" style="font-size: small; padding: 3px">
                        <option value="" selected>All Categories</option>
                        <option value="electronics">Electronics</option>
                        <option value="construction">Construction</option>
                        <option value="hardware">Hardware</option>
                        <option value="plumbing">Plumbing</option>
                        <option value="furniture">Furniture</option>
                    </select>
                    </span>

                            <input class="form-control" type="text" name="product_name" placeholder="what are you looking for ?">
                            <span class="input-group-addon" style="background-color: cornflowerblue; padding: 0">
                        <button style="border-radius: 0" type="submit" name="search" class="btn btn-primary"><i class="fa fa-search"></i></button></span>

                        </div>
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

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
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/IndexPage""><i class="icon_house_alt"></i> <span>Home</span></a>
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
                                <div class="col-md-6 col-md-offset-3" >
                                    <div class=" panel-default" style="background-color: white; border: 1px solid #BDBDBD">
                                        <div class="panel-heading" style="text-align: center; background-color: whitesmoke">
                                            <h4 style="color: #00a0df">Mimarket User Registration</h4>

                                        </div>
                                        <div class="panel-body">
                                            <p class="#" style="font-size: small">Already have an account?
                                                <a href="<?php echo base_url(); ?>index.php/Direct/login">Login</a></p>
                                            <form role="form" name="register" method="post" action="">
                                                <fieldset>

                                                    <span class="error"><?php echo $nameErr;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                                        <input class="form-control required" placeholder="Enter your name" name="name" id="name"
                                                               type="text" autofocus title="Enter your name">

                                                    </div>

                                                    <span class="error"><?php echo $usernameErr;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input class="form-control required" placeholder="Enter your username" name="username"
                                                               type="text" autofocus title="Please enter your username"  id="uname">
                                                    </div>

                                                    <span class="error"><?php echo $emailErr;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input class="form-control" placeholder="E-mail" id="email" name="email"
                                                               type="email" autofocus title="Email address">
                                                    </div>

                                                    <span class="error"><?php echo $phoneErr;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                        <input class="form-control" placeholder="Phone number" name="phone" id="phone"
                                                               type="text" autofocus title="Phone number is compasury">
                                                    </div>

                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                        <label for="location"></label>
                                                        <select class="form-control" id="location" name="location" title="Select your location">
                                                            <option value="Arusha">Arusha</option>
                                                            <option value="dsm" selected>Dar es salaam</option>
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

                                                    <span class="error"><?php echo $pass1Err;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input class="form-control" placeholder="Password" name="pass1"
                                                               type="password" autofocus title="Enter password">
                                                    </div>

                                                    <span class="error"><?php echo $pass2Err;?></span>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input class="form-control" placeholder="Confirm password" name="pass2"
                                                               type="password" title="Re enter password" >
                                                    </div>
                                                    <!--                             Change this to a button or input when using this as a form -->
                                                    <button class="btn btn-danger btn-block" name="register" type="submit" style="border-radius: 0">Register</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <p class="paragraph">By signup means that you agree with our <a href="#">Terms of services</a> of mimarket</p>
                                </div>

                            </div>
                        </div>
                    </section>
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


