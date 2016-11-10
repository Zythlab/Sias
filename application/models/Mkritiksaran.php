<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mkritiksaran extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData(){
        $query = $this->db->get('m_kritiksaran');
        return $query->result();
    }

    public function simpan($nis,$isi){
        $data = array(
            'nis' => $nis,
            'isi' => $isi
        );
        $this->db->insert('m_kritiksaran',$data);
    }
}
