<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model
{   
    public function cek_login($where)
    {
        $query = $this->db->get_where('admin', $where)->num_rows();
        return $query;
    }
}
?>