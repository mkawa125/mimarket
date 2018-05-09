<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 04/02/2018
 * Time: 18:30
 */

class SendEmail extends CI_Controller
{

    public function index()
    {
    }

    function send_confirmation()
    {

        $config = array(
            'protocol' => 'smtp',
            'smtp-host' => 'ssl://smtp.gmail.com',
            'smpt_port' => '25',
            'smtp_user' => 'dahabusaidi@gmail.com',
            'smtp_pass' => 'kakakuona',
            'emailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => true
        );
        $this->load->library('email', $config);
        $this->email->from('dahabusaidi@gmail.com', 'Test email');
        $this->email->subject("mimarket");


        $message= /*-----------email body starts-----------*/
            'Thanks for signing up, ' . '!
      
        Your account has been created. 
        Here are your login details.
        -------------------------------------------------
        links for confirmation:
        -------------------------------------------------
                        
        Please click this link to activate your account:
            
        ' . base_url() . 'index.php/user_registration/verify?';
        /*-----------email body ends-----------*/



        $this->email->to('dahabusaidi@gmail.com');
        $this->email->message($message);
        $this->email->send();

        //loading the login view
        $this->load->view('user-pages/login.php', 'refresh');
    }

    function verify()
    {
        $result = $this->Auth_model->get_hash_value($_GET['email']); //get the hash value which belongs to given email from database
        if ($result) {
            if ($result['hash'] == $_GET['hash']) {  //check whether the input hash value matches the hash value retrieved from the database
                $this->Auth_model->verify_user($_GET['email']); //update the status of the user as verified

                //redirecting user after completing verification
                redirect();
            }
        }
    }
}