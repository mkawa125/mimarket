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
     public function DisplayEnterprises(){
         $this->db->select('*');
         $this->db->from('enterprises');
         $this->db->where(
             array(
                 'user_id' => $_SESSION['user_id']

             ));
         $enterprises = $this->db->get();
         return $enterprises;

     }
 }