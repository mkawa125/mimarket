<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/4/2018
 * Time: 6:33 PM
 */
class AuthModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function AddEnterprise($data){
        $this->db->insert('enterprises', $data);
    }

}