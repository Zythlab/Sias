<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mbiodata extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validasiLogin($usr, $pass)
    {
        $this->db->where("nip", $usr);
        $this->db->where("password", $pass);
        $query = $this->db->get("m_biodata");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => 'guru',
                    'nip' => $rows->nip
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

    public function search($nama)
    {
        $this->db->like('nama', $nama);
        return $this->db->get('m_biodata')->result();
    }

    public function getData()
    {
        $query = $this->db->get('m_biodata');
        return $query->result();
    }

    public function tambah($nip, $pass, $nama, $mapel, $telp)
    {
        $data = array(
            'nip' => $nip,
            'password' => $pass,
            'nama' => $nama,
            'spesialis' => $mapel,
            'telp' => $telp
        );
        $this->db->insert('m_biodata', $data);
    }

    public function hapus($id)
    {
        $this->db->where('nip', $id);
        $this->db->delete('m_biodata');
    }

    public function ubah($nip, $pass, $nama, $mapel, $telp)
    {
        $data = array(
            'nip' => $nip,
            'password' => $pass,
            'nama' => $nama,
            'spesialis' => $mapel,
            'telp' => $telp
        );
        $this->db->where('nip',$nip);
        $this->db->update('m_biodata', $data);
    }
}