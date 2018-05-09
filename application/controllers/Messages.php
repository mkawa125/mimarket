<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/18/2018
 * Time: 4:04 PM
 */
class messages extends CI_Controller{

    public function index(){
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->view('messages/all-messages.php');
    }
    public function validate(){

        if (isset($_POST['submit'])){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('pass', 'password', 'required');

            if ($this->form_validation->run()==true){
                echo 'validation success';
            }
            else{
                echo 'error';
                $this->load->view('messages/all-messages.php');
            }
        }

    }
}