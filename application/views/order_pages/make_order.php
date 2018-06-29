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

<!--    jquery plugins-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


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
            padding: 0 15px;
            margin: 10px;
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

                                <div class="col-sm-11 image-box" style="margin: 20px; border: 1px solid #D5D8DC; padding: 10px">
                                    <div class="row" style="margin: 5px; border: 1px solid #BDBDBD">
                                        <div class="col-sm-6">
                                            <h5 style="text-transform: uppercase; color: red; text-align: center; font-size: smaller">
                                                <strong>Please fill the form below to make your order request</strong>
                                            </h5>
                                        </div>
                                        <div class="col-sm-6" style="background-color: whitesmoke; border-left: 1px solid #BDBDBD">
                                            <h5 style="text-transform: uppercase; color:; text-align: center">
                                             <strong><?php echo $SingleEnterprise->name?></strong>
                                            </h5>
                                        </div>
                                    </div>
                                    <?php }?>

                                    <form class="#" action="<?php echo base_url()?>index.php/Products/AddOrder" method="POST" enctype="multipart/form-data" name="add_name" id="add_name">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-4" style="background-color: whitesmoke; margin: 15px; border: 1px solid #BDBDBD; border-radius: 0">
                                                    <h5 style="text-align: center; text-transform: uppercase; color: cornflowerblue">
                                                        <i class="fa fa-user"></i><strong> customer Contact Details:</strong></h5>
                                                    <small>You can click your details to change it whenever necessary</small>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">Email</i></span>
                                                        <input class="form-control required" placeholder="Email address" name="email"
                                                               type="text" autofocus title="Please you can change this email here"  id="email" value="<?php echo $_SESSION['email']?>">
                                                    </div>

                                                    <div class="form-group input-group" >
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">Phone</span>
                                                        <input class="form-control" id="phone" name="phone"
                                                               type="text" autofocus title="Email address" value="<?php echo $_SESSION['phone']?>" style="text-transform: capitalize"">
                                                    </div>

                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">Location</span>
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

                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">date</i></span>
                                                        <input class="form-control required" name="dateOfNeed"
                                                               type="date" autofocus title="Please enter your username"  id="date" required>
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">Order Name</i></span>
                                                        <input class="form-control" name="order_name"
                                                               type="text" autofocus title="order name"  id="order_name" required>
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon" style="background-color: #F5D0A9; width: 80px; font-size: small">Files</i></span>
                                                        <input class="form-control" name="document"
                                                               type="file" autofocus title="Upload additional order documents"  id="document">
                                                    </div>


                                                </div>
                                                <div class="col-sm-7">
                                                    <label><small>List the Products you need</small></label>
                                                    <div class="form-group">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped" id="dynamic_field">
                                                                    <tr>
                                                                        <td><input style="font-size: small" type="text" name="name[]" placeholder="Product Name" class="form-control name_list"  required/></td>
                                                                        <td><input style="font-size: small" type="text" name="features[]" placeholder="Product features" class="form-control name_list" required/></td>
                                                                        <td><input  style="font-size: small" type="number" name="quantity[]" placeholder="quantity" class="form-control name_list" required/></td>
                                                                        <td><button type="button" name="add" id="add" class="btn btn-info"><i class="fa fa-plus"></i></button></td>
                                                                    </tr>
                                                                </table>
                                                                <div class="#">
                                                                    <div class="col-sm-8"></div>
                                                                    <div class="col-sm-4"><button type="submit" name="submitOrder" id="submit" class="btn btn-success btn-block"><i class="fa fa-shopping-cart"></i> Submit Order</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>

<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Product Name" class="form-control name_list" /></td><td><input type="text" name="features[]" placeholder="product features" class="form-control name_list" /></td><td><input type="number" name="quantity[]" placeholder="quantity" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-minus"></i></button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submitOrder').click(function(){
            $.ajax({
                url:"<?php echo base_url()?>/index.php/Products/AddOrder",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>
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

<!--jquery CDN -->
<!-- custom script for this page-->

<script>
    $('#enterprise').dataTable();
</script>
</html>
