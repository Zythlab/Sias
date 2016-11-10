<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mkelas extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $query = $this->db->get('m_kelas');
        return $query->result();
    }

    public function tambah($kelas)
    {
        $data = array(
            'kode' => $kelas
        );
        $this->db->insert('m_kelas', $data);
        return true;
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_kelas');
    }
}