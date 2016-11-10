<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mpesan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function simpan($nis,$pes,$nip){
        ($this->session->userdata('username')=='guru')? $status = 2 : $status = 1;
        $data = array(
            'nis' => $nis,
            'isi' => $pes,
            'nip' => $nip,
            'status' =>$status
        );
        $this->db->insert('m_pesan', $data);
    }

    public function tampil($nip){
        $this->db->where('nip',$nip);
        $this->db->where('status','1');
        $query = $this->db->get('m_pesan');
        return $query->result();
    }

    public function getData($nis){
        $this->db->select('*');
        $this->db->from("m_pesan");
        $this->db->join("m_biodata", 'm_pesan.nip = m_biodata.nip');
        $this->db->where('nis',$nis);
        $this->db->where('status','2');
        $query = $this->db->get();
        return $query->result();
    }
}