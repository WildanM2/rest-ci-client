<?php

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mobil';
        $data['mobil'] = $this->Mobil_model->getAllCar();
        if( $this->input->post('keyword') ) {
            $data['mobil'] = $this->Mobil_model->cariDataMobil();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mobil/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mobil';

        $this->form_validation->set_rules('No_polisi', 'No Polisi', 'required');
        $this->form_validation->set_rules('Nama_mobil', 'Nama Mobil', 'required');
        $this->form_validation->set_rules('Warna', 'Warna Mobil', 'required');
        $this->form_validation->set_rules('Harga_sewa', 'Harga Sewa', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mobil/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mobil_model->tambahDataMobil();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mobil');
        }
    }

    public function hapus($id_car)
    {
        $this->Mobil_model->hapusDataMobil($id_car);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mobil');
    }

    public function detail($id_car)
    {
        $data['judul'] = 'Detail Data Mobil';
        $data['mobil'] = $this->Mobil_model->getCarById($id_car);
        $this->load->view('templates/header', $data);
        $this->load->view('mobil/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_car)
    {
        $data['judul'] = 'Form Ubah Data Mobil';
        $data['mobil'] = $this->Mobil_model->getCarById($id_car);
        
       
        $this->form_validation->set_rules('No_polisi', 'No Polisi', 'required');
        $this->form_validation->set_rules('Nama_mobil', 'Nama Mobil', 'required');
        $this->form_validation->set_rules('Warna', 'Warna Mobil', 'required');
        $this->form_validation->set_rules('Harga_sewa', 'Harga Sewa', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mobil/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mobil_model->ubahDataMobil();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Mobil');
        }
    }

}
