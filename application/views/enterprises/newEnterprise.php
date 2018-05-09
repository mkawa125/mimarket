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
        }
        .row-enter{
            background-color: #F7D358;
            padding: 10px;
        }
        .add{
            padding: 10px;
            border-radius: 4px;
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
            <!--              search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--              search form end -->
        </div>

        <div class="top-nav notification-row">
            <!--             notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!--                 task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="blue">You have 6 pending letter</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Design PSD </div>
                                    <div class="percent">90%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Project 1
                                    </div>
                                    <div class="percent">30%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Digital Marketing</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Logo Designing</div>
                                    <div class="percent">78%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                        <span class="sr-only">78% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">50%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!--                 task notificatoin end -->
                <!--                 inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p class="blue">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                <span class="message">
                                        I really like this admin panel.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                <span class="message">
                                        Icon fonts are great.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!--                 inbox notificatoin end -->
                <!--                 alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p class="blue">You have 4 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                John location.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon_like"></i></span>
                                Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!--                 alert notification end-->
                <!--                 user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>nice/img/zai.jpg" width="40" >
                            </span>
                        <span class="username"><?php echo $_SESSION['name']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="eborder-top">
                            <a href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="icon_profile"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Authentication/logout"><i class="icon_key_alt"></i> Log Out</a>
                        </li>

                        <li>
                            <a href="documentation.html"><i class=""></i> Documentation</a>
                        </li>
                    </ul>
                </li>
                <!--                 user login dropdown end -->
            </ul>
            <!--             notificatoin dropdown end-->
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
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
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
            <div class="col-md-9 col-md-offset-1">
                <div class="row new">

                    <form action="<?php echo base_url()?>index.php/Enterprise/AddEnterprise" method="POST">
                        <div class="row row-enter" >
                            <div class="col-sm-9"> <h6 class=""><strong>Register new Enterprise</strong></h6></div>
                            <div class="col-sm-2"><button type="submit" name="add" class="btn btn-primary add" >Save Enterprise</button></div>
                        </div>
                        <ul class="nav nav-tabs" style="margin-top: 3px">
                            <li class="active"><a data-toggle="tab" href="#sectionA"><strong><b>General</b></strong></a></li>
                        </ul>

                        <div class="tab-content cont">

                            <?php $error_msg = $this->session->flashdata('error_msg');
                            if ($error_msg){?>
                                <div class="error"><i class="fa fa-warning"></i><?php echo $error_msg?></div>
                                <?php
                            }
                            ?>

                            <?php $error = form_error('name', '<p class="error">')?>
                            <?php echo $error?>

                            <div id="sectionA" class="tab-pane fade in active">

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
                                            <input class="form-control" style="color: orange" id="owner" name="owner" value="<?php echo $_SESSION['name']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="location"><strong>Location:</strong></label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <select class="form-control" id="location" name="location">
                                                <option value="Arusha">Arusha</option>
                                                <option value="dsm" selected>Dar es salaam</option>
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
                                        <?php $error = form_error('summernote', '<p class="error">')?>
                                        <?php echo $error?>
                                        <label for="description"><strong>Descriptions:</strong></label>
                                        <textarea class="form-control" rows="5" name="description" id="description" <?php echo $error? 'has error': '' ?>></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php $error = form_error('image', '<p class="error">')?>
                                        <?php echo $error?>
                                        <label for="image"><strong>Organizational Image:</strong></label>
                                        <div class="form-group input-group" <?php echo $error? 'has error': '' ?>>
                                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                            <input type="url" class="form-control" placeholder="Username or email" name="image" id="image" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </section>

    </section>
</div>
<!---->
<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!--<!------ Include the above in your HEAD tag ---------->-->
<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <input type="hidden" name="count" value="1" />-->
<!--        <div class="control-group" id="fields">-->
<!--            <label class="control-label" for="field1">Nice Multiple Form Fields</label>-->
<!--            <div class="controls" id="profs">-->
<!--                <form class="input-append">-->
<!--                    <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>-->
<!--                </form>-->
<!--                <br>-->
<!--                <small>Press + to add another form field :)</small>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</script>-->


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

