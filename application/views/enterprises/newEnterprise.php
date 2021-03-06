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
            padding: 10px;
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
                        <span class="badge bg-important"> <?php foreach ($countNewOrders as $store) echo $store['total']?> </span>
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
                            <p href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">navigate to companies</p>
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
    <aside >
        <div id="sidebar" class="nav-collapse " >
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


                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Products/viewOrders" class=""><i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
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
                <div class="col-lg-8 col-sm-offset-2">
                    <h5 class="#"><i class="fa fa-home"></i><a href="#"> Home </a>  <i class="fa fa-angle-double-right"></i>
                        <span> <a href="#"> Enterprises </a>  </span><i class="fa fa-angle-double-right"></i>
                        <span> <a href="#"> New Enterprise </a>  </span>
                    </h5>
                    <section class="">
                        <div class="col-lg-11">
                            <div class="row items" >
                                <form role="form" action="<?php echo base_url()?>index.php/Enterprise/AddEnterprise" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                    <div class="row row-enter">
                                        <div class="col-sm-9" style="color: cornflowerblue"> <h5 class=""><strong><i class="fa fa-plus-circle"></i> Register new Enterprise</strong></h5></div>
                                        <div class="col-sm-2"><button type="submit" name="add" class="btn btn-primary add" >Save Enterprise</button></div>
                                    </div>

                                    <div class="tab-content cont">

                                        <?php $error_msg = $this->session->flashdata('error_msg');
                                        if ($error_msg){?>
                                            <div class="alert alert-danger alert-dismissible"><?php echo $error_msg?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></div>
                                            <?php
                                        }
                                        ?>

                                        <?php $error = form_error('name', '<p class="error">')?>
                                        <?php echo $error?>
                                            <div class="row" >
                                                <div class="col-sm-6" >
                                                    <label for="name"><strong>Enterprise name:</strong></label>
                                                    <div class="form-group input-group" <?php echo $error? 'has error': '' ?>>
                                                        <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                                        <input type="text" class="form-control" placeholder="Enterprise name" name="name" id="name" >
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="owner"><strong>Owner:</strong></label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input class="form-control" style="color: orange" id="owner" name="owner" value="<?php echo $_SESSION['full_name']?>">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="txtlat" id="txtlat" required value="">
                                                <input type="hidden" name="txtlang" id="txtlang" required value="">
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="location"><strong>Location:</strong></label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
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

                                                <div class="col-sm-6">
                                                    <label for="category"><strong>Category:</strong></label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <select id="category" class="form-control" name="category">
                                                            <option value="electronics" selected>Electronics</option>
                                                            <option value="construction">Construction</option>
                                                            <option value="hardware">Hardware</option>
                                                            <option value="plumbing">Plumbing</option>
                                                            <option value="furniture">Furniture</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="email" ><strong>Owner's Email:</strong></label>
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input class="form-control" id="email" name="email" value="<?php echo $_SESSION["email"]?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="phone"><strong>Phone Number:</strong></label>
                                                    <div class="form-group input-group form-horizontal">
                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                        <input name="phone" id="phone" value="<?php echo $_SESSION['phone']?>" style="color: red" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="catalogue" ><strong>Store Catalogue:</strong></label>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">pdf</span>
                                                    <input type="file" class="form-control" id="catalogue" name="catalogue">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php $error = form_error('description', '<p class="error">')?>
                                                <?php echo $error?>
                                                <label for="description"><strong>Descriptions:</strong></label>
                                                <textarea class="form-control" rows="5" name="description" id="description" <?php echo $error? 'has error': '' ?>></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Location: <span id="map"></span></p>
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



