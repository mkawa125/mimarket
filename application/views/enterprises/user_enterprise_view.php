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
    <!--    header end-->

    <!--    sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!--             sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/home"><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-server" aria-hidden="true"></i>
                        <span>My Companies</span><span class="menu-arrow arrow_carrot-right">
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#"><i class="fa fa-user-plus"></i>My Enterprise</a></li>
                        <li><a class="" href="#"><i class="fa fa-home"></i>Bookmarks</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Messages</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#"><i class="fa fa-envelope"></i>Send message</a></li>
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
            </ul>
            <ul class="sidebar-menu">
                <li class="sub">
                    <a class=""  href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/PrivacyTerms"><i class="fa fa-lock"></i> <span>Terms and privacy policy</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/home"><i class="fa fa-question"></i> <span>Help & feedback</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                </li>

            </ul>


            <!--             sidebar menu end-->
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
                            <?php
                            if (isset($SingleEnterprise)){
                            ?>
                            <?php $success_msg = $this->session->flashdata('success_msg');
                            if ($success_msg){?>
                                <div class="alert alert-success alert-dismissible"><?php echo $success_msg?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>
                            <div class="row items" >

                                <div class="col-sm-12" style="font-size: small">
                                    <div class="col-sm-3 image-box">
                                        <img width="100%" height="200" src="<?php echo base_url("Images/organizationImages/".$SingleEnterprise->image_url) ?>" alt="No image">
                                        <div class="col-sm-11 image-box">
                                            <img width="100%" height="200" src="#" alt="Google map location">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 summary-box " style="border: 1px solid #D5D8DC">
                                        <h5 class="summary"><a href="#" style="color: #da8241; text-transform: uppercase"><strong><?php echo $SingleEnterprise->name?></strong></a></h5>
                                       <div class="col-sm-11" >
                                            <h5><strong>Enterprise Descriptions</strong></h5>
                                            <div class="description" style="border: solid 1px #D5D8DC; padding: 10px">
                                                Ndugu Mteja. Asante kwa kutumia TTCL. Kifurushi chako Wiki cha INTANETI kimeisha. Tafadhali piga *148*30# kununua Kifurushi kingine.
                                                Ndugu Mteja. Asante kwa kutumia TTCL. Kifurushi chako Wiki cha INTANETI kimeisha. Tafadhali piga *148*30# kununua Kifurushi kingine.
                                                Ndugu Mteja. Asante kwa kutumia TTCL. Kifurushi chako Wiki cha INTANETI kimeisha. Tafadhali piga *148*30# kununua Kifurushi kingine.
                                                <p>Please click here to <a href="#"> Download product the enterprise/catalogue <i class="fa fa-download" style="color:red;"></i></a></p>
                                            </div>
                                            <h5><strong>Owners important details</strong></h5>
                                            <div class="#" style="border: solid 1px #D5D8DC; padding: 10px">
                                                <label><strong><i class="fa fa-user"></i> Owner's name: </strong></label><span> <?php echo $SingleEnterprise->username?></span><br>
                                                <label><strong><i class="fa fa-envelope"></i> Email: </strong></label><span style="color: cornflowerblue"> <?php echo $SingleEnterprise->email?></span><br>
                                                <label><strong><i class="fa fa-phone"></i> Phone Number: </strong></label><span style="color: green"> <?php echo $SingleEnterprise->phone?></span><br>
                                                <label><strong><i class="fa fa-user"></i> Location: </strong></label><span> <?php echo $SingleEnterprise->location?></span><br>
                                            </div>
                                            <h5><strong style="color: orange">Business Registration information</strong></h5>
                                            <div class="#" style="border: solid 1px #D5D8DC; padding: 10px">
                                                <label><strong>Registration name: </strong></label><span> <?php echo $SingleEnterprise->full_name?></span><br>
                                                <label><strong>TIN number: </strong></label><span> <?php echo $SingleEnterprise->category?></span><br>
                                                <label><strong>Business licence: </strong></label><span> <?php echo $SingleEnterprise->register_date?></span><br>
                                                <label><strong>Business licence Documents: </strong></label><span> <a href="#">Click here to Download registration documents <i class="fa fa-download"></i></a></span><br>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <div class="col-lg-9" style="padding: 10px">

                                </div>
                                <div class="col-sm-3">
                                </div>

                            </div>

                            <div class="row items" style="margin-top: 10px">
                                <div class="row">
                                    <div class="col-sm-4" style="margin: 5px">
                                        <h5><strong>Products registered to this store</strong></h5>
                                    </div>
                                    <div class="col-sm-3" style="margin: 5px">
                                        <a href="<?php echo base_url()?>index.php/Products/OrderProduct?ent=<?php echo $SingleEnterprise->enterprise_id?>">
                                            <button type="button" data-action="" class="btn btn-success btn-block" name="specialOrder">create special order</button></a>
                                    </div>
                                    <div class="col-sm-4 input-group" style="margin: 5px">
                                        <input class="form-control" type="text" name="searchProduct" placeholder="what are you looking for ?">
                                        <span class="input-group-addon"><a class="#"><i class="fa fa-search"></i></a></span>
                                    </div>

                                </div>
                            <?php }?>


                                <div class="col-sm-12" style="margin-top: 10px">
                                        <?php
                                        foreach($products->result() as $row){
                                            ?>
                                            <div class="col-sm-2" style="font-size: small">
                                                <a href="#">
                                                    <img src="<?php echo base_url()?>/Images/productImages/<?php echo $row->product_image?>" width="100%" height="100"></a>
                                                <h5 style="color: cornflowerblue"><strong><?php echo $row->ProductName?></strong></h5>
                                                <p><strong>Price:</strong> <span style="color: red"> <?php echo $row->product_price?> tzs</span>/piece</p>
                                                <button class="btn btn-info btn-danger"><i class="fa fa-shopping-cart"></i> Order product</button>
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
