<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Msiswa extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validasiLogin($usr, $pass)
    {
        $this->db->where("nis", $usr);
        $this->db->where("password", $pass);
        $query = $this->db->get("m_siswa");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'username' => $rows->nama,
                    'nis' => $rows->nis,
                    'kelas' => $rows->kelas
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

    public function getData()
    {
        $query = $this->db->get('m_siswa');
        return $query->result();
    }

    public function tambah($kelas, $nis, $nama, $pass)
    {
        //tabel m_nilai
        $kategori = array('ul1', 'ul2', 'ul3', 'ul4', 'uts', 'uas');
            for ($j = 0; $j < 6; $j++) {
                $ins = array(
                    'nis' => $nis,
                    'kelas' => $kelas,
                    'kategori' => $kategori[$j],
                );
                $this->db->insert('m_nilai', $ins);
            }
        //add tabel siswa
        $data = array(
            'nis' => $nis,
            'nama' => $nama,
            'password' => $pass,
            'kelas' => $kelas
        );
        $this->db->insert('m_siswa', $data);
        return true;
    }

    public function hapus($id)
    {
        //hapus di tabel siswa
        $this->db->where('nis', $id);
        $this->db->delete('m_siswa');

        //m_nilai
        $this->db->where('nis', $id);
        $this->db->delete('m_nilai');
    }


    public function ubah($kelas, $nis, $nama, $pass)
    {
        //tabel m_nilai
        $data3 = array(
            'kelas' => $kelas,
        );
        $this->db->where('nis', $nis);
        $this->db->update('m_nilai', $data3);

        //update tabel siswa
        $data = array(
            'nama' => $nama,
            'password' => $pass,
            'kelas' => $kelas
        );
        $this->db->where('nis', $nis);
        $this->db->update('m_siswa', $data);
    }
}