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
         $enterprises = $this->db->get('enterprises');
         return $enterprises;
     }
 }