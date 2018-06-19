<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 05/02/2018
 * Time: 09:16
 */
?>
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
<!--    inner stylesheet-->

    <style>
        .login-panel{
            margin-top: 20px;
        }
        .error{
            color: red;
            font-size: smaller;
        }
    </style>

</head>

<body>

<?php
require 'validation.php';
?>

<div class="container-fluid" style="background-color: white">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
            <div class="login-panel panel-default" style="background-color: whitesmoke">
                <div class="panel-heading" style="text-align: center">
                    <h3 style="color: #00a0df">Mimarket signup</h3>

                </div>
                <div class="panel-body">

                    <p class="paragraph re-paragraph">Already have an account?
                        <a href="<?php echo base_url(); ?>index.php/Direct/login">Login</a></p>
                  <form role="form" name="register" method="post" action="">
                        <fieldset>

                            <span class="error"><?php echo $nameErr;?></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input class="form-control required" placeholder="Enter your name" name="name" id="name"
                                       type="text" autofocus title="Enter your name">

                            </div>

                            <span class="error"><?php echo $usernameErr;?></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control required" placeholder="Enter your username" name="username"
                                       type="text" autofocus title="Please enter your username"  id="uname">
                            </div>

                            <span class="error"><?php echo $emailErr;?></span>
                               <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="E-mail" id="email" name="email"
                                       type="email" autofocus title="Email address">
                            </div>

                            <span class="error"><?php echo $phoneErr;?></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                <input class="form-control" placeholder="Phone number" name="phone" id="phone"
                                       type="text" autofocus title="Phone number is compasury">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <label for="location"></label>
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

                            <span class="error"><?php echo $pass1Err;?></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" placeholder="Password" name="pass1"
                                       type="password" autofocus title="Enter password">
                            </div>

                            <span class="error"><?php echo $pass2Err;?></span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" placeholder="Confirm password" name="pass2"
                                       type="password" title="Re enter password" >
                            </div>
<!--                             Change this to a button or input when using this as a form -->
                            <button class="btn btn-danger btn-block" name="register" type="submit" style="border-radius: 0">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <p class="paragraph">By signup means that you agree with our <a href="#">Terms of services</a> of mimarket</p>
        </div>
    </div>
</div>
</body>
<script type="javascript" src="<?php echo base_url()?>js/form-validation-script.js"></script>

</html>

