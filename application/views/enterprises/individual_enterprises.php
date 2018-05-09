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

    <!--custom style sheet-->
    <style>
        .dark-bg{
            background-color: whitesmoke;
        }
        .icon_menu{
            color: black;
        }
        .edit{
            background-color: orange;
            border-radius: 4px;
            padding: 5px;
            margin: 5px;
        }
        .delete{
            background-color: firebrick;
            border-radius: 4px;
            padding: 5px;
            margin: 5px;
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
                            <a  href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="icon_profile"></i> My Profile</a>
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
                <div class="col-lg-12">
                    <h5 class="page-header"><i class="fa fa-home"></i> Dashboard</h5>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">Welcome <a href="#"><?php echo $_SESSION['name']?></a> to online marketing system</header>
                        <div class="panel-body">
<!--                             /.row -->
                            <div class="row">
                                <div class="col-lg-10">
                                    <?php $success_msg = $this->session->flashdata('$success_msg');
                                    if ($success_msg){?>
                                        <div class="error"><i class="fa fa-success"></i><?php echo $success_msg?></div>
                                        <?php
                                    }
                                    ?>
<!--                                    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Book</button>-->

                                </div>
                                <div class="col-lg-2">
                                    <a href="<?php echo base_url()?>index.php/Direct/newEnterprise">
                                        <button class="btn btn-success"><i class="fa fa-user-plus">Add enterprise</i></button>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-sm-12" style="margin-top: 5px">

                                <div class="col-sm-12">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Enterprise Name</th>
                                            <th>Location</th>
                                            <th>Date Registered</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($enterprises->result() as $row){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $row->enterprise_id; ?></th>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->location; ?></td>
                                                <td style="color: cornflowerblue"><?php echo $row->register_date ?></td>
                                                <td><?php echo $row->description ?></td>
                                                <td>
                                                    <a onclick="add_book()"><span class="glyphicon glyphicon-edit" style="color: orange"  aria-hidden="true"></span></a>
                                                    <a href="delete/<?php echo $row->enterprise_id; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row->enterprise_id; ?>">Delete</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal<?php echo $row->enterprise_id; ?>" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Delete File</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <a href="delete/<?php echo $row->enterprise_id; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
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


                                <script type="text/javascript">
                                    $(document).ready( function () {
                                        $('#table_id').DataTable();
                                    } );
                                    var save_method; //for save method string
                                    var table;


                                    function add_book()
                                    {
                                        save_method = 'add';
                                        $('#form')[0].reset(); // reset form on modals
                                        $('#modal_form').modal('show'); // show bootstrap modal
                                        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
                                    }

                                    function edit_book(id)
                                    {
                                        save_method = 'update';
                                        $('#form')[0].reset(); // reset form on modals

                                        //Ajax Load data from ajax
                                        $.ajax({
                                            url : "<?php echo site_url('index.php/book/ajax_edit/')?>/" + id,
                                            type: "GET",
                                            dataType: "JSON",
                                            success: function(data)
                                            {

                                                $('[name="book_id"]').val(data.book_id);
                                                $('[name="book_isbn"]').val(data.book_isbn);
                                                $('[name="book_title"]').val(data.book_title);
                                                $('[name="book_author"]').val(data.book_author);
                                                $('[name="book_category"]').val(data.book_category);


                                                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                                                $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

                                            },
                                            error: function (jqXHR, textStatus, errorThrown)
                                            {
                                                alert('Error get data from ajax');
                                            }
                                        });
                                    }



                                    function save()
                                    {
                                        var url;
                                        if(save_method == 'add')
                                        {
                                            url = "<?php echo site_url('index.php/book/book_add')?>";
                                        }
                                        else
                                        {
                                            url = "<?php echo site_url('index.php/book/book_update')?>";
                                        }

                                        // ajax adding data to database
                                        $.ajax({
                                            url : url,
                                            type: "POST",
                                            data: $('#form').serialize(),
                                            dataType: "JSON",
                                            success: function(data)
                                            {
                                                //if success close modal and reload ajax table
                                                $('#modal_form').modal('hide');
                                                location.reload();// for reload a page
                                            },
                                            error: function (jqXHR, textStatus, errorThrown)
                                            {
                                                alert('Error adding / update data');
                                            }
                                        });
                                    }

                                    function delete_book(id)
                                    {
                                        if(confirm('Are you sure delete this data?'))
                                        {
                                            // ajax delete data from database
                                            $.ajax({
                                                url : "<?php echo site_url('index.php/book/book_delete')?>/"+id,
                                                type: "POST",
                                                dataType: "JSON",
                                                success: function(data)
                                                {

                                                    location.reload();
                                                },
                                                error: function (jqXHR, textStatus, errorThrown)
                                                {
                                                    alert('Error deleting data');
                                                }
                                            });

                                        }
                                    }

                                </script>

                                <!-- Bootstrap modal -->
                                <div class="modal fade" id="modal_form" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Edit</h4>
                                            </div>
                                            <div class="modal-body form">
                                                <form action="#" id="form" class="form-horizontal">
                                                    <input type="hidden" value="<?php echo $row->name; ?>" name="book_id"/>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Name</label>
                                                            <div class="col-md-9">
                                                                <input name="book_isbn" placeholder="Benterprise name" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="location">location</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" id="location">
                                                                    <option value="dar">Dar es salaam</option>
                                                                    <option value="dar">Dar es salaam</option>
                                                                    <option value="dar">Dar es salaam</option>
                                                                    <option value="dar">Dar es salaam</option>
                                                                    <option value="dar">Dar es salaam</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Owner</label>
                                                            <div class="col-md-9">
                                                                <input name="book_author" placeholder="owner" class="form-control" type="text">

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Category</label>
                                                            <div class="col-md-9">
                                                                <input name="book_category" placeholder="Book Category" class="form-control" type="text">

                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- End Bootstrap modal -->

                            </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </section>
</div>
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

<!-- custom script for this page--></html>

