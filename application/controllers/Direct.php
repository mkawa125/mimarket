<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 05/02/2018
 * Time: 09:25
 */

class Direct extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //loading teh files
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('AdminModel');
    }

    public function register()
    {
        redirect('Authentication/Register');
    }
    public function salesCustomerDetails()
    {
        $this->load->view('order_pages/sales_customer_details');
    }

    public function login()
    {
        redirect('Authentication/userLogin');
    }

    public function dashboard()
    {
        $this->load->view('dashboard/index.php');
    }
    public function home(){
        redirect('Products/DefaultProducts');
    }
    public function enterprises(){
        $this->load->view('enterprises/all_enterprises.php');
    }
    public function individual(){
        $this->load->view('enterprises/individual_enterprises.php');
    }
    public function product(){
        $this->load->view('products/products.php');
    }
    public function newEnterprise(){

        $this->load->view('enterprises/newEnterprise.php');
    }
    public function UserSetting(){
        $this->load->model('AdminModel');
        $data['summary'] = $this->AdminModel->dashboardSummary();
        $data['allCategory'] = $this->AdminModel->getAllCategory();
        $data['allStore'] = $this->AdminModel->getAllStore();
        $data['newStore'] = $this->AdminModel->getNewStore();
        $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
        $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
        $data['allStoreDetails'] = $this->AdminModel->getAllStoreDetails();
        $data['newStoreDetails'] = $this->AdminModel->getNewStoreDetails();
        $data['verifiedStoreDetails'] = $this->AdminModel->getVerifiedStoreDetails();
        $data['suspendedStoreDetails'] = $this->AdminModel->getSuspendedStoreDetails();
        $this->load->view('user-pages/user-setting', $data);
    }
    public function userProfileSetting(){
        $this->load->model('EnterpriseModel');
        $data['totalOrders'] = $this->EnterpriseModel->totalOrders();
        $data['totalRequests'] = $this->EnterpriseModel->totalRequests();
        $data['outOfStockProducts'] = $this->EnterpriseModel->outOfStock();
        $data['countNewOrders'] = $this->EnterpriseModel->countStoreOrdersDefault();
        $this->load->view("user-pages/user_details_setting" , $data);

    }
    public function EditProfile(){
        if ($this->session->userdata('user_logged')){
            if (isset($_POST['saveChanges'])) {
                //setting validation rules
                $this->form_validation->set_rules('name', 'administrator name', 'required');
                $this->form_validation->set_rules('username', 'admin username', 'required');
                $this->form_validation->set_rules('email', 'admin name', 'required');
                $this->form_validation->set_rules('phone', 'phone number', 'required');
                $this->form_validation->set_rules('pass1', 'password', 'required');
                $this->form_validation->set_rules('pass2', 'password confirmation', 'required|matches[pass1]' );

                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('EnterpriseModel');
                    $data['edit'] = $this->EnterpriseModel->EditProfile();
                    //loading model for adding enterprise

                    $this->session->set_flashdata('success_msg', 'Your profile has been successfully updated');
                    redirect('Products/DefaultProducts');
                } else {
                    $this->session->set_flashdata('error_msg', 'Sorry.... failed to Update the profile, make sure you filled the form correctly and passwords must match');
                    redirect('Direct/UserProfileSetting');
                }
            }
        }
    }
    public function PrivacyTerms(){

        $this->load->view("user-pages/PrivacyTerms");

    }
    public function geoLocation()
    {
        //if latitude and longitude are submitted
        if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
            //send request and receive json data by latitude and longitude
            $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
            $json = @file_get_contents($url);
            $data = json_decode($json);
            $status = $data->status;

            //if request status is successful
            if($status == "OK"){
                //get address from json data
                $location = $data->results[0]->formatted_address;
            }else{
                $location =  '';
            }

            //return address to ajax
            echo $location;
        }
    }
}