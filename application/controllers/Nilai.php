<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nilai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') == 'admin' || $this->session->userdata('username') == 'guru') {
            $this->data['sites'] = 'Dashboard';
            $this->data['pages'] = 'Nilai';
            $this->data['content'] = $this->load->view('v_nilai', $this->data, true);
            $this->load->view('template', $this->data);
            if ($this->uri->segment(3)) {
                $this->tampil();
            }
        } else if ($this->session->userdata('username')) {
            $this->data['sites'] = 'Akademik';
            $this->data['pages'] = 'Nilai';
            $this->data['nilai'] = $this->Mnilai->getNilai($this->session->userdata('nis'));
            $this->data['content'] = $this->load->view('v_nilaiSiswa', $this->data, true);
            $this->load->view('template2', $this->data);
        }
//        else redirect(base_url());
    }

    public function tampil()
    {
//        if ($this->session->userdata('username') == 'admin') {
        $this->data['sites'] = 'Dashboard';
        $this->data['pages'] = 'Nilai';
        $kelas = $this->uri->segment(3);
        $kategori = $this->uri->segment(4);
        $this->data['nilai'] = $this->Mnilai->getData($kelas, $kategori);
        $this->data['content'] = $this->load->view('v_nilai', $this->data, true);
        $this->load->view('template', $this->data);
//        } else if ($this->session->userdata('username')) {
//            redirect(base_url('Nilai/nilaiSiswa'));
//        } else redirect(base_url());
    }

    public function masukkanNilai()
    {
//        if ($this->session->userdata('username') == 'admin') {
        $this->data['sites'] = 'Dashboard';
        $this->data['pages'] = 'Nilai';
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $kategori = $this->input->post('tipe');
        $nilai1 = $this->input->post('nilai1');
        $nilai2 = $this->input->post('nilai2');
        $nilai3 = $this->input->post('nilai3');
        $nilai4 = $this->input->post('nilai4');
        $nilai5 = $this->input->post('nilai5');
        $nilai6 = $this->input->post('nilai6');
        $nilai7 = $this->input->post('nilai7');
        $nilai8 = $this->input->post('nilai8');
        $this->data['nilai'] = $this->Mnilai->simpanNilai($nis, $kelas, $kategori, $nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8);

            redirect('Nilai/tampil/' . $this->uri->segment(3) . '/' . $this->uri->segment(4));
//        } else if ($this->session->userdata('username')) {
//            redirect(base_url('Nilai/nilaiSiswa'));
//        } else redirect(base_url());
    }
}