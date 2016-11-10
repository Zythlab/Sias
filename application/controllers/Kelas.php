<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->data['sites'] = 'Dashboard';
        $this->data['kelas'] = $this->Mkelas->getData();
        $this->data['pages'] = 'Tambah kelas';
        $this->data['content'] = $this->load->view('v_kelas', $this->data, true);
        $this->load->view('template', $this->data);
    }

    public function tambah(){
        $kelas = $this->input->post('kelas');
        $this->Mkelas->tambah($kelas);
    }

    public function hapus($id)
    {
        $this->Mkelas->hapus($id);
        redirect(base_url('Kelas'));
    }

}