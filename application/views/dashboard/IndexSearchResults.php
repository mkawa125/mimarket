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
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!--fonts icon-->


    <!--custom style sheet-->
    <style>

        .icon_menu{
            color: black;
        }

        .search-row {

            float: left;

            margin-top: 15px;

            margin-left: 5px;

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
        .icon_menu{
            color: black;
        }
        .front-head{
            color: #DC7633  ;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            font-size: medium;
            text-transform: uppercase;
        }
        .form-control{
            border-radius: 0;
        }
        .input-group-addon{
            border-radius: 0;
            padding-top: 5px;
        }
        .navbar-form .form-control{

            width: 300px;

            height: 38px;

            padding-left: 20px;

            margin-top: 0;

        }




    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start -->

<div id="container" class="#">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="#" class="logo">MI<span class="lite">MARKET</span></a>
        <!--logo end-->


        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu" style="margin-left: 190px">
                <li>
                    <form class="navbar-form" action="">
                        <div class="col-sm-12 input-group">
                        <span class="input-group-addon">
                        <select class="" id="category"  name="category" style="font-size: small; padding: 3px">
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
                            <input class="form-control" type="text" name="searchProduct" placeholder="what are you looking for ?">
                            <span class="input-group-addon" style="background-color: cornflowerblue">
                                <a class="#"><i class="fa fa-search" style="color: white"></i></a></span>

                        </div>
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row" style="margin-top: 25px">
            <!--drop down start-->
            <ul class="nav pull-right top-menu">

                <li class="dropdown">
                    <a  href="<?php echo base_url()?>index.php/Direct/login">
                        <span class="username"><i class="fa fa-user" style="font-size: larger"></i> User login</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Authentication/IndexPage""><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-user"></i>
                        <span>Account</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Login</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Register</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-object-group"></i>
                        <span>Categories</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Electronics</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Construction</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Plumbing</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/register"><i class="fa fa-user"></i>Furniture</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Direct/login"><i class="fa fa-lock"></i>Hardware</a></li>

                    </ul>
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
                    <section class="">
                        <div class="col-lg-11">
                            <?php
                            if ($searchResult->num_rows() > 0){ ?>
                                <h5 class="#">Search Results for:  <span><strong>"<?php echo $_SESSION['product_name']?>"</strong></span></h5>
                                <label>Total of "<?php echo $searchResult->num_rows() ?>" found</label>
                                <div class="row items">
                               <?php
                                foreach ($searchResult->result() as $defaultProducts){?>
                                    <div class="col-sm-2 default">
                                        <h5 style="color: cornflowerblue"><a href="<?php echo base_url()?>index.php/Products/unViewProductDetails?prod=<?php echo $defaultProducts->product_id?>"><strong><?php echo $defaultProducts->ProductName?></strong></a></h5>
                                        <a href="<?php echo base_url()?>index.php/Products/unViewProductDetails?prod=<?php echo $defaultProducts->product_id?>">
                                            <img src="<?php echo base_url()?>/Images/productImages/<?php echo $defaultProducts->product_image?>" width="100%" height="60"></a>
                                        <div class="centered" style="position: absolute; top: 40%; left: 35%; transform: translate(-50%, -50%)">
                                            <label><strong>Price:</strong> <span style="color: chocolate"> <?php echo $defaultProducts->product_price?> tzs</span></label>
                                        </div>
                                        <label><strong>Enterprise:</strong> <span><a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultProducts->enterprise_id?>"> <?php echo $defaultProducts->name?></a></span>, <span><?php echo $defaultProducts->location?></span></label>
                                        <a href="<?php echo base_url()?>index.php/Products/unViewProductDetails?prod=<?php echo $defaultProducts->product_id?>"><button class="btn btn-info btn-block">More details</button></a>
                                    </div>
                                <?php }?>
                            </div>

                            <?php }else{?>

                                <?php if ($enterprises->num_rows() > 0){?>
                                    <h5 class="#">Search Results for:  <span><strong><?php echo $_SESSION['product_name']?></strong></span></h5>
                                    <p>Total of <strong>"<?php echo $enterprises->num_rows() ?>"</strong> results found</p>
                                <div class="row items">
                                    <?php foreach ($enterprises->result() as $defaultEnterprises){?>
                                        <div class="col-md-2 default">
                                            <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><h6 style="color: cornflowerblue; padding: 5px"><strong><?php echo $defaultEnterprises->name?></strong></h6></a>
                                            <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><img src="<?php echo base_url()?>/Images/organizationImages/<?php echo $defaultEnterprises->image_url?>" width="100%" height="70"></a>
                                            <label><strong>Category:</strong> <span><a href="#"> <?php echo $defaultEnterprises->category?></a></span>, <span> <?php echo $defaultEnterprises->location?></span></label>
                                            <a href="<?php echo base_url()?>index.php/Enterprise/unEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><button class="btn btn-danger btn-block">More details</button></a>
                                        </div>

                                    <?php }?>
                                </div>
                                <?php } else{?>
                                    <h5 class="#">Search Results for:  <span><strong style="color: red"><?php echo $_SESSION['product_name']?></strong></span></h5>
                                    <p>Total of <strong>"<?php echo $enterprises->num_rows() ?>"</strong> results found</p>
                                    <div class="row items">
                                        <div class="col-md-12" style="min-height: 100px">
                                            <p>No such item please make sure you type the spelling correctly</p>
                                        </div>
                                    </div>

                                    <div class="row items" style="margin-top: 10px">
                                        <div class="col-md-12" style="min-height: 150px">
                                            <p><strong>Suggested stores</strong></p>
                                            <?php foreach ($defaultSearch->result() as $defaultEnterprises){?>
                                                <div class="col-md-2 default">
                                                    <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><h6 style="color: cornflowerblue; padding: 5px"><strong><?php echo $defaultEnterprises->name?></strong></h6></a>
                                                    <a href="<?php echo base_url()?>index.php/Enterprise/customerEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><img src="<?php echo base_url()?>/Images/organizationImages/<?php echo $defaultEnterprises->image_url?>" width="100%" height="70"></a>
                                                    <label><strong>Category:</strong> <span><a href="#"> <?php echo $defaultEnterprises->category?></a></span>, <span> <?php echo $defaultEnterprises->location?></span></label>
                                                    <a href="<?php echo base_url()?>index.php/Enterprise/unEnterpriseDetails?ent=<?php echo $defaultEnterprises->enterprise_id?>"><button class="btn btn-danger btn-block">More details</button></a>
                                                </div>

                                            <?php }?>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            <?php } ?>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
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
<script src="<?php echo base_url()?>nice/assets/chart-master/chart.js"></script>
<script src="<?php echo base_url()?>nice/js/chartsjs-custom.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>nice/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="<?php echo base_url()?>nice/js/fullcalendar.min.js"></script>
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


