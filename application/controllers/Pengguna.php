<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$error = $this->input->get('error'))
            $error = '';
        else if ($_GET['error'] == 1)
            $error = '<code>Password atau username tidak valid.</code><br><br>';
        $this->data['notice'] = $error;
        $this->load->view('v_login', $this->data);
    }

    public function getLoginAuth()
    {
        $usr = $this->input->post('email');
        $pass = $this->input->post('pass');
        $_pass = md5($pass);

        $result = $this->Login->validasiLogin($usr, $_pass);
        if ($result) redirect(base_url('Siswa'));
        else {
            $result = $this->Msiswa->validasiLogin($usr, $pass);
            if ($result) redirect(base_url('Nilai'));
            else{
                $result = $this->Mbiodata->validasiLogin($usr,$pass);
                ($result)? redirect(base_url('Nilai')) : redirect(base_url('Pengguna?error=1'));
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

?>
