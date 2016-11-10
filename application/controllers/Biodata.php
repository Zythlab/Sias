<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbiodata');
    }

    public function tambah(){
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $pass = $this->input->post('password');
        $mapel = $this->input->post('mapel');
        $telp = $this->input->post('telp');

        $this->Mbiodata->tambah($nip, $pass,$nama, $mapel,$telp);
    }

    public function ubah()
    {
        if ($this->uri->segment(3)) {
            $nip = $this->uri->segment(3);
            $nama = $this->input->post('nama');
            $pass = $this->input->post('password');
            $mapel = $this->input->post('mapel');
            $telp = $this->input->post('telp');
            $this->Mbiodata->ubah($nip, $pass,$nama, $mapel,$telp);
            redirect(base_url('Biodata'));
        }
        redirect(base_url('Biodata'));
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->Mbiodata->hapus($id);
        redirect(base_url('Biodata'));
    }

    public function search()
    {
        $s = $this->input->post('s', true);
        $result = $this->Mbiodata->search($s);
        foreach ($result as $biodata) {
            $arr_result[] = $biodata->nama;
            echo json_encode($arr_result);
        }
    }

    public function index(){
        if(isset($_GET['q'])){
            $this->data['sites'] = 'Akademik';
            $this->data['pages'] = 'Search';
            $this->data['biodata'] = $this->Mbiodata->search($_GET['q']);
            $this->data['content'] = $this->load->view('v_search', $this->data, true);
            $this->load->view('template2', $this->data);
        }else{
            $this->data['sites'] = 'Dashboard';
            $this->data['biodata'] = $this->Mbiodata->getData();
            $this->data['pages'] = 'Tambah Guru';
            $this->data['content'] = $this->load->view('v_guru', $this->data, true);
            $this->load->view('template', $this->data);
        }
    }
}