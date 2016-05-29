<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public $uid = 0, $utype, $uname, $pro_pic;
	public function __construct()
    {
        parent::__construct();

        $this->load->model('app_model', 'app');

        if($this->session->has_userdata('uid')) {
        	$this->uid = $this->session->uid;
        	$this->utype = $this->session->utype;
        	$this->uname = $this->session->uname;
        	$this->pro_pic = $this->session->pro_pic;
        } else {
        	redirect(site_url('home'),'refresh');
        }

    }
	public function index()
	{
		$this->load->view('user/template/header');
		$this->load->view('user/home');
		$this->load->view('user/template/footer');
	}
}
