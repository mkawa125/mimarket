<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/18/2018
 * Time: 10:22 AM
 */
 class EnterpriseModel extends CI_Model{


     public function __construct()
     {
         parent::__construct();
     }

     public function AddCompany($data){

         $this->db->insert("enterprises", $data);
     }

     //Display enterprises to logged in user
     public function DisplayEnterprises(){
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->where(array('user_id' => $_SESSION['user_id']));
         $enterprises = $this->db->get();
         return $enterprises;

     }

     //Deleting the enterprise
     public function DeleteEnterprise(){
         $this->db->where('enterprise_id', $_SESSION['enterprise']);
         $this->db->delete('enterprises');
     }

     //Displaying enterprise details
     public function ViewEnterpriseDetails()
     {
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->where( array('user_id' => $_SESSION['user_id'], 'enterprise_id' => $_SESSION['enterprise']));
         $enterprise = $this->db->get();
         $SingleEnterprise = $enterprise->row();
         return $SingleEnterprise;

     }
     public function ViewEnterpriseImages()
     {
         $this->db->select('*');
         $this->db->from('ms_enterprise_images');
         $this->db->where( array('enterprise_id' => $_SESSION['enterprise']));
         $images = $this->db->get();
         return $images;

     }
     public function ViewEnterpriseProducts()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
         $products = $this->db->get();
         return $products;
     }
     public function customerEnterpriseDetails()
     {
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
         $this->db->join('ms_products', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('enterprises.enterprise_id' => $_SESSION['enterprise']));
         $enterprise = $this->db->get();
         $SingleEnterprise = $enterprise->row();
         return $SingleEnterprise;
     }
     public function DeleteProduct()
     {
         $this->db->where('product_id', $_SESSION['product']);
         $this->db->delete('ms_products');
     }
     public function DefaultEnterprises()
     {
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->order_by('enterprise_visitors', 'desc');
         $this->db->where(array(
             'enterprise_status' => 1,
         ));
         $this->db->limit(5,0);
         $defaultEnterprises = $this->db->get();
         return $defaultEnterprises;
     }

     public function DefaultProducts()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_products.enterprise_id');
         $this->db->where(array(
             'enterprises.enterprise_status' => 1,
         ));
         $this->db->order_by('ms_products.product_views', 'desc');
         $this->db->limit(5,0);
         $defaultProducts = $this->db->get();
         return $defaultProducts;
     }
     public function ViewProductDetails()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
         $this->db->where(array('product_id' => $_SESSION['product']));
         $product = $this->db->get();
         return $product;
     }

     //these functions are for displaying order details to customer

     public function customerOrders()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', ' user-registration.user_id = ms_orders.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.user_id' => $_SESSION['user_id'],
             'ms_orders.order_status' => 0,
         ));
         $ordersDetails = $this->db->get();
         return $ordersDetails;
     }
     public function countCustomerOrders()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('ms_orders.user_id' => $_SESSION['user_id'], 'ms_orders.order_status' => 0));
         $NewOrders = $this->db->get();
         $NewOrders = $NewOrders->result_array();
         return $NewOrders;
     }
     public function customerOrdersComplete()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', ' user-registration.user_id = ms_orders.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('ms_orders.user_id' => $_SESSION['user_id'], 'ms_orders.order_status' => 1));
         $orders = $this->db->get();
         return $orders;
     }
     public function countCompleteOrders(){
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.user_id' => $_SESSION['user_id'],
             'ms_orders.order_status' => 1,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function customerOrdersPaid()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', ' user-registration.user_id = ms_orders.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('ms_orders.user_id' => $_SESSION['user_id'], 'ms_orders.order_status' => 2));
         $orders = $this->db->get();
         return $orders;
     }
     public function countPaidOrders()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.user_id' => $_SESSION['user_id'],
             'ms_orders.order_status' => 2,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function customerOrdersRejected()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', ' user-registration.user_id = ms_orders.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('ms_orders.user_id' => $_SESSION['user_id'], 'ms_orders.order_status' => 3));
         $orders = $this->db->get();
         return $orders;
     }
     public function countRejectedOrders()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.user_id' => $_SESSION['user_id'],
             'ms_orders.order_status' => 3,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }

     public function customerOrderDetails()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = ms_orders.enterprise_id');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->where(array('ms_orders.user_id' => $_SESSION['user_id']));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orderDetails = $this->db->get();
         $orderDetails = $orderDetails->row();
         return $orderDetails;
     }
     public function customerSingleOrder()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('ms_ordered_products', 'ms_orders.order_id = ms_ordered_products.order_id');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->where(array('ms_orders.order_id' => $_SESSION['order']));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $singleOrder = $this->db->get();
         return $singleOrder;
     }

     public function enterpriseOrders()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 0));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orders = $this->db->get();
         return $orders;
     }
     public function storeOrdersProcessed()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 1));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orders = $this->db->get();
         return $orders;
     }
     public function storeOrdersComplete()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 2));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orders = $this->db->get();
         return $orders;
     }
     public function storeOrdersRejected()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 3));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orders = $this->db->get();
         return $orders;
     }
     public function countStoreOrders()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 0,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function countStoreOrdersProcessed()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 1,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function countStoreOrdersComplete()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 2,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function countStoreOrdersPending()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 0,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function countStoreOrdersRejected()
     {
         $this->db->select('*, COUNT(order_id) as total');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.order_id = user-registration.user_id');
         $this->db->join('enterprises', 'ms_orders.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
             'ms_orders.order_status' => 3,
         ));
         $orders = $this->db->get();
         $orders = $orders->result_array();
         return $orders;
     }
     public function singleOrder()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->where(array('ms_orders.enterprise_id' => $_SESSION['enterprise']));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $singleOrder = $this->db->get();
         $orderDetails = $singleOrder->row();
         return $orderDetails;
     }
     public function singleSale()
     {
         $this->db->select('*');
         $this->db->from('ms_sales');
         $this->db->join('user-registration', 'ms_sales.user_id = user-registration.user_id');
         $this->db->where(array('ms_sales.enterprise_id' => $_SESSION['enterprise']));
         $this->db->order_by('ms_sales.sales_date', 'desc');
         $saleDetails = $this->db->get();
         return $saleDetails;
     }
     public function singleSaleDetails()
     {
         $this->db->select('*');
         $this->db->from('ms_sales');
         $this->db->join('ms_sales_cart', 'ms_sales.sales_id = ms_sales_cart.sales_id');
         $this->db->where(array('ms_sales.sales_id' => $_SESSION['order']));
         $this->db->order_by('ms_sales.sales_date', 'desc');
         $singleSaleDetails = $this->db->get();
         $singleSaleDetails = $singleSaleDetails->row();
         return $singleSaleDetails;
     }
     public function singleSaleProducts()
     {
         $this->db->select('*');
         $this->db->from('ms_sales');
         $this->db->join('ms_sales_cart', 'ms_sales.sales_id = ms_sales_cart.sales_id');
         $this->db->join('ms_products', 'ms_products.product_id = ms_sales_cart.product_id');
         $this->db->where(array('ms_sales.sales_id' => $_SESSION['order']));
         $this->db->order_by('ms_sales.sales_date', 'desc');
         $salesProducts = $this->db->get();;
         return $salesProducts;
     }

     public function orderRows()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('ms_ordered_products', 'ms_orders.order_id = ms_ordered_products.order_id');
         $this->db->join('user-registration', 'ms_orders.user_id = user-registration.user_id');
         $this->db->where(array('ms_orders.enterprise_id' => $_SESSION['enterprise']));
         $this->db->order_by('ms_orders.order_id', 'desc');
         $orderRows = $this->db->get();
         $orders = $orderRows->num_rows();
         return $orders;
     }
     public function saveOrder($table, $data)
     {
         $this->db->insert($table, $data);
         $last_id = $this->db->insert_id('ms_orders');
         return $last_id;
     }
     public function saveSale($table, $data)
     {
         $this->db->insert($table, $data);
         $last_sale = $this->db->insert_id('ms_sales');
         return $last_sale;
     }

     public function viewProcessingProducts()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_products.enterprise_id' );
         $this->db->where(array('ms_products.enterprise_id' => $_SESSION['enterprise']));
         $products = $this->db->get();
         return $products;
     }
     public function getSingleOrder()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('ms_ordered_products', 'ms_orders.order_id = ms_ordered_products.order_id');
         $this->db->where(array('ms_orders.order_id' => $_SESSION['order']));
         $singleOrder = $this->db->get();
         return $singleOrder;
     }
     public function getSingleSale()
     {
         $this->db->select('*');
         $this->db->from('ms_sales');
         $this->db->join('ms_sales_cart', 'ms_sales.sales_id = ms_sales_cart.sales_id');
         $this->db->where(array('ms_sales.sales_id' => $_SESSION['sale']));
         $singleOrder = $this->db->get();
         return $singleOrder;
     }
     public function viewRequestedProduct()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->join('ms_ordered_products', 'ms_orders.order_id = ms_ordered_products.order_id');
         $this->db->where(array('ms_ordered_products.order_id' => $_SESSION['order']));
         $productsOrdered = $this->db->get();
         return $productsOrdered;
     }
     public function shoppingCart()
     {
         $this->db->select('*');
         $this->db->from('ms_shoppingcart');
         $this->db->join('ms_products', 'ms_products.product_id = ms_shoppingcart.product_id');
         $this->db->join('ms_orders', 'ms_orders.order_id = ms_shoppingcart.order_id');
         $this->db->where(array('ms_shoppingcart.order_id' => $_SESSION['order'], 'ms_shoppingcart.user_id' => $_SESSION['user_id']));
         $cartProduct = $this->db->get();
             return $cartProduct;
     }

     public function salesCart()
     {
         $this->db->select('*');
         $this->db->from('ms_sales_cart');
         $this->db->join('ms_products', 'ms_products.product_id = ms_sales_cart.product_id');
         $this->db->join('ms_sales', 'ms_sales.sales_id = ms_sales_cart.sales_id');
         $this->db->where(array('ms_sales_cart.sales_id' => $_SESSION['sale']));
         $cartProduct = $this->db->get();
         return $cartProduct;
     }

     public function removeCart()
     {
         $this->db->where('product_id', $_SESSION['product']);
         $this->db->delete('ms_shoppingcart');
     }

     public function removeSaleItem()
     {
         $this->db->where('product_id', $_SESSION['product']);
         $this->db->delete('ms_sales_cart');
     }

     public function processedOrders()
     {
         $data = array(
             'order_status' => 1
         );
         $this->db->set($data);
         $this->db->where(array('order_id' => $_SESSION['order']));
         $this->db->update('ms_orders', $data);
     }
     public function updateEnterprise()
     {
         $this->db->select('*');
         $this->db->set('enterprise_orders', 'enterprise_orders+1', FALSE);
         $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
         $this->db->update('enterprises');
     }
     public function UpdateQuantity($newQuantity)
     {
         $this->db->select('*');
         $this->db->set('quantity', "quantity+$newQuantity", FALSE);
         $this->db->where(array('product_id' => $_SESSION['product']));
         $this->db->update('ms_products');
     }
     public function UpdateProduct($newQuantity, $newName, $newPrice,$newDescription)
     {
         $this->db->select('*');
         $this->db->set(array(
             'quantity'=> "$newQuantity",
             'ProductName'=> "$newName" ,
             'product_price'=> "$newPrice",
             'product_details'=> "$newDescription",
             'date_modified'=> date('Y-m-d H:i:s'
             )));
         $this->db->where(array('product_id' => $_SESSION['product']));
         $this->db->update('ms_products');
     }
     public function updateProductViews()
     {
         $this->db->select('*');
         $data = array(
             'enterprise_orders = enterprise_orders+ 1'
         );
         $this->db->set($data);
         $this->db->where(array('product_id' => $_SESSION['product']));
         $this->db->update('ms_products_views', $data);
     }
     public function totalOrders()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->where(array('user_id' => $_SESSION['user_id'], 'order_status' => 2,));
         $orders = $this->db->get();
         $totalOrders = $orders->num_rows();
         return $totalOrders;
     }
     public function totalRequests()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->where(array('user_id' => $_SESSION['user_id'], 'order_status' => 0,));
         $request = $this->db->get();
         $totalRequests = $request->num_rows();
         return $totalRequests;
     }
     public function outOfStock(){
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->where(array('enterprises.user_id' => $_SESSION['user_id'], 'quantity' < 20,));
         $outOfStock = $this->db->get();
         $outOfStockProducts = $outOfStock->num_rows();
         return $outOfStockProducts;
     }

     //index search function
     public function IndexSearchOne($inputs)
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'ms_products.ProductName'=> $inputs['user_input'],
         ));
         $result = $this->db->get();
         return $result;
     }
     public function IndexSearchTwo($inputs)
     {
         $product = $_POST['ProductName'];
         $location = $_POST['location'];

         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'ms_products.ProductName'=> $product,
             'enterprises.location'=> $location,
         ));
         $result = $this->db->get();
         return $result;
     }
     public function IndexSearchThree($inputs)
     {
         $product= $_POST['ProductName'];
         $category = $_POST['category'];
         $location = $_POST['location'];

         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'ms_products.ProductName'=> $product,
             'enterprises.location'=> $location,
             'enterprises.category'=> $category,
         ));
         $result = $this->db->get();
         return $result;
     }
     public function EnterpriseSearchOne($inputs)
     {
         $category = $_POST['category'];
         $location = $_POST['location'];

         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->join('ms_products', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'enterprises.location'=> $location,
             'enterprises.category'=> $category,
         ));
         $result = $this->db->get();
         return $result;
     }
     public function EnterpriseSearchTwo($inputs)
     {
         $category = $_POST['category'];
         $location = $_POST['location'];

         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->join('ms_products', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'enterprises.location'=> $location,
             'enterprises.category'=> $category,
         ));
         $result = $this->db->get();
         return $result;
     }
     public function EnterpriseSearchThree($inputs)
     {
         $category = $_POST['category'];
         $location = $_POST['location'];

         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->join('ms_products', 'ms_products.enterprise_id = enterprises.enterprise_id');
         $this->db->like(array(
             'enterprises.location'=> $location,
             'enterprises.category'=> $category,
         ));
         $result = $this->db->get();
         return $result;
     }
     public function defaultSearch()
     {
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->join('ms_enterprise_views', 'enterprises.enterprise_id = ms_enterprise_views.enterprise_id');
         $this->db->order_by('enterprises.enterprise_visitors', 'desc');
         $this->db->limit(5,0);
         $result = $this->db->get();
         return $result;
     }
     public function getOrderDocument()
     {
         $this->db->select('*');
         $this->db->from('ms_orders');
         $this->db->where(array('order_id' => $_SESSION['order']));
         $singleOrder = $this->db->get();
         $order = $singleOrder->row();
         return $order;
     }
     public function productOrders()
     {
         $this->db->select('*');
         $this->db->from('ms_direct_orders');
         $this->db->join('ms_products', 'ms_direct_orders.product_id = ms_products.product_id');
         $this->db->where(array('user_id' => $_SESSION['user_id']));
         $orders = $this->db->get();
         return $orders;
     }
     public function OrderedProductSummary()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('ms_direct_orders', 'ms_direct_orders.product_id = ms_products.product_id');
         $this->db->where(array('user_id' => $_SESSION['user_id']));
         $products = $this->db->get();
         return $products;
     }
     public function ConfirmSale($total_cost)
     {
         $this->db->select('*');
         $data = array(
             'sales_cost' => "$total_cost",
             'sales_status' => 1,
         );
         $this->db->set($data, FALSE);
         $this->db->where(array('sales_id' => $_SESSION['sale']));
         $this->db->update('ms_sales', $data);
     }

     public function ViewDailyReports()
     {
         $this->db->select('*');
         $this->db->from('ms_sales');
         $this->db->join('ms_sales_cart', 'ms_sales_cart.sales_id = ms_sales.sales_id');
         $this->db->join('ms_products', 'ms_products.product_id = ms_sales_cart.product_id');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_sales.enterprise_id');
         $this->db->where(
             array(
                 'ms_sales.enterprise_id' => $_SESSION['enterprise'],
                 'ms_sales.user_id' => $_SESSION['user_id'],
                 'ms_sales.sales_status' => 1,
//                 'sales_date' => date('Y-m-d'),
                 ));
         $this->db->order_by('ms_sales.sales_date', 'desc');
         $dailyReport = $this->db->get();
         return $dailyReport;
     }
     public function ViewProductsOrdered($date)
     {
         $this->db->select('*, SUM(cart_quantity) as total');
         $this->db->from('ms_shoppingcart');
         $this->db->join('ms_products', 'ms_products.product_id = ms_shoppingcart.product_id');
         $this->db->join('ms_orders', 'ms_orders.order_id = ms_shoppingcart.order_id');
         $this->db->where(array(
             'ms_orders.enterprise_id' => $_SESSION['enterprise'],
//             'ms_orders.order_date' == $date,
         )
         );
         $this->db->group_by('ms_shoppingcart.product_id');
         $ProductsOrdered = $this->db->get();
         $result = $ProductsOrdered->result_array();
         return $result;
     }
     public function ViewSoldProducts($date)
     {
         $this->db->select('*, SUM(cart_quantity) as total');
         $this->db->from('ms_sales_cart');
         $this->db->join('ms_products', 'ms_products.product_id = ms_sales_cart.product_id');
         $this->db->join('ms_sales', 'ms_sales.sales_id = ms_sales_cart.sales_id');
         $this->db->where(array(
             'ms_sales.enterprise_id' => $_SESSION['enterprise'],
             'ms_sales.sales_status' => 1,
//             'ms_sales.sales_date' ==  $date,
         ));
         $this->db->group_by('ms_sales_cart.product_id');
         $soldProducts = $this->db->get();
         $result = $soldProducts->result_array();
         return $result;
     }
     public function directOrders()
     {
         $this->db->select('*');
         $this->db->from('ms_direct_orders');
         $this->db->join('user-registration', 'ms_direct_orders.user_id = user-registration.user_id');
         $this->db->join('ms_products', 'ms_products.product_id = ms_direct_orders.product_id');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_direct_orders.enterprise_id');
         $this->db->where(array('ms_direct_orders.user_id' => $_SESSION['user_id'], 'ms_direct_orders.status' => 0));
         $this->db->order_by('ms_direct_orders.order_date', 'desc');
         $singleOrder = $this->db->get();
         return $singleOrder;
     }

 }