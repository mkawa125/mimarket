<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile sms platform</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>mySheet/sheet.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--fonts icon-->
    <link href="<?php echo base_url()?>nice/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />

<style>
.btn-lg{
    border-radius: 0;
}
    .error{
        color: red;
        font-size: smaller;
    }
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url()?>index.php/Authentication/login" method="post" name="login">
                        <fieldset>

                            <?php $error_msg = $this->session->flashdata('error_msg');
                            if ($error_msg){?>
                            <div class="error"><?php echo $error_msg?></div>
                            <?php
                            }
                            ?>

                            <?php $error = form_error('email', '<p class="error">')?>
                            <?php echo $error?>
                            <label for="email" id="email">Email:</label>
                            <div class="form-group input-group" <?php echo $error? 'has error': '' ?>>
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username or email" name="email" id="email" >
                            </div>

                            <?php $error = form_error('pass1', '<p class="error">')?>
                            <?php echo $error?>
                            <label for="pass1" id="pass1">Password:</label>
                            <div class="form-group input-group" <?php echo $error? 'has error': '' ?>>
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" placeholder="Password" id="pass1" name="pass1" type="password" >
                            </div>


                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-key"></i> Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <p class="paragraph">Not registered ?
                <a href="<?php echo base_url()?>index.php/Direct/register"><strong>Click here to register</strong></a> </p>
        </div>
    </div>
</div>
</body>
</html>
