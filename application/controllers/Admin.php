<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index()
        {
            $data['title']="Admin";
            $data['barang']=$this->admin_model->getData()->result();
            $data['content'] = $this->load->view('admin/home', $data, TRUE);
            $this->load->view('admin/admin', $data);   
        }
        public function tambah()
        {
            $data['title']="Tambah User";
            $this->form_validation->set_rules('username', 'username', 'required');
            if ($this->form_validation->run() == FALSE) {
                $data['content'] = $this->load->view('admin/tambah', $data, TRUE);
            }else{
                $this->admin_model->tambahData();
                $this->session->set_flashdata('flash-data', 'ditambahkan');
                redirect('admin','refresh');
            }
            $this->load->view('admin/admin', $data); 
        }
    
    }
    
    /* End of file Admin.php */
    
?>