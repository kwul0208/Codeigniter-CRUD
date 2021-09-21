<?php

class Home_model extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('produk')->result_array();
    }

    public function tambah()
    {
        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "keterangan" => $this->input->post('keterangan', true),
            "harga" => $this->input->post('harga', true),
            "jumblah" => $this->input->post('jumblah', true)
        ];

        $this->db->insert('produk', $data);
    }
}
