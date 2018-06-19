<?php

/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 6/17/2018
 * Time: 1:11 AM
 */
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->helper(array('form','url', 'file'));
        $this->load->library('session','form_validation');
        $this->load->view('enterprises/newEnterprise.php');
        $this->load->model('EnterpriseModel');
    }
    public function AddProducts(){
        if (isset($_POST['saveProduct'])){
            //Declaring variables for uploading images
            $this->load->library('upload');
            $config['upload_path'] = './Images/productImages';
            $config['allowed_types'] = 'gif|jpg|png';
            $image_name = 'product_' . time();
            $config['file_name'] = $image_name;

            //setting validation rules
            $this->form_validation->set_rules('product_name', 'product name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('product_price', 'Product price', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');

            $this->upload->initialize($config);
            if ($_FILES['product_image']['name']) {
                $field_name = 'product_image';
                if ($this->form_validation->run() == TRUE AND $this->upload->do_upload($field_name)) {
                    $product_image = $this->upload->data();
                    $data = array(
                        'productName' => $_POST['product_name'],
                        'product_details' => $_POST['description'],
                        'quantity' => $_POST['quantity'],
                        'category' => $_POST['category'],
                        'product_price' => $_POST['product_price'],
                        'enterprise_id' => $_SESSION['enterprise'],
                        'product_image' => $product_image['file_name'],
                        'product_status' => 1,
                        'date_added' => date('Y-m-d H:i:s'),
                    );

                    //loading model for adding enterprise

                    $this->db->insert("ms_products", $data);
                    $this->session->set_flashdata('success_msg', 'Your product successfully added to the store');
                    redirect('Enterprise/ViewEnterpriseProducts');
                } else {
                    $this->session->set_flashdata('error_msg', 'failed to add product, make sure you filled the form correctly');
                    redirect('Enterprise/ViewEnterpriseDetails');
                }
            }
            $this->load->view('enterprises/newEnterprise');
        }
    }
    public function DeleteProduct()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['product']= $_GET['prod'];
        $this->EnterpriseModel->DeleteProduct();
        redirect('Enterprise/ViewEnterpriseProducts');
    }
    public function DefaultProducts()
    {
        $this->load->model('EnterpriseModel');
        $data['products'] = $this->EnterpriseModel->DefaultProducts();
        $data['enterprises'] = $this->EnterpriseModel->DefaultEnterprises();
        $this->load->view('dashboard/home', $data);
    }
    public function OrderProduct()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['enterprise'] = $_GET['ent'];
        $data['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
        $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
        $this->load->view('order_pages/make_order', $data);
    }


}