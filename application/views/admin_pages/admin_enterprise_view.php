<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 6/18/2018
 * Time: 11:27 AM
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
        .image-box{
            border: 1px solid #D5D8DC;
            padding: 5px;
            margin: 10px;
            border-radius: 0;
            min-height: 150px;
        }
        .summary{
            border-radius: 0;
            padding: 10px;
            border: 1px solid #D5D8DC;
            background-color: whitesmoke;
        }
        .summary-box{
            padding: 8px;
            margin: 10px;
        }
        .description{
            font-size: small;
            line-height: 28px;
            color: #848484;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 10px;
            background-color: white;
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
            <h4 style="margin-left: 250px">ONLINE MARKETING SYSTEM ADMINISTRATION</h4>
            <!--  search form end -->
        </div>


        <div class="top-nav notification-row" >
            <ul class="nav pull-right top-menu">
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
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getDeniedStores"><i class="fa fa-angle-double-right"></i>Denied stores</a></li>                    </ul>
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

                            <?php $error_order = $this->session->flashdata('error_order');
                            if ($error_order){?>
                                <div class="alert alert-danger alert-dismissible"><?php echo $error_order?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>

                            <div class="row items" >
                                <?php  if (isset($SingleEnterprise)){

                                    ?>
                                    <div class="col-sm-12" style="font-size: small">
                                        <div class="col-sm-3 image-box">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                </ol>
                                                <!-- Wrapper for carousel items -->
                                                <div class="carousel-inner" style="height: 200px">
                                                    <?php foreach ($images->result() as $image){?>
                                                        <div class="item active">
                                                            <img width="100%" height="100%" src="<?php echo base_url("Images/organizationImages/".$image->enterprise_image) ?>" alt="No image">
                                                        </div>
                                                        <div class="item">
                                                            <img width="100%" height="100%" src="<?php echo base_url()?>/Images/systemImages/toi2.jpg"   alt="Second Slide">
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <!-- Carousel controls -->
                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                            <div class="col-sm-11" style="border: 1px solid #D5D8DC; background-color: whitesmoke">
                                                <div>
                                                    <h5><strong><i class="fa fa-map-marker"></i> Enterprise location</strong></h5>
                                                    <?php echo $SingleEnterprise->location?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-8" style="margin: 10px">
                                            <div class="col-sm-12" style="border: 1px solid #BDBDBD; padding: 5px; font-size: small; background-color: whitesmoke">
                                                <div style="background-color: cadetblue; padding: 5px; border: 1px solid #BDBDBD">
                                                    <h5 style="font-size: small; color: white; text-align: center; text-transform: uppercase"><?php echo $SingleEnterprise->name?></h5>
                                                </div>
                                                <div class="col-sm-12">
                                                    <h5><strong>Enterprise Descriptions</strong></h5>
                                                    <div class="description" style="border: solid 1px #D5D8DC; padding: 10px; background-color: white">
                                                        <p><?php echo $SingleEnterprise->description?></p>
                                                        <p>
                                                            <?php
                                                            if ($SingleEnterprise->store_catalogue != NULL){
                                                                $_SESSION['file_name'] = $SingleEnterprise->store_catalogue;
                                                                ?>
                                                                <a href="<?php echo base_url()?>index.php/Admin/DownloadStoreDocument">Click here to download store  document</a>
                                                            <?php } ?>

                                                        </p>
                                                    </div>

                                                    <p style="margin-top: 10px"><strong style="color: chocolate">Contact Details</strong></p>
                                                    <label><strong><i class="fa fa-user"></i> Owner's name: </strong></label><span> <?php echo $SingleEnterprise->username?></span><br>
                                                    <label><strong><i class="fa fa-envelope"></i> Email: </strong></label><span style="color: cornflowerblue"> <?php echo $SingleEnterprise->email?></span><br>
                                                    <label><strong><i class="fa fa-phone"></i> Phone Number: </strong></label><span style="color: green"> <?php echo $SingleEnterprise->phone?></span><br>
                                                    <label><strong><i class="fa fa-user"></i> Location: </strong></label><span> <?php echo $SingleEnterprise->location?></span><br>

                                                    <?php
                                                    $status = $SingleEnterprise->enterprise_status;
                                                    if ($status == 0){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/denyRegistration"><button class="btn btn-danger btn-xs" style="float: right; margin: 2px"><i class="fa fa-x"></i> Deny registration</button></a>
                                                        <a href="<?php echo base_url()?>index.php/Admin/verifyStore"><button class="btn btn-primary btn-xs" style="float: right; margin: 2px"><i class="fa fa-check"></i> verify store</button></a>
                                                    <?php } elseif($status == 1){?>
                                                        <button  style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $SingleEnterprise->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                        <a href="<?php echo base_url()?>index.php/Admin/suspendStore"><button class="btn btn-default btn-xs" style="float: right; margin: 2px"><i class="fa fa-eye-slash"></i> Suspend</button></a>

                                                    <?php } elseif($status == 2){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/verifyStore"><button class="btn btn-danger btn-xs" style="float: right; margin: 2px"><i class="fa fa-check"></i> Verify Store</button></a>
                                                        <button style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $SingleEnterprise->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                    <?php }elseif($status == 3){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/unSuspendStore"><button class="btn btn-default btn-xs" style="float: right; margin: 2px"><i class="fa fa-eye-o"></i> un suspend</button></a>
                                                        <button style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $SingleEnterprise->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                    <?php }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="row items" style="margin-top: 10px">
                                <div class="row">
                                    <div class="col-sm-4" style="margin: 5px">
                                        <h5><strong>Products registered to this store</strong></h5>
                                    </div>
                                    <div class="col-sm-3" style="margin: 5px">
                                    </div>
                                    <div class="col-sm-4 input-group" style="margin: 5px">
                                        <input class="form-control" type="text" name="searchProduct" placeholder="what are you looking for ?">
                                        <span class="input-group-addon"><a class="#"><i class="fa fa-search"></i></a></span>
                                    </div>

                                </div>

                                <div class=""></div>
                                <div class="col-sm-12" style="margin-top: 10px">
                                    <?php
                                    foreach($products->result() as $row){
                                        ?>
                                        <div class="col-sm-2" style="font-size: small; border: 1px solid #D5D8DC; margin: 3px">
                                            <a href="<?php echo base_url()?>index.php/Products/ViewProductDetails?prod=<?php echo $row->product_id?>">
                                                <h5 style="color: cornflowerblue; text-align: center"><strong><?php echo $row->ProductName?></strong></h5>
                                                <img src="<?php echo base_url()?>/Images/productImages/<?php echo $row->product_image?>" width="100%" height="70"></a>
                                            <p><strong>Price:</strong> <span style="color: red"> <?php echo $row->product_price?> tzs</span></p>
                                        </div>

                                        <div class="modal fade" id="myModal<?php echo $row->product_id; ?>" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title" style="color: red">Add product to cart</h4>
                                                    </div>
                                                    <form action="<?php echo base_url()?>index.php/Products/DirectOrders?prod=<?php echo $row->product_id; ?>" method="post">
                                                        <div class="modal-body">

                                                            <p>Enter product quantity</p>

                                                            <div class="form-group input-group">
                                                                <span class="input-group-addon">Quantity</span>
                                                                <input class="form-control" placeholder="Product Quantity" name="quantity" required
                                                                       type="number" title="Enter product quantity">
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button style="font-size: small" type="submit" class="btn btn-primary" name="send_order"><i class="fa fa-shopping-cart"></i> Add Product</button>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>



    <!-- Bootstrap modal -->
    <div class="modal fade" id="add_product" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Product</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url()?>index.php/Products/AddProducts?ent=<?php ?>" method="post" class="#" enctype="multipart/form-data">
                        <div class="form-body">

                            <div class="row">

                                <div class="col-sm-6 "><label for="email" id="email">Product name:</label>
                                    <input type="text" class="form-control" placeholder="Product name" name="product_name">
                                </div>

                                <div class="col-sm-6 "><label for="email" id="email">Quantity:</label>
                                    <input type="number" class="form-control" placeholder="Quantity " name="quantity" title="product quantity" >
                                </div>
                            </div>

                            <label for="category" id="category">Category:</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
                                <select id="category" class="form-control" name="category">
                                    <option value="electronics" selected>Electronics</option>
                                    <option value="construction">Construction</option>
                                    <option value="hardware">Hardware</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="furniture">Furniture</option>
                                </select>
                            </div>

                            <label for="product_price">Price:</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">tzs</span>
                                <input type="number" class="form-control" placeholder="product price" name="product_price" id="product_price" title="enter product title" >
                                <span class="input-group-addon">@ product</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                <input type="file" class="form-control" placeholder="product image" name="product_image" title="upload product image" >
                            </div>

                            <label for="email" id="email">Description:</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"></span>
                                <textarea type="text" rows="5" class="form-control" placeholder="Say something about this product" name="description" ></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="saveProduct" class="btn btn-primary">Save Product</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
</div>
<!-- statics end -->
<!-- javascripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
    $('#enterprise').dataTable();
</script>
</html>
