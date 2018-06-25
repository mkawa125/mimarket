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
        $this->load->helper(array('form','url', 'file'));
        $this->load->model('AuthModel');
        $this->load->library('session','form_validation');
        $this->load->view('enterprises/newEnterprise.php');
        $this->load->database();
        $this->load->model('EnterpriseModel');
    }

    public function AddEnterprise()
    {
        if (isset($_POST['add'])) {
            //Declaring variables for uploading images
            $this->load->library('upload');
            $config['upload_path'] = './Images/organizationImages';
            $config['allowed_types'] = 'gif|jpg|png';
            $image_name = 'store_' . time();
            $config['file_name'] = $image_name;

            //setting validation rules
            $this->form_validation->set_rules('name', 'Enterprise name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            $this->upload->initialize($config);
            if ($_FILES['image']['name']) {
                $field_name = 'image';
                if ($this->form_validation->run() == TRUE AND $this->upload->do_upload($field_name)) {
                    $store_image = $this->upload->data();
                    $data = array(
                        'name' => $_POST['name'],
                        'description' => $_POST['description'],
                        'location' => $_POST['location'],
                        'category' => $_POST['category'],
                        'phone' => $_SESSION['phone'],
                        'image_url' => $store_image['file_name'],
                        'user_id' => $_SESSION['user_id'],
                        'enterprise_orders' => 0,
                        'register_date' => date('Y-m-d H:i:s'),
                    );

                    //loading model for adding enterprise

                    $this->db->insert("enterprises", $data);
                    $this->session->set_flashdata('success_msg', 'Enterprise successfully added');
                    redirect('Enterprise/getEnterprises');
                } else {
                    $this->session->set_flashdata('error_msg', 'Sorry.... failed to save enterprise, make sure you filled the form correctly');
                    redirect('Direct/newEnterprise');
                }
            }
            $this->load->view('enterprises/newEnterprise');
        }
    }
    public function getEnterprises()
    {
        $this->load->model('EnterpriseModel');
        $data['enterprises'] = $this->EnterpriseModel->DisplayEnterprises();
        $this->load->view('enterprises/individual_enterprises', $data);
    }

    public function DeleteEnterprise()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['enterprise']= $_GET['ent'];
        $this->EnterpriseModel->DeleteEnterprise();
        redirect('Enterprise/getEnterprises');
    }

    public function ViewEnterpriseDetails()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['enterprise'] = $_GET['ent'];
        $data['SingleEnterprise'] = $this->EnterpriseModel->ViewEnterpriseDetails();
        $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
        $this->load->view('enterprises/enterprise_details', $data);
    }

    public function ViewEnterpriseProducts()
    {
        $this->load->model('EnterpriseModel');
        $data['SingleEnterprise'] = $this->EnterpriseModel->ViewEnterpriseDetails();
        $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
        $this->load->view('enterprises/enterprise_details', $data);
    }
    public function customerEnterpriseDetails()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['enterprise'] = $_GET['ent'];
        $enterprise['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
        $enterprise['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
        $this->db->select('*');
        $this->db->from('ms_enterprise_views');
        $this->db->where(array(
            'user_id' => $_SESSION['user_id'],
            'enterprise_id' => $_SESSION['enterprise'],
        ));
        $query = $this->db->get();
        $user_view = $query->row();
        if (isset($user_view->user_id)){
            $this->load->view('enterprises/user_enterprise_view', $enterprise);
        }else{
            $data = array(
                'enterprise_id' => $_SESSION['enterprise'],
                'user_id' => $_SESSION['user_id'],
            );
            $this->db->insert('ms_enterprise_views', $data);
            $this->load->view('enterprises/user_enterprise_view', $enterprise);
        }
    }

}

