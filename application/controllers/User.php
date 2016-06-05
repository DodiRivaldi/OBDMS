<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public $uid = 0, $utype, $uname, $uimg;
	public function __construct()
    {
        parent::__construct();

        $this->load->model('app_model', 'app');

        if($this->session->has_userdata('uid')) {
        	$this->uid = $this->session->uid;
        	$this->utype = $this->session->utype;
        	$this->uname = $this->session->uname;
            if($this->session->uimg) {
                $this->uimg = base_url('assets/uploads/users/'.$this->uid.'/'.$this->session->uimg);
            } else {
                $this->uimg = base_url('assets/img/user-default.jpg');
            }
        	
        } else {
        	redirect(site_url('home'),'refresh');
        }

    }
	public function index()
	{
        $data['active'] = 1;
		$this->load->view('user/template/header', $data);
		$this->load->view('user/home');
		$this->load->view('user/template/footer');
	}

    public function search($group = null)
    {
        if($group) {
            $data['profiles'] = $this->app->getProfiles($group);
            $data['profiles_org'] = $this->app->getProfilesOrg($group);
            $data['group'] = $group;
            // dd($data['profiles_org']);
        }
        $data['active'] = 2;
        $this->load->view('user/template/header', $data);
        $this->load->view('user/search');
        $this->load->view('user/template/footer');
    }

    public function members()
    {
        if($this->input->post())
        {
            $ins_data = array(
                'name' => $this->input->post('name'),
                'blood_group_id' => $this->input->post('blood_group'),
                'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
                'user_id' => $this->uid,
            );
            $ins_id = $this->com->insert('members', $ins_data);
            if($ins_id) {
                $this->session->set_flashdata('msg', 'Member successfully added.');
            } else {
                $this->session->set_flashdata('err', 'Error. Please try again later.');
            } 
            redirect(site_url('user/members'),'refresh');
        }
        $data['active'] = 3;
        $data['members'] = $this->app->getMembers($this->uid);
        $this->load->view('user/template/header', $data);
        $this->load->view('user/members');
        $this->load->view('user/template/footer');
    }

    public function profile()
    {
        $data['user'] = [];
        $this->load->view('user/template/header', $data);
        $this->load->view('user/profile');
        $this->load->view('user/template/footer');
    }

    public function blood_groups()
    {
        return $this->com->select('blood_groups');
    }

    public function logout()
    {   
        $this->app->upd_log_hist($this->uid);
        $this->session->unset_userdata('uid');
        // delete_cookie('remember_me_token');
        redirect(site_url(),'refresh');
    }
}
