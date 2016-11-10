<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
            $this->data['sites'] = 'Dashboard';
            $this->data['siswa'] = $this->Msiswa->getData();
            $this->data['kelas'] = $this->Mkelas->getData();
            $this->data['kelas2'] = $this->Mkelas->getData();
            $this->data['pages'] = 'Tambah siswa';
            $this->data['content'] = $this->load->view('v_siswa', $this->data, true);
            $this->load->view('template', $this->data);
    }

    public function tambah(){
            $nis = $this->input->post('nis');
            $nama = $this->input->post('nama');
            $kelas = $this->input->post('kelas');
            $pass = $this->input->post('pass');

            $this->Msiswa->tambah($kelas, $nis, $nama, $pass);
    }

    public function ubah()
    {
            if ($this->uri->segment(3)) {
                $nis = $this->uri->segment(3);
                $kelas = $this->input->post('kelas');
                $nama = $this->input->post('nama');
                $pass = $this->input->post('password');
                $this->Msiswa->ubah($kelas, $nis, $nama, $pass);
                redirect(base_url('Siswa'));
            }
            redirect(base_url('Siswa'));
    }

    public function hapus($id)
    {
            $this->Msiswa->hapus($id);
            redirect(base_url('Siswa'));
    }

}