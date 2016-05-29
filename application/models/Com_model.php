<?php

if (!defined('BASEPATH'))   exit('No direct script access allowed');

class Com_model extends CI_Model {

    //insert
    public function insert($tb, $data) 
    {
        if ($this->db->insert($tb, $data)) 
        {
            return $this->db->insert_id();
        } 
        else
        {
            return false;
        }
    }
    //replace into
    public function replace($tb, $data) 
    {
        if ($this->db->replace($tb, $data)) 
        {
            return $this->db->insert_id();
        } 
        else
        {
            return false;
        }
    }

    //batch insert
    public function batch_insert($tb, $data) 
    {
        if ($this->db->insert_batch($tb, $data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //full select
    //$order = array (asc or dec)
    public function select($tb, $cond = NULL, $order = NULL, $limit = NULL, $start = 0)
    {
        if (!empty($limit))
            $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from($tb);
        if (!empty($cond))
            $this->db->where($cond);
        if (!empty($order))
            $this->db->order_by($order);
        $query = $this->db->get();

        if ($query) 
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    //select row
    public function select_row($tb, $cond = NULL)
    {
        $this->db->select('*');
        $this->db->from($tb);
        if (!empty($cond))
            $this->db->where($cond);
        $query = $this->db->get();
        if ($query) 
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }

    //select row
    public function select_row_array($tb, $cond = NULL)
    {
        $this->db->select('*');
        $this->db->from($tb);
        if (!empty($cond))
            $this->db->where($cond);
        $query = $this->db->get();
        if ($query) 
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }

    //return count
    public function get_count($tb, $condition = NULL) 
    {
        if (!empty($condition))
            $this->db->where($condition);
        $this->db->from($tb);
        return $this->db->count_all_results();
    }

    //update
    public function update($tb, $data, $condition) 
    {
        if ($this->db->update($tb, $data, $condition))
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }

    //delete
    public function delete($tb, $condition)
    {
        if ($this->db->delete($tb, $condition))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>