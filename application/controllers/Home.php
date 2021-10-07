<?php

class Home extends CI_Controller
{
    public function index($nama = "Sahril")
    {
        $data['judul'] = "Halaman Home";
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index.php', $data);
        $this->load->view('templates/footer');
    }
}
