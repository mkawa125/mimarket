<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 6/18/2018
 * Time: 11:25 AM
 */?>

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
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>nice/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>nice/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>nice/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

    <!--    Data tables -->
    <link href="<?php echo base_url()?>/DataTables/css/dataTables.bootstrap.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.css"/>

    <!--custom style sheet-->
    <style>
        .icon_menu{
            color: black;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 10px;
            background-color: white;
        }
        .btn{
            border-radius: 0;
        }
        ul.sidebar-menu li ul.sub li a {

            padding: 0 0 0 32px;

            line-height: 30px;

            height: 30px;

            -webkit-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

            color: #d0d8df;

            font-size: small;

        }
        ul.sidebar-menu li a{

            color: #d0d8df;

            text-decoration: none;

            display: block;

            padding: 8px 0 8px 15px;

            font-size: small;

            line-height: 25px;

            font-weight: 300;

            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;

            outline: none;

            -webkit-transition: all 0.3s ease;

            -moz-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

        }

    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start-->
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


        <div class="top-nav notification-row" >
            <ul>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>nice/img/zai.jpg" width="40" >
                            </span>
                        <span class="username"><?php echo $_SESSION['username']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="eborder-top">
                            <a href="<?php echo base_url()?>index.php/Direct/UserProfileSetting"><i class="fa fa-user"></i> My Profile</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()?>index.php/Authentication/logout"><i class="fa fa-power-off"></i> Log Out</a>
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
            <ul class="sidebar-menu" style="margin-top: 60px">

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
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserProfileSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--    sidebar end-->


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
                    <h5 class="#"><i class="fa fa-dashboard"></i>
                        <a href="#">Dashboard</a>  <i class="fa fa-angle-double-right"></i><span><a href="#">Enterprises</a></span>
                        <i class="fa fa-angle-double-right"></i><span><a href="#">Enterprise Name</a></span></h5>
                    <section class="">
                        <div class="col-lg-11">

                            <?php $success_msg = $this->session->flashdata('success_msg');
                            if ($success_msg){?>
                                <div class="alert alert-success alert-dismissible"><?php echo $success_msg?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>
                            <div class="row items" style="margin-top: 5px">
                                <div class="col-sm-12" style="margin-top: 10px">
                                    <!--                                    <div class="row" style="margin: 5px; border: 1px solid #BDBDBD">-->
                                    <!--                                        <div class="col-sm-6">-->
                                    <!--                                            <h5 style="text-transform: uppercase; color: red; text-align: center; font-size: smaller">-->
                                    <!--                                                <strong>ORDER REQUESTS</strong>-->
                                    <!--                                            </h5>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-sm-6" style="background-color: whitesmoke; border-left: 1px solid #BDBDBD">-->
                                    <!--                                            <h5 style="text-transform: uppercase; color:; text-align: center">-->
                                    <!--                                                <strong>--><?php //echo $_SESSION['full_name']?><!--</strong>-->
                                    <!--                                            </h5>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->

                                    <div class="row" style="margin: 5px">

                                        <div class="col-sm-3" style=" padding: 0; margin-right: 15px; border: 1px solid #BDBDBD; border-radius: 0;">
                                            <div style="background-color: darkslategrey; padding: 5px; border: 1px solid #BDBDBD">
                                                <h5 style="font-size: small; color: white; text-align: center">ORDER REQUESTS</h5>
                                            </div>

                                            <div class="" style="padding: 15px; font-size: small; background-color: whitesmoke">
                                                <ol style="list-style: disc">
                                                    <li style="padding: 5px">
                                                        <a href="<?php echo base_url()?>index.php/Products/viewEnterpriseOrders?ent=<?php echo $_SESSION['enterprise']?>" style="margin: 5px;">New Orders<span> (<?php foreach ($countNewOrders as $store) echo $store['total']?>) </span></a>

                                                    </li>
                                                    <li style="padding: 5px">
                                                        <a href="<?php echo base_url()?>index.php/Products/storeOrdersProcessed?ent=<?php echo $_SESSION['enterprise']?>" style="margin: 5px;">Processed Orders<span> (<?php foreach ($countProcessedOrders as $store) echo $store['total']?>) </span></a>

                                                    </li>
                                                    <li style="padding: 5px; border-radius: 4px">
                                                        <a href="<?php echo base_url()?>index.php/Products/storeOrdersComplete?ent=<?php echo $_SESSION['enterprise']?>" style="margin: 5px;">Complete Orders<span> (<?php foreach ($countCompleteOrders as $store) echo $store['total']?>) </span></a>

                                                    </li>
                                                    <li style="padding: 5px; background-color: chocolate; border-radius: 4px; color: white">
                                                        <a href="<?php echo base_url()?>index.php/Products/storeOrdersComplete?ent=<?php echo $_SESSION['enterprise']?>" style="margin: 5px; color: white">Complete Sales<span></span></a>

                                                    </li>
                                                    <li style="padding: 5px">
                                                        <a href="<?php echo base_url()?>index.php/Products/storeOrdersRejected?ent=<?php echo $_SESSION['enterprise']?>" style="margin: 5px;">Rejected Orders<span> (<?php foreach ($countRejectedOrders as $store) echo $store['total']?>) </span></a>

                                                    </li>

                                                </ol>
                                            </div>
                                        </div>
                                        <div class="col-sm-8" style="border: 1px solid #BDBDBD">

                                            <?php if (isset($SingleSaleDetails)){
                                                ?>

                                                <div class="col-sm-12" style="background: whitesmoke; margin-top: 10px; border: 1px solid #BDBDBD">
                                                    <label style="color: chocolate; text-transform: uppercase"><strong>Customer Contact</strong></label><br>
                                                    <label style="">Customer name: <?php echo $SingleSaleDetails->customer_name;?></label><br>
                                                    <label>Phone number: <?php echo $SingleSaleDetails->customer_phone;?></label><br>
                                                    <label style="color: cornflowerblue">Customer email: <?php echo $SingleSaleDetails->customer_email;?></label><br>
                                                    <label style="color: cornflowerblue">Date of sale: <?php echo $SingleSaleDetails->sales_date;?></label><br>

                                                </div>

                                            <?php } ?>

                                            <table class="table table-striped table-bordered" style="font-size: smaller">
                                                <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Sales Quantity</th>
                                                    <th>total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $num = 1;
                                                $total_cost = 0;
                                                foreach($salesProducts->result() as $row){
                                                    $total = ($row->product_price) * ($row->cart_quantity);
                                                    $total_cost = $total_cost + ( ($row->product_price) * ($row->cart_quantity));
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++?></td>
                                                        <td><?php echo $row->ProductName?></td>
                                                        <td><?php echo number_format($row->product_price,2)?></td>
                                                        <td><?php echo $row->cart_quantity?></td>
                                                        <td><?php echo number_format($total,2)?></td>

                                                    </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td align="right" colspan="5"><strong>Total Order cost: <?php echo number_format($total_cost, 2)?> </strong><label>tzs</label></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <div class="" align="right" style="padding: 5px">
                                                <a href="<?php echo base_url()?>index.php/Products/orderReport?ord=<?php echo $_SESSION['order']?>">
                                                    <button type="button" disabled="" class="btn btn-warning btn-xs"><i class="fa fa-print"></i> Print Summary</button> </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>

<!-- statics end -->
<!-- javascripts -->
<script src="<?php echo base_url()?>nice/js/jquery.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>nice/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url()?>nice/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>nice/js/bootstrap-wysiwyg.js"></script>
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
<script src="<?php echo base_url()?>nice/js/wysiwyg.js"></script>
<script src="<?php echo base_url()?>nice/summernote/summernote-lite.js"></script>

<script src="<?php echo base_url()?>/DataTables/js/dataTables.bootstrap.min.js" type="javascript"></script>
<script src="<?php echo base_url()?>/DataTables/js/jquery.dataTables.min.js"></script>
<script href="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.js"></script>

<!-- custom script for this page-->

<script>
    $('#sales').dataTable();
</script>
</html>


