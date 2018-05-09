<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/18/2018
 * Time: 9:58 AM
 */
class Enterprise extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        //loading the files

    }

    public function index()
    {
        $this->load->helper(array('form','url'));

        $this->load->model('AuthModel');

        $this->load->library('session');

        $this->load->view('enterprises/newEnterprise.php');

        $this->load->database();

        $this->load->model('EnterpriseModel');
    }


    public function AddEnterprise(){
        if (isset($_POST['add'])){

        $this->form_validation->set_rules('name', 'Enterprise name', 'required');

        $this->form_validation->set_rules('image', 'image url', 'required');

        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == true){
            $data = array(
                'name' => $_POST['name'],

                'owner' => $_SESSION['name'],

                'description' => $_POST['description'],

                'location' => $_POST['location'],

                'category' => $_POST['category'],

                'phone' => $_SESSION['phone'],

                'image_url' => $_POST['image'],

                'user_id' => $_SESSION['user_id'],

                'register_date' => date('Y-m-d H:i:s'),
            );

            //loading model for adding enterprise

            $this->db->insert("enterprises", $data);

            $this->session->set_flashdata('success_msg', 'Enterprise successfully added');

            redirect('Enterprise/getEnterprises');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Error form validation does not run');

            redirect('Direct/newEnterprise');
        }
        }
    }
    public function getEnterprises(){

        $this->load->model('EnterpriseModel');

        $data['enterprises'] = $this->EnterpriseModel->DisplayEnterprises();

        $this->load->view('enterprises/individual_enterprises', $data);
    }
}

