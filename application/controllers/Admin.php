<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/5/2018
 * Time: 9:40 AM
 */

Class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->helper(array('form','url', 'file'));
        $this->load->library('session','form_validation');
        $this->load->view('admin_pages/login');
        $this->load->model('EnterpriseModel');
        $this->load->helper('download');
        $this->load->library('email');
        $this->load->helper('download');
    }
    public function login()
    {

        $this->form_validation->set_rules('email', 'email or username', 'required');
        $this->form_validation->set_rules('pass1', 'password', 'required');

        //declaring variables

        if ($this->form_validation->run() == TRUE) {
            $password = md5($_POST['pass1']);
            $username = $_POST['email'];
            //check user to the database
            $this->db->select('*');
            $this->db->from('ms_administrators');
            $this->db->where('ms_administrators.admin_password', $password);
            $this->db->where("(ms_administrators.admin_email = '$username' OR ms_administrators.admin_username = '$username')");
            $query = $this->db->get();
            $user = $query->row();

            //if user exist
            if ($user->admin_username) {
                //set session variables
                $_SESSION['admin_logged'] = TRUE;
                $_SESSION['admin_email'] = $user->admin_email;
                $_SESSION['admin_name'] = $user->admin_name;
                $_SESSION['admin_username'] = $user->admin_username;
                $_SESSION['admin_id'] = $user->admin_id;
                $_SESSION['admin_phone'] = $user->admin_phone;


                //redirect user
                $this->session->set_flashdata('success_msg', 'You have logged in as Admin');
                redirect("Admin/home");


            } else {
                $this->session->set_flashdata('error_msg', 'Either password or email is incorrect');
                redirect("Admin/login");
            }
        }

        $this->load->view('admin_pages/login.php');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/login', 'refresh');
    }
    public function home()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['defaultSearch'] = $this->AdminModel->defaultSearch();
            $data['products'] = $this->AdminModel->defaultProducts();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $this->load->view('admin_pages/home', $data);
        }else{
            redirect('Admin/login');
        }

    }
    public function EnterprisesView()
    {
        if ($this->session->userdata('admin_logged')){
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
            $this->load->view('admin_pages/admin_store_view', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getNewStoreDetails()
    {
        if ($this->session->userdata('admin_logged')){
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
            $this->load->view('admin_pages/new_stores', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getVerifiedStoreDetails()
    {
        if ($this->session->userdata('admin_logged')){
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
            $this->load->view('admin_pages/verified_stores', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getSuspendedStoreDetails()
    {
        if ($this->session->userdata('admin_logged')){
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
            $this->load->view('admin_pages/suspended_store', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getDeniedStores()
    {
        if ($this->session->userdata('admin_logged')){
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
            $data['deniedStore'] = $this->AdminModel->getDeniedStore();
            $this->load->view('admin_pages/denied_store', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function verifyStore()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['singleStoreDetails'] = $this->AdminModel->getSingleStoreDetails();
            $data['verify'] = $this->AdminModel->verifyStore();
            $this->load->library('email');
            $this->email->from('dahabusaidi@gmail.com', 'Mimarket'); // change it to yours
            $this->email->to('dahabusaidi@gmail.com');// change it to yours
            $this->email->subject('Store Verification');
            $message = '<div class="col-sm-8" style="border: 1px solid #D5D8DC; padding: 15px"> 
                        <h4 style="background: darkslategrey; color: white; padding: 10px">Mimarket store verification</h4>
                        <label>Dear <strong style="text-transform: uppercase">: '. $data['singleStoreDetails']->full_name .'</strong></label><br>
                        <p>Your store registration has been completely, now you can enjoy to promote your products via mimarket online marketing system to more than 2.5K customers in tanzania 
                        </p>
                        <p>for more information please contact us on</p><br>
                        <label><strong>phone: </strong> 0717-495-198</label><br>
                        <label><strong>Email: </strong> dahabusaidi@gmail.com</label><br>
                        
                        </div>';
            $this->email->message($message);
            $this->email->set_newline("\r\n");
            //Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "store has been successfully verified and email sent to store owner.");
                redirect('Admin/getVerifiedStoreDetails');

            } else{
                $this->session->set_flashdata("email_not_sent", "A store has been suspended but email not sent to user.");
            }   redirect('Admin/getVerifiedStoreDetails');
        }
    }
    public function denyRegistration()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['singleStoreDetails'] = $this->AdminModel->getSingleStoreDetails();
            $data['verify'] = $this->AdminModel->denyRegistration();
            $this->load->library('email');
            $this->email->from('dahabusaidi@gmail.com', 'Mimarket'); // change it to yours
            $this->email->to('dahabusaidi@gmail.com');// change it to yours
            $this->email->subject('Store registration details');
            $message = '<div class="col-sm-8" style="border: 1px solid #D5D8DC; padding: 15px"> 
                        <h4 style="background: red; color: white; padding: 10px">Mimarket store denying of '. $data['singleStoreDetails']->name .' registration</h4>
                        <label>Dear <strong style="text-transform: uppercase">: '. $data['singleStoreDetails']->full_name .'</strong></label><br>
                        <p>This is to notify that the registration of '. $data['singleStoreDetails']->name .' has been Denied, This is because your documents are not enough to satisfy us to register your store
                        </p>
                        <p>for more information please contact us on</p><br>
                        <label><strong>phone: </strong> 0717-495-198</label><br>
                        <label><strong>Email: </strong> dahabusaidi@gmail.com</label><br>
                        
                        </div>';
            $this->email->message($message);
            $this->email->set_newline("\r\n");
            //Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "store registration has successfully denied.");
                redirect('Admin/getDeniedStores');

            } else{
                $this->session->set_flashdata("email_not_sent", "A store has been suspended but email not sent to user.");
            }   redirect('Admin/getDeniedStores');
        }
    }
    public function suspendStore()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['singleStoreDetails'] = $this->AdminModel->getSingleStoreDetails();
            $data['suspend'] = $this->AdminModel->suspendStore();
            $this->load->library('email');
            $this->email->from('dahabusaidi@gmail.com', 'Mimarket'); // change it to yours
            $this->email->to($data['singleStoreDetails']->email);// change it to yours
            $this->email->subject('Store suspension');
            $message = '<div class="col-sm-8" style="border: 1px solid #D5D8DC; padding: 15px"> 
                        <h4 style="background: chocolate; color: white; padding: 10px">Mimarket suspension of '. $data['singleStoreDetails']->name .'</h4>
                        <label>Dear <strong style="text-transform: uppercase">: '. $data['singleStoreDetails']->full_name .'</strong></label><br>
                        <p>This is to notify that your store '. $data['singleStoreDetails']->name .' has been suspended This is because either because of inability to deliver the orders to customers or absence of products to your store
                        </p>
                        <p>for more information please contact us on</p><br>
                        <label><strong>phone: </strong> 0717-495-198</label><br>
                        <label><strong>Email: </strong> dahabusaidi@gmail.com</label><br>
                        
                        </div>';
            $this->email->message($message);
            $this->email->set_newline("\r\n");
            //Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "store registration has successfully denied.");
                redirect('Admin/EnterprisesView');

            } else{
                $this->session->set_flashdata("email_not_sent", "A store has been suspended but email not sent to user.");
                redirect('Admin/EnterprisesView');
            }

        }
    }
    public function unSuspendStore()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['suspend'] = $this->AdminModel->unSuspendStore();
            redirect('Admin/sendUnSuspensionEmail');
        }
    }
    public function sendUnSuspensionEmail(){
        //Load email library
        $this->load->library('email');
        $this->email->from('dahabusaidi@gmail.com', 'Mimarket'); // change it to yours
        $this->email->to('dahabusaidi@gmail.com');// change it to yours
        $this->email->subject('Store Activation');
        $this->email->message('Your store has been un suspended Now you can manage and promote your products with mimarket');
        $this->email->set_newline("\r\n");
        //Send mail
        if ($this->email->send()) {
            $this->session->set_flashdata("email_sent", "Store suspended and Email sent successfully.");
            redirect('Admin/EnterprisesView');

        } else{
            $this->session->set_flashdata("email_not_sent", "A store has been suspended but email not sent to user.");
        }
    }
    public function deleteStore()
    {
        if ($this->session->userdata('admin_logged')){
            $_SESSION['enterprise'] = $_GET['ent'];
            $this->load->model('AdminModel');
            $this->AdminModel->deleteStore();
            redirect('Admin/EnterprisesView');
        }

    }
    public function StoreDetails()
    {
        if ($this->session->userdata('admin_logged')){
            $_SESSION['enterprise'] = $_GET['ent'];
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['singleStoreDetails'] = $this->AdminModel->getSingleStoreDetails();
            $data['newStoreDetails'] = $this->AdminModel->getNewStoreDetails();
            $data['verifiedStoreDetails'] = $this->AdminModel->getVerifiedStoreDetails();
            $data['suspendedStoreDetails'] = $this->AdminModel->getSuspendedStoreDetails();
            $data['storeProducts'] = $this->AdminModel->getStoreProducts();
            $this->load->view('admin_pages/admin_store_details', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getAllCustomers()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['customers'] = $this->AdminModel->getAllCustomers();
            $this->load->view('admin_pages/customer_table', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getCustomerDetails()
    {
        if ($this->session->userdata('admin_logged')){
            $_SESSION['customer'] = $_GET['u'];
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['customerDetails'] = $this->AdminModel->getCustomerDetails();
            $this->load->view('admin_pages/admin_customer_details', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function getAllAdministrators()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['admins'] = $this->AdminModel->getAllAdministrators();
            $this->load->view('admin_pages/administrators', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function addAdministrator()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('AdminModel');
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['admins'] = $this->AdminModel->getAllAdministrators();
            $this->load->view('admin_pages/new_administrator', $data);
        }else{
            redirect('Admin/login');
        }
    }
    public function DownloadStoreDocument()
    {
        $this->load->helper('download');
        $fileName = $_SESSION['file_name'];
        if ($fileName) {
            $file = realpath ( "pdf_documents/enterprise_documents/" ) . "\\" . $fileName;
            if (file_exists ( $file )) {
                $data = file_get_contents ( $file );
                force_download( $fileName, $data );
            } else {
                // Redirect to base url
                redirect ( base_url () );
            }
        }
        $this->session->destroy();
    }

    public function saveAdministrator()
    {
        if ($this->session->userdata('admin_logged')){
            if (isset($_POST['save_admin'])) {
                //setting validation rules
                $this->form_validation->set_rules('name', 'administrator name', 'required');
                $this->form_validation->set_rules('username', 'admin username', 'required');
                $this->form_validation->set_rules('email', 'admin name', 'required');
                $this->form_validation->set_rules('phone', 'phone number', 'required');
                $this->form_validation->set_rules('pass1', 'password', 'required');
                $this->form_validation->set_rules('pass2', 'password confirmation', 'required|matches[pass1]' );

                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'admin_name' => $_POST['name'],
                        'admin_username' => $_POST['username'],
                        'admin_email' => $_POST['email'],
                        'admin_phone' => $_POST['phone'],
                        'admin_password' => md5($_POST['pass1']),
                        'admin_status' => 2,
                        'admin_date' => date('Y-m-d H:i:s'),
                    );

                    //loading model for adding enterprise

                    $this->db->insert("ms_administrators", $data);
                    $this->session->set_flashdata('success_msg', 'Administrator successfully added');
                    redirect('Admin/getAllAdministrators');
                } else {
                    $this->session->set_flashdata('error_msg', 'Sorry.... failed to save Administrator, make sure you filled the form correctly');
                    $this->load->view('admin_pages/new_administrator');
                }
            }
        }
    }
    public function EditProfile(){
        if ($this->session->userdata('admin_logged')){
            if (isset($_POST['saveChanges'])) {
                //setting validation rules
                $this->form_validation->set_rules('name', 'administrator name', 'required');
                $this->form_validation->set_rules('username', 'admin username', 'required');
                $this->form_validation->set_rules('email', 'admin name', 'required');
                $this->form_validation->set_rules('phone', 'phone number', 'required');
                $this->form_validation->set_rules('pass1', 'password', 'required');
                $this->form_validation->set_rules('pass2', 'password confirmation', 'required|matches[pass1]' );

                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('AdminModel');
                    $data['suspend'] = $this->AdminModel->EditProfile();
                    //loading model for adding enterprise

                    $this->session->set_flashdata('success_msg', 'Your profile has been successfully updated');
                    redirect('Admin/home');
                } else {
                    $this->session->set_flashdata('error_msg', 'Sorry.... failed to save Administrator, make sure you filled the form correctly');
                    redirect('Direct/UserSetting');
                }
            }
        }
    }
    public function adminStoreView()
    {
        if ($this->session->userdata('admin_logged')) {
            $this->load->model('EnterpriseModel');
            $this->load->model('AdminModel');
            $_SESSION['enterprise'] = $_GET['ent'];
            $data['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
            $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['defaultSearch'] = $this->AdminModel->defaultSearch();
            $data['products'] = $this->AdminModel->defaultProducts();
            $data['images'] = $this->EnterpriseModel-> ViewEnterpriseImages();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $this->db->select('*');
            $this->db->from('ms_enterprise_views');
            $this->db->where(array(
                'enterprise_view_address' => $this->input->ip_address(),
                'enterprise_id' => $_SESSION['enterprise'],
            ));
            $query = $this->db->get();
            $user_view = $query->row();
            if (isset($user_view->enterprise_view_address)) {
                $this->load->view('admin_pages/admin_enterprise_view', $data);
            } else {
                $data = array(
                    'enterprise_id' => $_SESSION['enterprise'],
                    'enterprise_view_address' => $this->input->ip_address(),
                );
                $this->db->insert('ms_enterprise_views', $data);
                $this->load->view('admin_pages/admin_enterprise_view', $data);
            }
        }
    }
    public function adminProductDetails()
    {
        if ($this->session->userdata('admin_logged')){
            $this->load->model('EnterpriseModel');
            $this->load->model('AdminModel');
            $_SESSION['product'] = $_GET['prod'];
            $data['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
            $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
            $data['summary'] = $this->AdminModel->dashboardSummary();
            $data['allCategory'] = $this->AdminModel->getAllCategory();
            $data['allStore'] = $this->AdminModel->getAllStore();
            $data['newStore'] = $this->AdminModel->getNewStore();
            $data['verifiedStore'] = $this->AdminModel->getVerifiedStore();
            $data['defaultSearch'] = $this->AdminModel->defaultSearch();
            $data['products'] = $this->AdminModel->defaultProducts();
            $data['images'] = $this->EnterpriseModel-> ViewEnterpriseImages();
            $data['suspendedStore'] = $this->AdminModel->getSuspendedStore();
            $data['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
            $this->db->select('*');
            $this->db->from('ms_product_views');
            $this->db->join('ms_products', 'ms_products.product_id = ms_product_views.product_id');
            $this->db->where(array(
                'product_user_address' => $this->input->ip_address(),
                'ms_product_views.product_id' => $_SESSION['product'],
            ));
            $query = $this->db->get();
            $user_address = $query->row();
            if (isset($user_address->product_user_address)){
                $_SESSION['product_price'] = $user_address->product_price;
                $_SESSION['enterprise'] = $user_address->enterprise_id;
                $this->load->view('admin_pages/admin_product_details', $data);
            }else{
                $ip = $this->input->ip_address();
                $data = array(
                    'product_id' => $_SESSION['product'],
                    'product_user_address' => $ip,
                );
                $this->db->insert('ms_product_views', $data);
                $this->load->view('admin_pages/admin_product_details', $data);
            }
        }else{
            redirect('Admin/login');
        }
    }
}