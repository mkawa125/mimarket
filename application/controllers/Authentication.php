<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 05/02/2018
 * Time: 08:42
 */
class Authentication extends CI_Controller
{

    //index function for loading the first page in application
    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('session');

        $this->load->model('AuthModel');

        $this->load->view('dashboard/index.php');


    }
    public function login()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('pass1', 'password', 'required');

        //declaring variables

        if ($this->form_validation->run() == TRUE) {
            //check user to the database
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
                $_SESSION['full_name'] = $user->full_name;
                $_SESSION['username'] = $user->username;
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['order_id'] = $user->order_id;
                $_SESSION['phone'] = $user->phone;
                $_SESSION['pass1'] = md5($user->pass1);
                $_SESSION['pass2'] = md5($user->pass2);


                //redirect user
                $this->session->set_flashdata('success_msg', 'Welcome Mr:');
                redirect("Products/DefaultProducts");


            } else {
                $this->session->set_flashdata('error_msg', 'Either password or email is incorrect');
                redirect("Direct/login");
            }
        }

    $this->load->view('user-pages/login.php');
 }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Direct/login', 'refresh');
    }

    public function AddEnterprise(){

        $this->form_validation->set_rules('name', 'Company name', 'required');

        $this->form_validation->set_rules('image', 'Company image', 'required');

        $this->form_validation->set_rules('desc', 'Descriptions', 'required');

        if ($this->form_validation->run() == TRUE){

            $data = array(
                'full_name' => $_POST['name'],

                'location' => $_POST['location'],

                'image_url' => $_POST['image'],

                'description' => $_POST['desc'],

                'owner' => $_SESSION['user_id'],

                'category' => $_POST['type'],

            );

            //Add enterprise to the database
            $this->AuthModel->AddEnterprise($data);

            $this->session->set_flashdata('success_msg', 'Company registered successfully.');

            redirect('Direct/individual');
        }
        else{
            $this->session->set_flashdata('error_msg', 'The company has not been registered');
            redirect('Direct/newEnterprise');
        }
    }
}
