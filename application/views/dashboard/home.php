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


        <div class="top-nav notification-row">
            <!--             notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!--                 task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important">0</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="blue">New Orders</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">New orders</div>
                                </div>
                                <div class="">
                                    <p class="">You have 8 new orders</p>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">See All new stores</a>
                        </li>
                    </ul>
                </li>
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p class="blue">You have 4 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                John location.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon_like"></i></span>
                                Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>

            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username"><?php echo $_SESSION['username']?></span>
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
    <aside >
        <div id="sidebar" class="nav-collapse " >
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" style="margin-top: 71px">

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

<!--                <li class="sub-menu">-->
<!--                    <a href="javascript:" class=""><i class="fa fa-envelope" aria-hidden="true"></i>-->
<!--                        <span>Messages</span><span class="menu-arrow arrow_carrot-right"></span>-->
<!--                    </a>-->
<!--                    <ul class="sub">-->
<!--                        <li><a class="" href="--><?php //echo base_url()?><!--index.php/messages/validate"><i class="fa fa-envelope"></i>Send message</a></li>-->
<!--                        <li><a class="" href="#"><i class="fa fa-exchange"></i>Conversations</a></li>-->
<!--                        <li><a class="" href="#"><i class="fa fa-arrow-right"></i>Incoming</a></li>-->
<!--                        <li><a class="" href="#"><i class="fa fa-arrow-left"></i>Sent messages</a></li>-->
<!--                    </ul>-->
<!--                </li>-->

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Products/viewOrders" class=""><i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Products/storeOrderReport?u=<?php echo $_SESSION['user_id']?>" class=""><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <span>Statistics</span>
                    </a>
                </li>
            </ul>
                <ul class="sidebar-menu">
                <li class="sub">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
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
                    <div class="col-sm-2"> <h5 class="#"><i class="fa fa-dashboard"></i> Dashboard</h5></div>
                    <div class="col-sm-6">
                        <?php $success_msg = $this->session->flashdata('success_msg');
                        if ($success_msg){?>
                            <div class="alert alert-success alert-dismissible" style="text-align: center"><?php echo $success_msg?> <?php echo $_SESSION['username'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></div>
                            <?php
                        }
                        ?>
                    </div>
                    <section class="">
                        <div class="col-lg-11">

                            <input type="hidden" name="txtlat" id="txtlat" required value="">
                            <input type="hidden" name="txtlang" id="txtlang" required value="">

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
                                            <img src="<?php echo base_url()?>/Images/systemImages/bunnerc1.jpg" width="100%"  alt="First Slide">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url()?>/Images/systemImages/bunnerc2.jpg" width="100%"  alt="Second Slide">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url()?>/Images/systemImages/electricalBunner1.jpg" width="100%" alt="Third Slide">
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
                                <input type="hidden" name="txtlat" id="txtlat" required value="">
                                <input type="hidden" name="txtlang" id="txtlang" required value="">
                                <?php foreach ($products->result() as $defaultProducts){?>
                                    <div class="col-sm-2 default">
                                        <h5 style="color: cornflowerblue"><a href="<?php echo base_url()?>index.php/Products/ViewProductDetails?prod=<?php echo $defaultProducts->product_id?>"><strong><?php echo $defaultProducts->ProductName?></strong></a></h5>
                                        <a href="<?php echo base_url()?>index.php/Products/ViewProductDetails?prod=<?php echo $defaultProducts->product_id?>">
                                        <img src="<?php echo base_url()?>/Images/productImages/<?php echo $defaultProducts->product_image?>" width="100%" height="60"></a>
                                        <div class="centered" style="position: absolute; top: 40%; left: 35%; transform: translate(-50%, -50%)">
                                            <label><strong>Price:</strong> <span style="color: chocolate"> <?php echo $defaultProducts->product_price?> tzs</span></label>
                                        </div>

                                        <label><strong>Enterprise:</strong> <span><a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultProducts->enterprise_id?>"> <?php echo $defaultProducts->name?></a></span>, <span><?php echo $defaultProducts->location?></span></label>
                                        <a href="<?php echo base_url()?>index.php/Products/ViewProductDetails?prod=<?php echo $defaultProducts->product_id?>"><button class="btn btn-info btn-block">More details</button></a>
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
                                <input type="hidden" name="txtlat" id="txtlat" required value="">
                                <input type="hidden" name="txtlang" id="txtlang" required value="">
                                <?php foreach ($enterprises->result() as $defaultEnterprises){?>
                                    <div class="col-md-2 default">
                                        <input type="hidden" name="txtlat" id="txtlat" required value="">
                                        <input type="hidden" name="txtlang" id="txtlang" required value="">
                                        <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><h6 style="color: cornflowerblue; padding: 5px"><strong><?php echo $defaultEnterprises->name?></strong></h6></a>
                                        <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><img src="<?php echo base_url()?>/Images/organizationImages/<?php echo $defaultEnterprises->image_url?>" width="100%" height="70"></a>
                                        <label><strong>Category:</strong> <span><a href="#"> <?php echo $defaultEnterprises->category?></a></span>, <span><i class="fa fa-map"></i> <?php echo $defaultEnterprises->location?></span></label>
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

<!--<footer  class="footer" style="background-color: #e75225">-->
<!--    <section id="main-content">-->
<!--        <section class="wrapper">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4">-->
<!--                    links goes here-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4">-->
<!--                    links goes here-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4">-->
<!--                    links goes here-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </section>-->
<!--    </section>-->
<!--</footer>-->
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

