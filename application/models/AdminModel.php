<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/10/2018
 * Time: 7:55 PM
 */
class AdminModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function dashboardSummary()
    {
        $this->db->select('*, COUNT(category) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
                'enterprises.enterprise_status' => 1,
            )
        );
        $this->db->group_by('enterprises.category');
        $this->db->order_by('total','desc');
        $this->db->limit(4,0);
        $summary = $this->db->get();
        $summary = $summary->result_array();
        return $summary;
    }
    public function getAllCategory()
    {
        $this->db->select('*, COUNT(category) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->group_by('enterprises.category');
        $this->db->order_by('total','desc');
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getAllStore()
    {
        $this->db->select('*, COUNT(enterprise_id) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getAllStoreDetails()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getSingleStoreDetails()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array('enterprises.enterprise_id' => $_SESSION['enterprise']));
        $category = $this->db->get();
        $category = $category->row();
        return $category;
    }
    public function getStoreProducts()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->join('ms_products', 'enterprises.enterprise_id = ms_products.enterprise_id');
        $this->db->where(array('enterprises.enterprise_id' => $_SESSION['enterprise']));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }

    public function getNewStore()
    {
        $this->db->select('*, COUNT(enterprise_id) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 0,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getNewStoreDetails()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 0,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getVerifiedStore()
    {
        $this->db->select('*, COUNT(enterprise_id) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 1,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getVerifiedStoreDetails()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 1,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getSuspendedStore()
    {
        $this->db->select('*, COUNT(enterprise_id) as total');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 3,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getDeniedStore()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 2,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function getSuspendedStoreDetails()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 3,
        ));
        $category = $this->db->get();
        $category = $category->result_array();
        return $category;
    }
    public function verifyStore()
    {
        $this->db->select('*');
        $data = array('enterprise_status' => 1);
        $this->db->set($data);
        $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
        $this->db->update('enterprises', $data);
    }
    public function denyRegistration()
    {
        $this->db->select('*');
        $data = array('enterprise_status' => 2);
        $this->db->set($data);
        $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
        $this->db->update('enterprises', $data);
    }
    public function suspendStore()
    {
        $this->db->select('*');
        $data = array('enterprise_status' => 3);
        $this->db->set($data);
        $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
        $this->db->update('enterprises', $data);
    }
    public function unSuspendStore()
    {
        $this->db->select('*');
        $data = array('enterprise_status' => 1);
        $this->db->set($data);
        $this->db->where(array('enterprise_id' => $_SESSION['enterprise']));
        $this->db->update('enterprises', $data);
    }
    public function deleteStore()
    {
        $this->db->where('enterprise_id', $_SESSION['enterprise']);
        $this->db->delete('enterprises');
    }
    public function getAllCustomers()
    {
        $this->db->select('*');
        $this->db->from('user-registration');
        $customer = $this->db->get();
        $customer = $customer->result_array();
        return $customer;
    }
    public function getAllAdministrators()
    {
        $this->db->select('*');
        $this->db->from('ms_administrators');
        $this->db->where(array('admin_status' => 2));
        $customer = $this->db->get();
        $customer = $customer->result_array();
        return $customer;
    }
    public function getCustomerDetails()
    {
        $this->db->select('*');
        $this->db->from('user-registration');
        $this->db->where(array('user-registration.user_id' => $_SESSION['customer']));
        $customerDetails = $this->db->get();
        $customerDetails = $customerDetails->row();
        return $customerDetails;

    }
    public function defaultSearch()
    {
        $this->db->select('*');
        $this->db->from('enterprises');
        $this->db->join('ms_enterprise_views', 'enterprises.enterprise_id = ms_enterprise_views.enterprise_id');
        $this->db->where(array(
            'enterprises.enterprise_status' => 1,
        ));
        $this->db->order_by('enterprises.enterprise_visitors', 'desc');
        $this->db->limit(5,0);
        $result = $this->db->get();
        return $result;
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
    public function EditProfile()
    {
        $this->db->select('*');
        $data = array(
            'admin_name' => $_POST['name'],
            'admin_username' => $_POST['username'],
            'admin_email' => $_POST['email'],
            'admin_phone' => $_POST['phone'],
            'admin_password' => md5($_POST['pass1']),
            'admin_date_modified' => date('Y-m-d H:i:s'),
        );
        $this->db->set($data);
        $this->db->where(array('admin_id' => $_SESSION['admin_id']));
        $this->db->update('ms_administrators', $data);
    }

}