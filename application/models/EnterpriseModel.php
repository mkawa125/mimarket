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
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_products.enterprise_id');
         $this->db->join('user-registration', 'enterprises.user_id = user-registration.user_id');
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
         $this->db->limit(5,0);
         $defaultEnterprises = $this->db->get();
         return $defaultEnterprises;
     }

     public function DefaultProducts()
     {
         $this->db->select('*');
         $this->db->from('ms_products');
         $this->db->join('enterprises', 'enterprises.enterprise_id = ms_products.enterprise_id');
         $this->db->order_by('ms_products.product_views', 'desc');
         $this->db->limit(5,0);
         $defaultProducts = $this->db->get();
         return $defaultProducts;
     }
 }