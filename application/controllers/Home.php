<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['produk'] = $this->Home_model->getAllData();

        $this->load->view('templates/head', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Produk';

        $this->form_validation->set_rules('nama', 'nama produk', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan produk', 'required');
        $this->form_validation->set_rules('harga', 'harga produk', 'required|numeric');
        $this->form_validation->set_rules('jumblah', 'jumblah produk', 'numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/head', $data);
            $this->load->view('pages/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Home_model->tambah();
            $this->session->set_flashdata('flash', 'ditambahkan');
            $this->session->set_flashdata('flash', 'berhasil');
            redirect('Home');
        }
    }
}
