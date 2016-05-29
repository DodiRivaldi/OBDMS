<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('uid')) {
        	redirect(site_url('user'),'refresh');
        }
    }
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{	
		if($this->input->post())
        {
            $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post('email');
                $pwd = encode($this->input->post('password'));

                $res = $this->com->select_row('users', ['email' => $email], ['password'=> $pwd]);
                if($res) {
                	if($res->status == 1) {
                		$log_his = array('user_id' => $res->id, 'login_at'=> date('Y-m-d H:i:s'));
		                $this->com->insert('login_history', $log_his);
		                $this->session->set_userdata('uid', $res->id);
		                $this->session->set_userdata('utype', $res->user_type);
		                $this->session->set_userdata('uname', $res->name);
		                $this->session->set_userdata('img', $res->img);
		                redirect(site_url('user'),'refresh');
                	} else if($res->status == 2) {
                		$this->session->set_flashdata('err', 'Your account is blocked. Please contact the admin.');
                		redirect(site_url('home/login'),'refresh');
                	} else {
                		redirect(site_url('home/login'),'refresh');
                	}
                } else {
                	$this->session->set_flashdata('err', 'Login failed. Invalid username or password.');
            		redirect(site_url('home/login'),'refresh');
                }

                $this->process_login($usr_nam, $pwd, $remember_me);
                redirect(site_url(),'refresh');
            }   
        }
		$this->load->view('mini/header');
		$this->load->view('mini/login');
		$this->load->view('mini/footer');
	}

	public function register()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('type', 'name', 'required|trim|xss_clean');
			$this->form_validation->set_rules('name', 'name', 'required|max_length[40]|trim|xss_clean');
			$this->form_validation->set_rules('phone', 'phone', 'numeric|max_length[10]|trim|xss_clean');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[50]|trim|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[40]|trim|xss_clean');
        	if ($this->form_validation->run() == TRUE)
            {

                if($this->com->get_count('users', ['email' => $this->input->post('email')])) {
                    $this->session->set_flashdata('err', 'Registration failed. This email is already registered.');
                    redirect(site_url('home/register'),'refresh');
                }
                $type = $this->input->post('type');
                if($type == 3) {
                	$reg_data = array(
	                	'name' => $this->input->post('name'),
	                	'phone' => $this->input->post('phone'),
	                	'email' => $this->input->post('email'),
	                	'password' => encode($this->input->post('password')),
	                	'address' => $this->input->post('address'),
	                	'avg_no_employees' => $this->input->post('no_employees'),
	                	'state_id' => $this->input->post('state'),
	                	'district_id' => $this->input->post('district'),
	                	'user_type' => 3,
	                	'status' => 1,
	            	);
                } else {
                	$reg_data = array(
	                	'name' => $this->input->post('name'),
	                    'blood_group_id' => $this->input->post('blood_group'),
	                	'gender' => $this->input->post('gender'),
	                	'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
	                	'phone' => $this->input->post('phone'),
	                	'email' => $this->input->post('email'),
	                	'password' => encode($this->input->post('password')),
	                	'location' => $this->input->post('location'),
	                	'state_id' => $this->input->post('state'),
	                	'district_id' => $this->input->post('district'),
	                	'user_type' => 2,
	                	'status' => 1,
	            	);
                }
                
                $ins_id = $this->com->insert('users', $reg_data);
                if($ins_id) {
                	$this->session->set_flashdata('msg', 'You are successfully registered. Login using user email id and password.');
                    redirect(site_url('home/login'),'refresh');
                } else {
                	$this->session->set_flashdata('err', 'Error. Please try again later.');
                    redirect(site_url('home/register'),'refresh');
                }
            }
		}
		$data['blood_groups'] = $this->com->select('blood_groups');
		$data['states'] = $this->com->select('states');
		$data['districts'] = $this->com->select('districts');
		$this->load->view('mini/header');
		$this->load->view('mini/register', $data);
		$this->load->view('mini/footer');
	}
}
