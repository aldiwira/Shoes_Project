<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class admin_model extends CI_Model {
 
     public function getData()
     {
         return $this->db->get('barang');
     }
    public function tambahData()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang', true),
            'harga' => $this->input->post('harga', true),
            'stok' => $this->input->post('stok', true),
            'jenis_barang' => $this->input->post('jenis_barang', true),
            
        );

        $this->db->insert('barang', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
    public function getbyid($id)
    {
        return $this->db->get_where('barang', array('id_barang' => $id))->row_array();
    }
    public function ubahData($id)
    {
       $data = array(
            'nama_barang' => $this->input->post('nama_barang', true),
            'harga' => $this->input->post('harga', true),
            'stok' => $this->input->post('stok', true),
            'jenis_barang' => $this->input->post('jenis_barang', true),
       );
       $this->db->where('id_barang', $id);
       $this->db->update('barang', $data);
    }
    public function cariData($keyword)
    {
        $this->db->like('nama_barang',$keyword);
        $this->db->or_like('jenis_barang',$keyword);
        return $this->db->get('praktikum_ci')->result();
    }
    public function upload_image()
    {

        $config['upload_path']          = './assets/upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_barang;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload("image")) {
            return $this->upload->data("file_name");
        } else {
            return "default.jpg";
        }
    }
 }
 
 /* End of file mahasiswa_model.php */
 

?>