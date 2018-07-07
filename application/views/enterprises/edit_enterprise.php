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

    <link href="<?php echo base_url()?>nice/summernote/summernote.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/summernote/summernote-lite.css" rel="stylesheet">

    <!--custom style sheet-->
    <style>
        .dark-bg{
            background-color: whitesmoke;
        }
        .icon_menu{
            color: black;
        }
        .error{
            color: red;
            font-size: small;
        }
        .new{
            background-color: whitesmoke;
            padding: 20px;
            font-size: smaller;
        }
        .cont{
            background-color: white;
            padding: 20px;
        }
        .form-control{
            font-size: small;
        }
        .row-enter{
            padding-bottom: 10px;
        }
        .btn{
            border-radius: 0;
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

        <!--        logo start-->
        <a href="index.html" class="logo">MI<span class="lite">MARKET</span></a>
        <!--        logo end-->

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
            <div class="col-md-8 col-md-offset-2">
                <div class="row new" style="background-color: whitesmoke">
                    <div class="row row-enter" >
                        <div class="col-sm-9"> <h5 class="" style="color: cornflowerblue"><strong>Enterprise Settings</strong></h5></div>
                    </div>


                    <form id="enterprise" action="" style="border: 1px solid #D5D8DC">
                        <div class="tab-content cont">
                            <div id="sectionA" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="username"><strong>Username:</strong></label>
                                        <div class="form-group input-group form-inline">
                                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $_SESSION["username"]?>" id="username" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="owner"><strong>Name:</strong></label>
                                        <div class="form-group input-group orm-inline">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" style="color: orange" id="owner" value="<?php echo $_SESSION['full_name']?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="email" id="email"><strong>Email Address:</strong></label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input class="form-control" id="email" value="<?php echo $_SESSION["email"]?>" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="phone"><strong>Phone Number:</strong></label>
                                        <div class="form-group input-group form-horizontal">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input id="phone" type="text" style="color: red" class="form-control" value="<?php echo $_SESSION['phone']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <h5 style="margin: 15px"><strong>Change password:</strong></h5>
                                    <div class="col-sm-6">
                                        <label for="email" id="email" style="color: cornflowerblue"><strong>Enter Password:</strong></label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" id="email" placeholder="Enter password" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="phone" style="color: cornflowerblue"><strong>Confirm password:</strong></label>
                                        <div class="form-group input-group form-horizontal">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input id="phone" type="password" class="form-control" placeholder="Confirm password">
                                        </div>
                                    </div>
                                </div>

                                <label for="email" id="email"><strong>Change image:</strong></label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                    <input type="file" class="form-control" placeholder="Username or email" name="email" id="email" >
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-9"></div>
                                <div class="col-sm-3"><button type="submit" class="btn btn-primary" style="margin-top: 5px"><strong>Save Changes</strong></button> </div>
                            </div>
                    </form>


                </div>
        </section>

    </section>
</div>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
    });
</script>
</body>
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

<!-- custom script for this page-->

<script>
    $(document).ready(function(){
        var next = 1;
        $(".add-more").click(function(e){
            e.preventDefault();
            var addto = "#field" + next;
            var addRemove = "#field" + (next);
            next = next + 1;
            var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
            var newInput = $(newIn);
            var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
            var removeButton = $(removeBtn);
            $(addto).after(newInput);
            $(addRemove).after(removeButton);
            $("#field" + next).attr('data-source',$(addto).attr('data-source'));
            $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
        });



    });

</script>


</html>

