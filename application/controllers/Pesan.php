<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function simpan()
    {
        $pes = $this->input->post('pes');
        $nis = $this->input->post('nis');
        $nip = $this->input->post('nip');
        $this->Mpesan->simpan($nis, $pes, $nip);
        ($this->session->userdata('username') == 'guru') ? redirect('Pesan') : redirect('Pesan/tampilFormPesan');
    }

    public function index()
    {
        $this->data['sites'] = 'Dashboard';
        $this->data['pages'] = 'Pesan';
        $this->data['pes'] = $this->Mpesan->tampil($this->session->userdata('nip'));
        $this->data['content'] = $this->load->view('v_pesanGuru', $this->data, true);
        $this->load->view('template', $this->data);
    }

    public function tampilFormPesan()
    {
        $this->data['sites'] = 'Akademik';
        $this->data['pages'] = 'Pesan';
        $this->data['pesan'] = $this->Mpesan->getData($this->session->userdata('nis'));
        $this->data['content'] = $this->load->view('v_pesan', $this->data, true);
        $this->load->view('template2', $this->data);
    }
}