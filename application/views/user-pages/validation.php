<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/5/2018
 * Time: 12:58 PM
 */

//define the variables
$name = $username =$email = $phone = $pass1 =$pass2 = "";
$nameErr = $usernameErr = $emailErr = $phoneErr = $pass1Err = $pass2Err = $error = "";

if (isset($_POST['register'])) {

    //customers name validation
    if (empty($_POST['name'])) {
        $nameErr = '* The name field is required';
        $error = true;

    } else {
        $name = test_input($_POST['name']);
        //check if name contains only letter and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "* Sorry only letters and whitespace allowed";
            $error = true;

        }
    }


    //username validation
    if (empty($_POST['username'])) {
        $usernameErr = '* Please fill your username';
        $error = true;

    } else {
        $username = test_input($_POST['username']);
        //check if name contains only letter and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $username)) {
            $usernameErr = "* Sorry only letters and whitespace allowed";
            $error = true;

        }
    }

    //phone number validation
    if (empty($_POST['phone'])) {
        $phoneErr = '* Please add your phone number';
        $error = true;
    } else {
        $phone = test_input($_POST['phone']);
        //check if name contains only letter and whitespace
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "* Please fill the correct phone number";
            $error = true;
        }
    }

    //validating password
    if (empty($_POST['pass1'])){
        $pass1 = "* password field is required";
        $error = true;
    }
    else{
        $pass1 = test_input($_POST["pass1"]);
        if (!preg_match("#[0-9]+#", $pass1)){
            $pass1Err = "Your Password Must Contain At Least 1 Number!";
            $error = true;
        }
        else{
            $pass1 = test_input($_POST['pass1']);
            if (!preg_match("#[A-Z]+#", $pass1)){
                $pass1Err = "Your Password Must Contain At Least 1 Capital Letter!";
                $error = true;
            }
            else{
                $pass1 = test_input($_POST['pass1']);
                if (!preg_match("#[a-z]+#", $pass1)){
                    $pass1Err = "Your Password Must Contain At Least 1 Lowercase Letter!";
                    $error = true;
                }
            }
        }
    }

        //password confirmation
        if (empty($_POST['pass2'])){
            $pass2Err = '* Confirm your password';
            $error = true;
        }else{
            $pass2 = test_input($_POST['pass2']);
            //check if name contains only letter and whitespace
            if ($_POST['pass1'] != $_POST['pass2']){
                $pass2Err = "* Password does not match";
                $error = true;
            }
        }

        //email validation
        if (empty($_POST["email"])) {
            $emailErr = "* Email field is required";
            $error = true;
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "* Invalid email format";
                $error = true;
            }
        }


        if ($error === true) {

        } else {
            $data = array(
                'full_name' => $_POST['name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'pass1' => md5($_POST['pass1']),
                'pass2' => md5($_POST['pass2']),
                'location' => $_POST['location'],
                'user_register_date' => date('Y-m-d H:i:s'),
            );
            //email existence check
            $this->db->select('*');
            $this->db->from('user-registration');
            $this->db->where('email', $email);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $emailErr = "user with this email already exist";
            } else {
                $this->db->insert('user-registration', $data);
                redirect('SendEmail/send_confirmation');
                redirect("Direct/login");

            }
        }
    }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


