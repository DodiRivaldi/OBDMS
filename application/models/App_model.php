<?php

if (!defined('BASEPATH'))   exit('No direct script access allowed');

class App_model extends CI_Model {

    public function getProfiles($group_id)
    {
    	$url = base_url();
    	$this->db->select('users.*, blood_groups.name as blood_group, districts.name as district, IF(users.img IS NULL, "'.$url.'assets/img/user-default.jpg", CONCAT("'.$url.'assets/uploads/users/", users.id, "/",users.img)) as user_img');
    	$this->db->from('users');
    	$this->db->join('blood_groups', 'users.blood_group_id = blood_groups.id');
    	$this->db->join('districts', 'users.district_id = districts.id');
    	$this->db->where('users.id !=', $this->uid);
    	$this->db->where('blood_group_id', $group_id);
    	$this->db->where('availability', 1);
    	$this->db->where('user_type', 2);
    	$query = $this->db->get();
    	if($query) {
    		return $query->result();
    	} else {
    		return false;
    	}
    }

    public function getProfilesOrg($group_id)
    {
    	$url = base_url();
    	$this->db->select('users.*,(SELECT COUNT(*) FROM members WHERE user_id = users.id AND availability = 1 AND blood_group_id = '.$group_id.') as members_count, (SELECT name FROM blood_groups WHERE id = '.$group_id.') as blood_group, districts.name as district, IF(users.img IS NULL, "'.$url.'assets/img/user-default.jpg", CONCAT("'.$url.'assets/uploads/users/", users.id, "/",users.img)) as user_img');
    	$this->db->from('users');
    	// $this->db->join('blood_groups', 'users.blood_group_id = blood_groups.id');
    	$this->db->join('districts', 'users.district_id = districts.id');
    	// $this->db->where('users.id !=', $this->uid);
    	$this->db->where('user_type', 3);
    	$this->db->having('members_count !=', 0);
    	$query = $this->db->get();
    	if($query) {
    		return $query->result();
    	} else {
    		return false;
    	}
    }


    public function upd_log_hist($uid)
    {
        $this->db->select_max('id', 'id');
        $this->db->where('user_id', $uid);
        $qry = $this->db->get('login_history');
        $res = $qry->row();
        $r = $this->db->update('login_history', array('logout_at' => date('Y-m-d H:i:s')), array('id' => $res->id));
        if($r)
            return true;
        else
            return false;
    }

    public function getMembers($user_id = null)
    {
    	$this->db->select('members.*, blood_groups.name as blood_group');
    	$this->db->from('members');
    	$this->db->join('blood_groups', 'members.blood_group_id = blood_groups.id');
    	if($user_id) {
    		$this->db->where('user_id', $user_id);
    	}
    	$query = $this->db->get();
    	if($query) {
    		return $query->result();
    	} else {
    		return false;
    	}
    }
}

?>