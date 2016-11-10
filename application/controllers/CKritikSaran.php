<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CKritikSaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['sites'] = 'Dashboard';
        $this->data['pages'] = 'Kritik & Saran';
        $this->data['ks'] = $this->Mkritiksaran->getData();
        $this->data['content'] = $this->load->view('v_kritiksaran', $this->data, true);
        $this->load->view('template', $this->data);
    }

    public function kirimKritikSaran()
    {
        $nis = $this->input->post('nis');
        $isi = $this->input->post('ks');
        $this->Mkritiksaran->simpan($nis, $isi);
        redirect('Nilai');
    }
}