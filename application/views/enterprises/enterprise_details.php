<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/9/2018
 * Time: 7:34 AM
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
            padding: 5px;
            margin: 10px;
        }
        .btn{
            border-radius: 0;
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
                            <div class="row items" >
                                <?php
                               if (isset($SingleEnterprise)){
                                ?>

                                <div class="col-lg-10" style="padding: 10px">
                                    <h5 style="color: #da8241; text-transform: uppercase;"><a href="#" style="color: #da8241"><strong><?php echo $SingleEnterprise->name?></strong></a></h5>
                                </div>
                                <div class="col-lg-2">
                                    <?php
                                    echo date('Y-m-d');
                                    ?>
                                </div>

                                <div class="col-sm-12" style="border-top: 1px dotted #D5D8DC ; font-size: small">
                                    <div class="col-sm-3 image-box">
                                        <img width="100%" height="150" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">
                                        <label>Other images</label><br>
                                        <img  style="margin-top: 3px" width="20%" height="50" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">
                                        <img  style="margin-top: 3px" width="20%" height="50" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">
                                        <img  style="margin-top: 3px" width="20%" height="50" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">
                                        <img  style="margin-top: 3px" width="20%" height="50" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">


                                    </div>

                                    <div class="col-sm-5" style="margin: 10px">
                                        <div style="background-color: cadetblue; padding: 5px; border: 1px solid #BDBDBD">
                                            <h5 style="font-size: small; color: white; text-align: center">Store Details</h5>
                                        </div>
                                        <div class="col-sm-12" style="border: 1px solid #BDBDBD; padding: 5px; font-size: small; background-color: whitesmoke">
                                            <?php if (isset($SingleEnterprise)){
                                                ?>
                                                <div class="col-sm-9">
                                                    <label><strong>Store name: </strong></label><span> <?php echo $SingleEnterprise->name?></span><br>
                                                    <label><strong>Products: </strong></label><span> <?php echo $SingleEnterprise->category?></span><br>
                                                    <label><strong>Date registered: </strong></label><span> <?php echo $SingleEnterprise->register_date?></span><br>
                                                    <label><strong>User phone: </strong></label><span> <?php echo $SingleEnterprise->phone?></span><br>
<!--                                                    <label><strong>Store catalogue: </strong></label><a href="#"> <span style="color: red"> Download</span> <i class="fa fa-download"></i></a> <br>-->
                                                    <a href="<?php echo base_url()?>index.php/Enterprise/editEnterprise?ent=<?php echo $SingleEnterprise->enterprise_id?>" >
                                                        <i class="fa fa-edit"></i> Edit store details
                                                    </a>

                                                </div>

                                            <?php } ?>

                                        </div>

                                    </div>
                                    <div class="col-sm-3" style=" padding: 0; margin: 10px; border: 1px solid #BDBDBD; border-radius: 0;">
                                        <div style="background-color: darkslategray; padding: 5px; border: 1px solid #BDBDBD">
                                            <h5 style="font-size: small; color: white; text-align: center">Store Summary</h5>
                                        </div>

                                        <div class="" style="padding: 15px; font-size: small; background-color: whitesmoke">
                                            <ol style="list-style: square">
                                                <li style="padding: 5px"><a href="" style="margin: 5px;">Total products <span><strong><?php echo $SingleEnterprise->total_products?></strong></span></a>

                                                </li>
                                                <li style="padding: 5px"><a href="" style="margin: 5px;">Store Visitors <span><strong><?php echo $SingleEnterprise->enterprise_visitors?></strong></span></a>

                                                </li>
                                                <li style="padding: 5px"><a href="" style="margin: 5px;">Total Orders<span> <strong><?php echo $SingleEnterprise->total_products?></strong></span></a>

                                                </li>

                                            </ol>
                                            <a href="<?php echo base_url()?>index.php/Products/viewEnterpriseOrders?ent=<?php echo $SingleEnterprise->enterprise_id?>">
                                                <button title="view new order requests" type="button" class="btn btn btn-block">Store Orders</button>
                                            </a>
                                            <a href="<?php echo base_url()?>index.php/Direct/salesCustomerDetails">
                                                <button style="margin-top: 5px" title="view new order requests" type="button" class="btn btn btn-block"><i class="fa fa-credit-card"></i> make sells</button>
                                            </a>
                                            <a href="<?php echo base_url()?>index.php/Products/CompleteSales">
                                                <button style="margin-top: 5px" title="view new order requests" type="button" class="btn btn-success btn-block"><i class="fa fa-credit-card"></i> complete sales</button>
                                            </a>


                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                            </div>

                            <div class="row items" style="margin-top: 10px">
                                <div class="row" style="background-color: whitesmoke; margin: 5px">
                                    <div class="col-lg-10" style="padding: 10px">
                                        <h5 style="text-transform: uppercase;"><strong>Products registered to this store</strong></h5>
                                    </div>
                                    <div class="col-lg-2" style="padding: 5px">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_product"><i class="fa fa-plus"></i> Add Product</button>

                                    </div>
                                </div>

                                <div class="col-sm-12" style="margin-top: 10px">
                                    <table  class="table table-striped table-bordered" id="enterprise" style="font-size: small">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Date Registered</th>
                                            <th width="80">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $num = 1;
                                        foreach($products->result() as $row){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $num++; ?></th>
                                                <td><?php echo $row->ProductName; ?></td>
                                                <td><?php echo $row->category; ?></td>
                                                <td>
                                                    <img width="50" height="30" src="<?php echo base_url("Images/productImages/".$row->product_image) ?>" alt="No image">
                                                </td>
                                                <td><?php echo $row->product_price; ?></td>
                                                <td><?php echo $row->quantity; ?></td>
                                                <td style="color: cornflowerblue"><?php echo $row->date_added ?></td>
                                                <td>
                                                    <a onclick="add_book()"><span class="glyphicon glyphicon-edit" style="color: orange"  aria-hidden="true"></span></a>
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row->product_id; ?>">Delete</button>
                                                    <a href="<?php echo base_url()?>index.php/Products/ownerProductDetails?prod=<?php echo $row->product_id; ?>"><button type="button" class="btn btn-primary btn-xs">View</button></a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal<?php echo $row->product_id; ?>" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title" style="color: red">Delete Product</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete <a href="#"><?php echo $row->ProductName?></a>?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <a href="<?php echo base_url()?>index.php/Products/DeleteProduct?prod=<?php echo $row->product_id; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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
