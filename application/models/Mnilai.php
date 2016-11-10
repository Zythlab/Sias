<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mnilai extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData($kelas, $kategori)
    {
        $this->db->select('*');
        $this->db->from("m_siswa");
        $this->db->join("m_nilai", 'm_siswa.nis = m_nilai.nis');
        $ar = array(
            'kategori' => $kategori,
            'm_nilai.kelas' => $kelas,
        );
        $this->db->where($ar);
        $query = $this->db->get();
        return $query->result();
    }

    public function getNilai($nis)
    {
        $this->db->where('nis', $nis);
        $query = $this->db->get('m_nilai');
        return $query->result();
    }

    public function simpanNilai($nis, $kelas, $kategori, $nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8)
    {
        for ($i = 0; $i < sizeof($nis); $i++) {
            $nilai1[$i] = str_replace(",", ".", $nilai1[$i]);
            $nilai2[$i] = str_replace(",", ".", $nilai2[$i]);
            $nilai3[$i] = str_replace(",", ".", $nilai3[$i]);
            $nilai4[$i] = str_replace(",", ".", $nilai4[$i]);
            $nilai5[$i] = str_replace(",", ".", $nilai5[$i]);
            $nilai6[$i] = str_replace(",", ".", $nilai6[$i]);
            $nilai7[$i] = str_replace(",", ".", $nilai7[$i]);
            $nilai8[$i] = str_replace(",", ".", $nilai8[$i]);
            $data = array(
                'agama' => $nilai1[$i],
                'pkn' => $nilai2[$i],
                'mat' => $nilai3[$i],
                'ipa' => $nilai4[$i],
                'ips' => $nilai5[$i],
                'bindo' => $nilai6[$i],
                'bing' => $nilai7[$i],
                'penjas' => $nilai8[$i],
            );
            $where = array(
                'nis' => $nis[$i],
                'kelas' => $kelas[$i],
                'kategori' => $kategori[$i],
            );
            $this->db->where($where);
            $this->db->update('m_nilai', $data);
        }
    }
}