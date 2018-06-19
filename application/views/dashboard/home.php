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
    <link href="<?php echo base_url()?>/nice/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

    <!--custom style sheet-->
    <style>

        .icon_menu{
            color: black;
        }
        .default{
            padding: 5px;
            margin: 5px 15px 5px 5px;
            font-size: small;
            border: 1px solid #D5D8DC;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 10px;
            background-color: white;
        }

    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start -->

<div id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">MI<span class="lite">MARKET</span></a>
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


        <div class="top-nav notification-row" >
            <ul>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>nice/img/zai.jpg" width="40" >
                            </span>
                        <span class="username"><?php echo $_SESSION['full_name']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="eborder-top">
                            <a href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Authentication/logout"><i class="fa fa-power-off"></i> Log Out</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-question-circle"></i> Documentation</a>
                        </li>
                    </ul>
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
            <ul class="sidebar-menu" style="margin-top: 63px">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Products/DefaultProducts"><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>My Companies</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Enterprise/getEnterprises"><i class="fa fa-shopping-cart"></i>My Enterprise</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/product"><i class="fa fa-bookmark"></i>Bookmarks</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Messages</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/messages/validate"><i class="fa fa-envelope"></i>Send message</a></li>
                        <li><a class="" href="#"><i class="fa fa-exchange"></i>Conversations</a></li>
                        <li><a class="" href="#"><i class="fa fa-arrow-right"></i>Incoming</a></li>
                        <li><a class="" href="#"><i class="fa fa-arrow-left"></i>Sent messages</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-credit-card"></i>
                        <span>Account</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#"><i class="fa fa-credit-card-alt"></i>Billing</a></li>
                        <li><a class="" href="#"><i class="fa fa-code"></i>Developer API</a></li>
                        <li><a class="" href="#"><i class="fa fa-cog"></i>Organizations</a></li>
                        <li><a class="" href="#"><i class="fa fa-lock"></i>Personal settings</a></li>
                        <li><a class="" href="#"><i class="fa fa-folder"></i>Project</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-bell" aria-hidden="true"></i>
                        <span>Subscriptions</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <span>Statistics</span>
                    </a>
                </li>
            </ul>
                <ul class="sidebar-menu">
                <li class="sub">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

                <li class="">
                    <a class="" target="_blank" href="<?php echo base_url()?>index.php/Direct/PrivacyTerms"><i class="fa fa-lock"></i> <span>Terms and privacy policy</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/home"><i class="fa fa-question"></i> <span>Help & feedback</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
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

                </div>
                <div class="col-lg-8">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-sm-offset-1">
                    <h5 class="#"><i class="fa fa-dashboard"></i> Dashboard</h5>
                    <section class="">
                        <div class="col-lg-11">
                            <div class="row items" >
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-envelope fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">26</div>
                                                    <h5>messages!</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">12</div>
                                                    <div>Orders</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">124</div>
                                                    <div>Requests</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-envelope fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">13</div>
                                                    <h5>Out of stock</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
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
                                <?php foreach ($products->result() as $defaultProducts){?>
                                    <div class="col-sm-2 default">
                                        <a href="#">
                                        <img src="<?php echo base_url()?>/Images/productImages/<?php echo $defaultProducts->product_image?>" width="100%" height="100"></a>
                                        <h5 style="color: cornflowerblue"><strong><?php echo $defaultProducts->ProductName?></strong></h5>
                                        <p><strong>Price:</strong> <span style="color: red"> <?php echo $defaultProducts->product_price?> tzs</span>/piece</p>
                                        <p><strong>Enterprise:</strong> <span><a href="#"> <?php echo $defaultProducts->name?></a></span>, <span><?php echo $defaultProducts->location?></span></p>
                                        <button class="btn btn-info btn-block">More details</button>

                                    </div>

                                <?php }?>

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
                                <?php foreach ($enterprises->result() as $defaultEnterprises){?>
                                    <div class="col-md-2 default">
                                        <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><h6 style="color: cornflowerblue; border-bottom: 1px solid #D5D8DC; padding: 5px"><strong><?php echo $defaultEnterprises->name?></strong></h6></a>
                                        <a href="#"><img src="<?php echo base_url()?>/Images/organizationImages/<?php echo $defaultEnterprises->image_url?>" width="100%" height="100"></a>
                                        <p><strong>Total products:</strong> <span style="color: red"> <?php echo $defaultEnterprises->total_products?></span></p>
                                        <p><strong>Category:</strong> <span><a href="#"> <?php echo $defaultEnterprises->category?></a></span>, <span><i class="fa fa-map"></i> <?php echo $defaultEnterprises->location?></span></p>
                                        <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><button class="btn btn-danger btn-block">More details</button></a>
                                    </div>

                                <?php }?>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </section>
</div>

<footer  class="footer" style="background-color: #e75225">
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-4">
                    links goes here
                </div>

                <div class="col-lg-4">
                    links goes here
                </div>

                <div class="col-lg-4">
                    links goes here
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
<script src="<?php echo base_url()?>nice/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>nice/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<script src="<?php echo base_url()?>nice/js/fullcalendar.min.js"></script>
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

