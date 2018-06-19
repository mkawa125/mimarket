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
    }

    public function register()
    {
        $this->load->view('user-pages/signup.php');
    }

    public function login()
    {
        $this->load->view('user-pages/login.php');
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
        $this->load->view('user-pages/user-setting');
    }
    public function PrivacyTerms(){
        $this->load->view("user-pages/PrivacyTerms");

    }
}