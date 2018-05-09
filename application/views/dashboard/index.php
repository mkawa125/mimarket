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


    <!--custom style sheet-->
    <style>
        .dark-bg{
            background-color: whitesmoke;
        }
        .icon_menu{
            color: black;
        }
        .sech{
            font-size: small;
        }
        .items{
            margin: 20px;
            border: 1px solid #848484;
            padding: 5px;

        }
        .display{
            font-size: small;
            line-height: 22px;
        }
        .view{
            margin-left: 350px;
            border-radius: 0;
        }


    </style>
</head>

<body>
<!-- container section start -->

<div id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">MI<span class="lite">MARKET</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->

            <!--  search form end -->
        </div>
        <div class="top-nav notification-row" style="margin-top: 25px">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <li>
                    <div class="col-lg-3">
                        <ul class="nav top-menu">
                            <li>
                                <form class="navbar-form">
                                    <input class="form-control" placeholder="Enterprise or product" type="text" width="">
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                <div class="col-lg-3">
                    <ul class="nav tp-menu">
                        <li>
                            <form class="navbar-form">
                                <select class="form-control" id="region">
                                    <option>Arusha</option>
                                    <option>Dar es salaam</option>
                                    <option>Dodoma</option>
                                    <option>Geita</option>
                                    <option>Iringa</option>
                                    <option>Kagera</option>
                                    <option>Katavi</option>
                                    <option>Kigoma</option>
                                    <option>Kilimanjaro</option>
                                    <option>Lindi</option>
                                    <option>Manyara</option>
                                    <option>Mara</option>
                                    <option>Mbeya</option>
                                    <option>Morogoro</option>
                                    <option>Mtwara</option>
                                    <option>Mwanza</option>
                                    <option>Njombe</option>
                                    <option>Pemba North</option>
                                    <option>Pemba South</option>
                                    <option>Pwani</option>
                                    <option>Rukwa</option>
                                    <option>Ruvuma</option>
                                    <option>Shinyanga</option>
                                    <option>Simiyu</option>
                                    <option>Singida</option>
                                    <option>Tabora</option>
                                    <option>Tanga</option>
                                    <option>Zanzibar north</option>
                                    <option>Zanzibar south and central</option>
                                    <option>Zanzibar West</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </div>
                </li>

                <li>
                <div class="col-lg-1">
                    <button class="btn btn-primary sech">Search</button>
                </div>
                </li>

                <li class="dropdown">
                    <a  href="<?php echo base_url()?>index.php/Direct/login">
                        <span class="username"><i class="fa fa-user" style="font-size: larger"></i>User login</span>
                    </a>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
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
                    <a href="javascript:" class=""><i class="fa fa-users"></i>
                        <span>Users</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login""><i class="fa fa-lock"></i>Login</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Register</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-server"></i>
                        <span>About us</span>
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
                    <h5 class="page-header"><i class="fa fa-home"></i> Dashboard</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="">
                        <div class="col-lg-11">
                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images2.jpg" width="100%" height="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mkawa Engineering group</h4>
                                   <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>Dar es salaam</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                        </p>
                                    <row>
                                    <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                    <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images3.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Papaa mukuru construction agents</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>Dodoma</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images4.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mlimani electronics and building materials</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>Tanga</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images5.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mkawa Engineering group</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>location</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images6.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mkawa Engineering group</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>location</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images7.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mkawa Engineering group</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>location</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images8.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Mkawa Engineering group</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>location</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>

                            <div class="row items" >
                                <div class="col-sm-3" style="padding: 0">
                                    <img src="<?php echo base_url()?>nice/img/images9.jpg" width="100%" height="150">
                                </div>
                                <div class="col-sm-8">
                                    <h4 style="color: orangered">Shungu construction compny</h4>
                                    <span style="color: cornflowerblue"><i class="fa fa-map-marker" style="padding-right: 5px"></i>Arusha</span>
                                    <p class="display">Makini POS delivers the reliability of managing
                                        more than one Business in a Single Platform.
                                        It gives you Realtime access over your Sales, Stocks
                                    </p>
                                    <row>
                                        <button class="btn btn-primary view "><i class="fa fa-eye"></i>View</button>
                                        <button class="btn btn-danger " style="border-radius: 0"><i class="fa fa-bookmark"></i>Add favourite</button>
                                    </row>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>
</div>
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

