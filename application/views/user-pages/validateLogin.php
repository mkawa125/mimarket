<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/5/2018
 * Time: 11:00 PM
 */

$error = $emailErr = $pass1Err = '';

if (isset($_POST['login'])){

    //email or username validation
    if (empty($_POST['email'])){
        $emailErr = 'Please enter a username or email';
        $error = true;
    }

    //password field validation
    if (empty($_POST['pass1'])){
        $pass1Err = 'Password field can not be empty';
        $error = true;
    }

    if ($error = true){
        //fdsgdststwt
    }
    else{
        $this->db->select('*');
        $this->db->from('user-registration');
        $this->db->where(
            array(
                'email' => $_POST['email'],
                'pass1' => md5($_POST['pass1']),
            ));

        $query = $this->db->get();

        $user = $query->row();

        //if user exist
        if ($user->email) {
            $this->session->set_flashdata('success', 'you have logged in');

            //set session variables
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['email'] = $user->email;
            $_SESSION['name'] = $user->name;
            $_SESSION['username'] = $user->usename;
            $_SESSION['user_id'] = $user->user_id;


            //redirect user
            redirect("Direct/home");


        } else {
            $this->session->set_flashdata('error_msg', 'Either password or email is incorrect');
            redirect("Direct/register");
        }
    }
}