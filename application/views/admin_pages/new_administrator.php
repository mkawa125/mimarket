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
    <link href="<?php echo base_url()?>nice/css/bootstrap.theme.css" rel="stylesheet" type="text/css">

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


    <!--custom style sheet-->
    <style>
        .icon_menu{
            color: black;
        }
        .error{
            color: red;
            font-size: small;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .new{
            background-color: #E6E6E6;
            padding: 20px;
            font-size: smaller;
            border-radius: 8px;

        }
        .cont{
            background-color: white;
            padding: 50px;
        }
        .form-control{
            font-size: small;
            border-radius: 0;
        }
        .input-group-addon{
            border-radius: 0;
        }
        .row-enter{
            padding: 10px;
            border-bottom: 1px dotted #7F8C8D;
        }
        .add{
            padding: 10px;
            border-radius: 4px;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 15px;
            background-color: white;
        }
    </style>
</head>

<body>
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
                <div class="col-lg-9 col-sm-offset-2">
                    <h5 class="#"><i class="fa fa-home"></i><a href="#"> Home </a>  <i class="fa fa-angle-double-right"></i>
                        <span> <a href="#"> Administrators </a>  </span><i class="fa fa-angle-double-right"></i>
                        <span> <a href="#"> New Administrators </a>  </span>
                    </h5>
                    <section class="">
                        <div class="col-lg-11">
                            <div class="row items" >
                                <form role="form" action="<?php echo base_url()?>index.php/Admin/saveAdministrator" method="POST" enctype="multipart/form-data">
                                    <fieldset>

                                            <div class="col-lg-12" style="background-color: #A4A4A4; padding: 10px; border-radius: 0;">
                                                <div class="col-lg-9">
                                                    <h5 style="color: white"><i class="fa fa-edit"></i> Create New System Administrator</h5>
                                                </div>
                                                <div class="col-lg-3">
                                                </div>
                                            </div>


                                        <div class="tab-content cont" style="border: 1px solid #A4A4A4; margin-top: 10px">

                                            <?php $error_msg = $this->session->flashdata('error_msg');
                                            if ($error_msg){?>
                                                <div class="alert alert-danger alert-dismissible"><?php echo $error_msg?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></div>
                                                <?php
                                            }
                                            ?>

                                            <div class="row" >
                                                <div class="col-sm-6" >
                                                    <label for="name"><strong>Admin name:</strong>
                                                    <span>
                                                        <?php $error = form_error('name', '<p class="error">')?>
                                                        <?php echo $error?>
                                                    </span>
                                                    </label>
                                                    <div class="form-group input-group" <?php echo $error? 'has error': '' ?>>
                                                        <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enterprise name" name="name" id="name" >
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="username"><strong>Username:</strong></label>
                                                    <?php $error = form_error('username', '<p class="error">')?>
                                                    <?php echo $error?>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input class="form-control" style="color: orange" id="username" name="username" placeholder="enter admin username">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="email" ><strong>Email Address:</strong></label>
                                                    <?php $error = form_error('email', '<p class="error">')?>
                                                    <?php echo $error?>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input class="form-control" id="email" name="email" placeholder="e.g. admin@gmail.com">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="phone"><strong>Phone Number:</strong></label>
                                                    <?php $error = form_error('phone', '<p class="error">')?>
                                                    <?php echo $error?>
                                                    <div class="form-group input-group form-horizontal">
                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                        <input name="phone" id="phone" style="color: red" class="form-control" placeholder="admin phone" >
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12"> <h5 style="color: cornflowerblue"><i class="fa fa-key"></i> Administrator Login Passwords</h5>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="pass1" ><strong>Enter password:</strong></label>
                                                        <?php $error = form_error('pass1', '<p class="error">')?>
                                                        <?php echo $error?>
                                                        <div class="form-group input-group">
                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                            <input type="text" class="form-control" id="pass1" name="pass1" placeholder="enter password">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="pass2"><strong>Confirm password:</strong></label>
                                                        <?php $error = form_error('pass2', '<p class="error">')?>
                                                        <?php echo $error?>
                                                        <div class="form-group input-group form-horizontal">
                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                            <input type="text" name="pass2" id="pass2" class="form-control" placeholder="re-enter password" >
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-default" style="float: right; background-color: whitesmoke" name="save_admin"><i class="fa fa-save"></i> Add Admin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>

<!--geo location script-->

</body>
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

<script src="<?php echo base_url()?>/js/geoloc.js"></script>

<script>
    $(document).ready(function(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showLocation);
        }else{
            $('#map').html('Geolocation is not supported by this browser.');
        }
    });

    function showLocation(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/Direct/geoLocation',
            data:'latitude='+latitude+'&longitude='+longitude,
            success:function(msg){
                if(msg){
                    $("#map").html(msg);
                }else{
                    $("#map").html('Not Available');
                }
            }
        });
    }
</script>

<script>
    $(function() {
        window.onload = getLocation;
        var geo = navigator.geolocation;
        function getLocation() {
            if (geo) {
                geo.getCurrentPosition(displayLocation);
            } else {
                alert("Oops, Geolocation API is not supported");
            }
        } function displayLocation(position) {
            var lat = position.coords.latitude;
            var lang = position.coords.longitude;
            document.getElementById('txtlat').value = lat;
            document.getElementById('txtlang').value = lang;
        }
    });

</script>
</html>



