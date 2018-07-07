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
        $this->load->view('enterprises/newEnterprise.php');
        $this->load->model('EnterpriseModel');
        $this->load->database();
        $this->load->helper('download');
    }
}