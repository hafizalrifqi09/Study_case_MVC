<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');   
    }

    public function page()
    {
        $data['judul'] = 'page';
        $data['gambar'] = 'hfz.jpg';
        $data['nama'] = 'erpan';
        $data['pekerjaan'] = 'pemilik bumi';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}