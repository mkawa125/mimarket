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
            background-color: whitesmoke;
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
            <h4 style="margin-left: 250px">ONLINE MARKETING SYSTEM ADMINISTRATION</h4>
            <!--  search form end -->
        </div>


        <div class="top-nav notification-row">
            <!--             notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!--                 task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important"><?php foreach ($newStore as $new) echo $new['total']?></span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="blue">New/Unverified stores</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">New Stores</div>
                                </div>
                                <div class="">
                                    <p class="">You have 8 new stores</p>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">See All new stores</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>/Images/systemImages/default_user.png" width="30" height="30" >
                            </span>
                        <span class="username"><?php echo $_SESSION['admin_name']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="eborder-top">
                            <a href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-user"></i> My Profile</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()?>index.php/Admin/logout"><i class="fa fa-power-off"></i> Log Out</a>
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
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Admin/home"><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Companies</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class=" " href="<?php echo base_url()?>index.php/Admin/EnterprisesView">
                                <i class="fa fa-angle-double-right"></i>All stores (<?php foreach ($allStore as $store) echo $store['total']?>) </a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">
                                <i class="fa fa-angle-double-right"></i>New stores (<?php foreach ($newStore as $new) echo $new['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getVerifiedStoreDetails">
                                <i class="fa fa-angle-double-right"></i>Verified stores (<?php foreach ($verifiedStore as $verified) echo $verified['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getSuspendedStoreDetails">
                                <i class="fa fa-angle-double-right"></i>Suspended stores (<?php foreach ($suspendedStore as $suspended) echo $suspended['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getDeniedStores"><i class="fa fa-angle-double-right"></i>Denied stores</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Messages</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/messages/validate"><i class="fa fa-angle-double-right"></i>Send message</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Conversations</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Incoming</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Sent messages</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Categories</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <?php
                        foreach ($allCategory as $category){?>
                            <li><a class="" href="#"><i class="fa fa-angle-double-right"></i><?php echo $category['category']?> <span> ( <?php echo $category['total']?> )</span></a></li>
                        <?php }?>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Admin/getAllCustomers" class=""><i class="fa fa-plus"></i>
                        <span>Customers</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Admin/getAllAdministrators" class=""><i class="fa fa-plus"></i>
                        <span>Administrators</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Products/storeOrderReport?u=<?php echo $_SESSION['admin_id']?>" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Statistics</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu">
                <li class="sub">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Admin/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
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
                    <div class="col-sm-2"> <h5 class="#"><i class="fa fa-dashboard"></i> Administration</h5></div>
                    <div class="col-sm-6">
                        <?php $success_msg = $this->session->flashdata('success_msg');
                        if ($success_msg){?>
                            <div class="alert alert-success alert-dismissible" style="text-align: center"><?php echo $success_msg?>
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
                                <div class="col-sm-12" style="background-color: #BDBDBD; margin-bottom: 15px">
                                <h5 style="text-align: center"><strong>System summary showing the categories most popular registered stores</strong></h5>
                                </div>
                                <?php

                                foreach ($summary as $dashboard){?>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge"><?php echo $dashboard['total']?></div>
                                                        <div class=""><?php echo $dashboard['category']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="#">View Details</a></span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="row items" style="margin-top: 30px">
                                <h5><strong>Popular stores of all the time</strong></h5>
                                <?php

                                 foreach ($defaultSearch->result() as $defaultEnterprises){?>
                                    <div class="col-md-2 default">
                                        <a href="<?php echo base_url()?>index.php/Admin/adminStoreView?ent=<?php echo $defaultEnterprises->enterprise_id?>"><h6 style="color: cornflowerblue; padding: 5px"><strong><?php echo $defaultEnterprises->name?></strong></h6></a>
                                        <a href="<?php echo base_url()?>index.php/Admin/adminStoreView?ent=<?php echo $defaultEnterprises->enterprise_id?>"><img src="<?php echo base_url()?>/Images/organizationImages/<?php echo $defaultEnterprises->image_url?>" width="100%" height="70"></a>
                                        <label><strong>Category:</strong> <span><a href="#"> <?php echo $defaultEnterprises->category?></a></span>, <span> <?php echo $defaultEnterprises->location?></span></label>
                                        <a href="<?php echo base_url()?>index.php/Admin/adminStoreView?ent=<?php echo $defaultEnterprises->enterprise_id?>"><button class="btn btn-default btn-block">More details</button></a>
                                    </div>

                                <?php }?>
                            </div>

                            <div class="row items" style="margin-top: 30px">
                                <h5><strong>Most Ordered Products</strong></h5>
                                <?php
                                foreach ($products->result() as $defaultProducts){?>
                                    <div class="col-sm-2 default">
                                        <h5 style="color: cornflowerblue"><a href="<?php echo base_url()?>index.php/Admin/adminProductDetails?prod=<?php echo $defaultProducts->product_id?>"><strong><?php echo $defaultProducts->ProductName?></strong></a></h5>
                                        <a href="<?php echo base_url()?>index.php/Admin/adminProductDetails?prod=<?php echo $defaultProducts->product_id?>">
                                            <img src="<?php echo base_url()?>/Images/productImages/<?php echo $defaultProducts->product_image?>" width="100%" height="60"></a>
                                        <div class="centered" style="position: absolute; top: 40%; left: 35%; transform: translate(-50%, -50%)">
                                            <label><strong>Price:</strong> <span style="color: chocolate"> <?php echo $defaultProducts->product_price?> tzs</span></label>
                                        </div>

                                        <label><strong>Enterprise:</strong> <span><a href="<?php echo base_url()?>index.php/Admin/adminStoreView?ent=<?php echo $defaultProducts->enterprise_id?>"> <?php echo $defaultProducts->name?></a></span>, <span><?php echo $defaultProducts->location?></span></label>
                                        <a href="<?php echo base_url()?>index.php/Admin/adminProductDetails?prod=<?php echo $defaultProducts->product_id?>"><button class="btn btn-info btn-block">More details</button></a>
                                    </div>

                                <?php }?>
                            </div>
                    </section>
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

