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
                                if (isset($singleStoreDetails)){
                                ?>

                                <div class="col-lg-12" style="background-color: cadetblue; padding: 5px">
                                    <div class="col-lg-10" style="padding: 5px">
                                        <h5 style="color: white; text-transform: uppercase;"><a href="#" style="color: white"><strong><?php echo $singleStoreDetails->name?></strong></a></h5>
                                    </div>
                                    <div class="col-lg-2">
                                        <?php
                                        echo date('Y-m-d');
                                        ?>
                                    </div>
                                </div>

                                <div class="col-sm-12" style="border: 1px solid #BDBDBD ; font-size: small">
                                    <div class="col-sm-4 image-box">
                                        <img width="100%" height="150" src="<?php echo base_url("Images/organizationImages/".$singleStoreDetails->image_url) ?>" alt="No image">
                                    </div>

                                    <div class="col-sm-7" style="margin: 10px">
                                        <div style="background-color: #FA8258; padding: 5px; border: 1px solid #BDBDBD">
                                            <h5 style="font-size: small; color: white; text-align: center">Store Registration Details</h5>
                                        </div>
                                        <div class="col-sm-12" style="border: 1px solid #BDBDBD; padding: 5px; font-size: small; background-color: whitesmoke">
                                            <?php if (isset($singleStoreDetails)){
                                                ?>
                                                <div class="col-sm-12">
                                                    <label><strong>Store name: </strong></label><span> <?php echo $singleStoreDetails->name?></span><br>
                                                    <label><strong>Category: </strong></label><span> <?php echo $singleStoreDetails->category?></span><br>
                                                    <label><strong>Date registered: </strong></label><span> <?php echo $singleStoreDetails->register_date?></span><br>
                                                    <label><strong>Owner's name: </strong></label><span style="text-transform: capitalize"> <?php echo $singleStoreDetails->full_name?></span><br>
                                                    <label><strong>Email Address: </strong></label><span> <?php echo $singleStoreDetails->email?></span><br>
                                                    <label><strong>Location: </strong></label><span> <?php echo $singleStoreDetails->location?></span><br>
                                                    <p>
                                                        <?php
                                                        if ($singleStoreDetails->store_catalogue != NULL){
                                                            $_SESSION['file_name'] = $singleStoreDetails->store_catalogue;
                                                            ?>
                                                            <a href="<?php echo base_url()?>index.php/Admin/DownloadStoreDocument">Click here to download store  document</a>
                                                        <?php } ?>

                                                    </p>
                                                    <?php
                                                    $status = $singleStoreDetails->enterprise_status;
                                                    if ($status == 0){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/denyRegistration"><button class="btn btn-danger btn-xs" style="float: right; margin: 2px"><i class="fa fa-x"></i> Deny registration</button></a>
                                                    <a href="<?php echo base_url()?>index.php/Admin/verifyStore"><button class="btn btn-primary btn-xs" style="float: right; margin: 2px"><i class="fa fa-check"></i> verify store</button></a>
                                                    <?php } elseif($status == 1){?>
                                                        <button  style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $singleStoreDetails->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                        <a href="<?php echo base_url()?>index.php/Admin/suspendStore"><button class="btn btn-default btn-xs" style="float: right; margin: 2px"><i class="fa fa-eye-slash"></i> Suspend</button></a>

                                                    <?php } elseif($status == 2){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/verifyStore"><button class="btn btn-danger btn-xs" style="float: right; margin: 2px"><i class="fa fa-check"></i> Verify Store</button></a>
                                                        <button style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $singleStoreDetails->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                    <?php }elseif($status == 3){?>
                                                        <a href="<?php echo base_url()?>index.php/Admin/unSuspendStore"><button class="btn btn-default btn-xs" style="float: right; margin: 2px"><i class="fa fa-eye-o"></i> un suspend</button></a>
                                                        <button style="float: right; margin: 2px" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $singleStoreDetails->enterprise_id; ?>"><i class="fa fa-trash"></i> Delete</button>
                                                    <?php }
                                                    ?>

                                                </div>

                                                <div class="modal fade" id="myModal2<?php echo $singleStoreDetails->enterprise_id; ?>" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title" style="color: red">Delete Enterprise</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete <a href="#"><?php echo $singleStoreDetails->name?></a>?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                <a href="<?php echo base_url()?>index.php/Admin/deleteStore?ent=<?php echo $singleStoreDetails->enterprise_id; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            <?php } ?>

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
                                        foreach($storeProducts as $row){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $num++; ?></th>
                                                <td><?php echo $row['ProductName']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td>
                                                    <img width="50" height="30" src="<?php echo base_url("Images/productImages/".$row['product_image']) ?>" alt="No image">
                                                </td>
                                                <td><?php echo $row['product_price']; ?></td>
                                                <td><?php echo $row['quantity']; ?></td>
                                                <td style="color: cornflowerblue"><?php echo $row['date_added'] ?></td>
                                                <td>
                                                    <a href="<?php echo base_url()?>index.php/Admin/adminProductDetails?prod=<?php echo $row['product_id']; ?>"><button type="button" class="btn btn-primary btn-xs">View</button></a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal<?php echo $row['product_id']; ?>" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title" style="color: red">Delete Product</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete <a href="#"><?php echo $row['ProductName']?></a>?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <a href="<?php echo base_url()?>index.php/Products/DeleteProduct?prod=<?php echo $row['product_id']; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
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
