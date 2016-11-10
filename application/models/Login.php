<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validasiLogin($usr, $pass)
    {
        $this->db->where("username", $usr);
        $this->db->where("password", $pass);
        $query = $this->db->get("m_super");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => $rows->username);
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }
}