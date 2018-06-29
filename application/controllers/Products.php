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
        $this->load->database();
        $this->load->helper('download');
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
        $data['totalOrders'] = $this->EnterpriseModel->totalOrders();
        $data['totalRequests'] = $this->EnterpriseModel->totalRequests();
        $data['outOfStockProducts'] = $this->EnterpriseModel->outOfStock();
        $data['enterprises'] = $this->EnterpriseModel->DefaultEnterprises();
        $data['enterprises'] = $this->EnterpriseModel->DefaultEnterprises();
        $data['enterprises'] = $this->EnterpriseModel->DefaultEnterprises();
        $this->load->view('dashboard/home', $data);
    }

    public function OrderProduct()
    {
        if ($this->session->userdata('user_logged')){
            $this->load->model('EnterpriseModel');
            $_SESSION['enterprise'] = $_GET['ent'];
            $data['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
            $data['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
            $this->load->view('order_pages/make_order', $data);
        }else{
            $this->session->set_flashdata('error_order', 'Looks you have not logged in, Please login to create order to this enterprise or');
            redirect('Products/unOrderCreationFail');
        }

    }
    public function unOrderCreationFail()
    {
        $this->load->model('EnterpriseModel');
        $enterprise['SingleEnterprise'] = $this->EnterpriseModel->customerEnterpriseDetails();
        $enterprise['products'] = $this->EnterpriseModel->ViewEnterpriseProducts();
        $this->load->view('dashboard/un_enterprise_details', $enterprise);
    }

    public function ViewProductDetails(){
        if ($this->session->userdata('user_logged')){
            $this->load->model('EnterpriseModel');
            $_SESSION['product'] = $_GET['prod'];
            $product['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
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
                $this->load->view('dashboard/productDetails', $product);
            }else{
                $ip = $this->input->ip_address();
                $data = array(
                    'product_id' => $_SESSION['product'],
                    'product_user_address' => $ip,
                );
                $this->db->insert('ms_product_views', $data);
                $_SESSION['product_price'] = $user_address->product_price;
                $this->load->view('dashboard/productDetails', $product);
                $_SESSION['product_price'] = $user_address->product_price;
                $_SESSION['enterprise'] = $user_address->enterprise_id;
            }
        }else{
            redirect('Products/unViewProductDetails');
        }
    }
    public function ownerProductDetails()
    {
        if ($this->session->userdata('user_logged')){
            $this->load->model('EnterpriseModel');
            $_SESSION['product'] = $_GET['prod'];
            $product['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
            $this->load->view('dashboard/owner_product_details', $product);

        }else{
            redirect('Products/unViewProductDetails');
        }
    }

    public function unViewProductDetails()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['product'] = $_GET['prod'];
        $product['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
        $this->db->select('*');
        $this->db->from('ms_product_views');
        $this->db->where(array(
            'product_user_address' => $this->input->ip_address(),
            'product_id' => $_SESSION['product'],
        ));
        $query = $this->db->get();
        $user_address = $query->row();
        if (isset($user_address->product_user_address)){
            $this->load->view('dashboard/un_product_details', $product);
        }else{
            $ip = $this->input->ip_address();
            $data = array(
                'product_id' => $_SESSION['product'],
                'product_user_address' => $ip,
            );
            $this->db->insert('ms_product_views', $data);
            $this->load->view('dashboard/un_product_details', $product);
        }

    }

    public function AddOrder()
    {
        if ($_SESSION['user_logged']){
            if (isset($_POST['submitOrder'])){
                $this->load->model('EnterpriseModel');

                $this->load->library('upload');
                $config['upload_path'] = './pdf_documents/order_documents';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $document_name = 'order_' . $_SESSION['full_name'];
                $config['file_name'] = $document_name;

                $this->upload->initialize($config);
                $this->form_validation->set_rules('order_name', 'order name', 'required');

                //making counts for the number of products to be inserted
                if ($_FILES['document']['name']){
                    $field_name = 'document';
                    if ($this->form_validation->run() == TRUE AND $this->upload->do_upload($field_name)){
                        $order_document = $this->upload->data();
                        $orderedProducts = count($_POST['name']);
                        if ($orderedProducts > 0){
                            $data = array(
                                'enterprise_id' => $_SESSION['enterprise'],
                                'user_id' => $_SESSION['user_id'],
                                'order_date' => date('Y-m-d H:i:s'),
                                'expected_date' => $_POST['dateOfNeed'],
                                'customer_email' => $_POST['email'],
                                'order_document' => $order_document['file_name'],
                                'customer_location' => $_POST['location'],
                                'order_name' => $_POST['order_name'],
                                'order_status' => 0,
                            );
                            $this->load->model('EnterpriseModel');
                            $this->EnterpriseModel->saveOrder('ms_orders', $data);
                            $last_id = $this->db->insert_id();

                            for ($num = 0; $num < $orderedProducts; $num++){
                                $products = array(
                                    'orderedProduct_name' => $_POST['name'][$num],
                                    'orderedProduct_features' => $_POST['features'][$num],
                                    'orderedProduct_quantity' => $_POST['quantity'][$num],
                                    'order_id' => $last_id,
                                );
                                $this->EnterpriseModel->saveOrder('ms_ordered_products', $products);
                            }
                            $this->EnterpriseModel->updateEnterprise();
                            $this->session->set_flashdata('success_msg', 'Your Order successfully submitted');
                            redirect('Products/viewOrders');
                        }else{
                            echo "please put at least one product and submit your order request";
                        }
                    }else{
                        echo 0;
                    }

                }else{
                    $orderedProducts = count($_POST['name']);
                    if ($orderedProducts > 0){
                        $data = array(
                            'enterprise_id' => $_SESSION['enterprise'],
                            'user_id' => $_SESSION['user_id'],
                            'order_date' => date('Y-m-d H:i:s'),
                            'expected_date' => $_POST['dateOfNeed'],
                            'customer_email' => $_POST['email'],
                            'customer_location' => $_POST['location'],
                            'order_name' => $_POST['order_name'],
                            'order_status' => 0,
                        );
                        $this->load->model('EnterpriseModel');
                        $this->EnterpriseModel->saveOrder('ms_orders', $data);
                        $last_id = $this->db->insert_id();

                        for ($num = 0; $num < $orderedProducts; $num++){
                            $products = array(
                                'orderedProduct_name' => $_POST['name'][$num],
                                'orderedProduct_features' => $_POST['features'][$num],
                                'orderedProduct_quantity' => $_POST['quantity'][$num],
                                'order_id' => $last_id,
                            );
                            $this->EnterpriseModel->saveOrder('ms_ordered_products', $products);
                        }
                        $this->EnterpriseModel->updateEnterprise();
                        $this->session->set_flashdata('success_msg', 'Your Order successfully submitted');
                        redirect('Products/viewOrders');
                    }else{
                        echo "please put at least one product and submit your order request";
                    }
                }

            }else{
                echo 1;
            }
        }
    }
    public function viewOrders(){
        $this->load->model('EnterpriseModel');
        $orders['orders'] = $this->EnterpriseModel->customerOrders();
        $this->load->view('order_pages/customer_orders', $orders);
    }
    public function viewEnterpriseOrders()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['enterprise'] = $_GET['ent'];
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $this->load->view('order_pages/view_orders', $orders);
    }
    public function orderProcessing()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['order'] = $_GET['ord'];
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['orderDetails'] = $this->EnterpriseModel->singleOrder();
        $orders['singleOrder'] = $this->EnterpriseModel->getSingleOrder();
        $orders['products'] = $this->EnterpriseModel->viewProcessingProducts();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $orders['cartProduct'] = $this->EnterpriseModel->shoppingCart();
        $this->load->view('order_pages/order_processing', $orders);
    }

    //shopping cart functions
    public function shoppingCart()
    {
        $this->load->library("cart");
        if (isset($_POST["add"])){
            $data = array(
                'cart_quantity' => $_POST['quantity'],
                'product_id' => $_GET['prod'],
                'order_id' => $_SESSION['order'],
                'user_id' => $_SESSION['user_id']
            );
            $this->db->insert("ms_shoppingcart", $data);
        }
        $this->load->model('EnterpriseModel');
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['orderDetails'] = $this->EnterpriseModel->singleOrder();
        $orders['singleOrder'] = $this->EnterpriseModel->getSingleOrder();
        $orders['products'] = $this->EnterpriseModel->viewProcessingProducts();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $orders['cartProduct'] = $this->EnterpriseModel->shoppingCart();
        $this->load->view('order_pages/order_processing', $orders);
    }
    public function removeCart()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['product']= $_GET['prod'];
        $this->EnterpriseModel->removeCart();
        redirect('Products/shoppingCart');
    }

    public function DirectOrders()
    {
        if ($this->session->userdata('user_logged')){
            $this->load->library("cart");
            if (isset($_POST["send_order"])){
                $data = array(
                    'product_quantity' => $_POST['quantity'],
                    'product_id' => $_GET['prod'],
                    'enterprise_id' => $_SESSION['enterprise'],
                    'user_id' => $_SESSION['user_id'],
                    'order_cost' => $_SESSION['product_price'] * $_POST['quantity'],
                    'order_date' => date('Y-m-d H:i:s'),

                );
                $this->db->insert("ms_direct_orders", $data);
            }
            $this->load->model('EnterpriseModel');
            $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
            $orders['orderDetails'] = $this->EnterpriseModel->singleOrder();
            $orders['products'] = $this->EnterpriseModel->viewProcessingProducts();
            $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
            $this->load->view('order_pages/customer_orders', $orders);
        }
        else{
            $this->session->set_flashdata('error_order', 'You have not login please login');
            $this->load->model('EnterpriseModel');
            $product['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
            $this->load->view('dashboard/un_product_details', $product);
        }

    }
    public function processedOrder()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['order']= $_GET['ord'];
        $orders['orders'] = $this->EnterpriseModel->processedOrders();
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $this->load->view('order_pages/view_orders', $orders);
    }
    public function orderDetails()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['order'] = $_GET['ord'];
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['orderDetails'] = $this->EnterpriseModel->singleOrder();
        $orders['singleOrder'] = $this->EnterpriseModel->getSingleOrder();
        $orders['products'] = $this->EnterpriseModel->viewProcessingProducts();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $orders['cartProduct'] = $this->EnterpriseModel->shoppingCart();
        $this->load->view('order_pages/order_details', $orders);
    }
    public function customerOrderDetails()
    {
        $this->load->model('EnterpriseModel');
        $_SESSION['order'] = $_GET['ord'];
        $orders['orderDetails'] = $this->EnterpriseModel->customerOrderDetails();
        $orders['singleOrder'] = $this->EnterpriseModel->customerSingleOrder();
        $orders['cartProduct'] = $this->EnterpriseModel->shoppingCart();
        $this->load->view('order_pages/order_details_customer', $orders);
    }
    public function customerOrdersComplete()
    {
        $this->load->model('EnterpriseModel');
        $orders['orders'] = $this->EnterpriseModel->customerOrdersComplete();
        $this->load->view('order_pages/customer_orders_complete', $orders);
    }
    public function customerOrdersPaid()
    {
        $this->load->model('EnterpriseModel');
        $orders['orders'] = $this->EnterpriseModel->customerOrdersPaid();
        $this->load->view('order_pages/customer_orders_paid', $orders);
    }
    public function customerOrdersRejected()
    {
        $this->load->model('EnterpriseModel');
        $orders['orders'] = $this->EnterpriseModel->customerOrdersRejected();
        $this->load->view('order_pages/customer_orders_rejected', $orders);
    }



    //reports generator functions
    //query the database and generate reports and presenting them in pdf form
    public function orderReport()
    {
        $this->load->library('pdf');
        $this->load->model('EnterpriseModel');
        $_SESSION['order'] = $_GET['ord'];
        $orders['orders'] = $this->EnterpriseModel->enterpriseOrders();
        $orders['orderDetails'] = $this->EnterpriseModel->singleOrder();
        $orders['singleOrder'] = $this->EnterpriseModel->getSingleOrder();
        $orders['products'] = $this->EnterpriseModel->viewProcessingProducts();
        $orders['rowOrders'] = $this->EnterpriseModel->orderRows();
        $orders['cartProduct'] = $this->EnterpriseModel->shoppingCart();
        $this->load->view('report_views/sample', $orders);
    }
    public function storeOrderReport()
    {
        $this->load->library('pdf');
        $this->load->model('EnterpriseModel');
        $data['enterprises'] = $this->EnterpriseModel->DisplayEnterprises();
        $data['productOrders'] = $this->EnterpriseModel->ProductOrders();
        $data['orderedMost'] = $this->EnterpriseModel->OrderedProductSummary();
        $this->load->view('report_views/storeOrderReport', $data);
    }



    //search functions
    public function IndexSearch()
    {
        if (isset($_POST['search'])){
            $inputs = array(
                'category' => $_POST['category'],
                'location' => $_POST['location'],
                'user_input' => $_POST['product_name'],

            );
            $_SESSION['product_name'] = $_POST['product_name'];
            $this->load->model('EnterpriseModel');
            $search['searchResult'] = $this->EnterpriseModel->IndexSearchModel($inputs);
            $search['enterprises'] = $this->EnterpriseModel->EnterpriseSearchModel($inputs);
            $this->load->view('dashboard/IndexSearchResults', $search);
        }
    }
    public function DownloadOrderDocument($fileName = null)
    {
        $this->load->helper('download');
        $fileName = $_SESSION['document_name'];
        if ($fileName) {
            $file = realpath ( "pdf_documents/order_documents/" ) . "\\" . $fileName;
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
    public function UpdateQuantity(){
        if (isset($_POST['add'])){
            $newQuantity = $_POST['quantity'];
            $this->load->model('EnterpriseModel');
            $product['quantity'] = $this->EnterpriseModel->UpdateQuantity($newQuantity);
            $product['productDetails'] = $this->EnterpriseModel->ViewProductDetails();
            $this->load->view('dashboard/owner_product_details', $product);
        }

    }
}