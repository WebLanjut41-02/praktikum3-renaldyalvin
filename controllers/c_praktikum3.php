<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class c_praktikum3 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        // $this->load->library('form_validation');
        $this->load->model('m_praktikum3');
    }
    
    public function pesanan()
        {
            $data['value'] = $this->m_praktikum3->get_data()->result();
            $this->load->view('pesanan', $data);
        }
        public function tampilpesan($value='pesanan')
        {
            $this->load->view($value);
        }

    public function index($value='index')
    {
        $this->load->view($value);
        
    }
    public function createkonsumen()
    {
       $nama = $this->input->post('nama');

       $data = array(
           'nama' => $nama
           );
       $this->m_praktikum3->inputdata($data, 'user');
       
       redirect('c_praktikum3/pesanan');
    }

    public function createpesan()
     {
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'jumlah' => $jumlah
            );
        $this->m_praktikum3->inputdata1($data, 'pemesanan');
        
        
        redirect('c_praktikum/bill');
     }

    public function bill($value='bill')
     {
         $this->load->view($value);
         
     }


    }
    

?>