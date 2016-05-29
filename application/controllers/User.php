<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('user/template/header');
		$this->load->view('user/home');
		$this->load->view('user/template/footer');
	}
}
