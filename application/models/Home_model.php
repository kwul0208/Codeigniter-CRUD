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

    public function hapusProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function editData($id)
    {
        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "keterangan" => $this->input->post('keterangan', true),
            "harga" => $this->input->post('harga', true),
            "jumblah" => $this->input->post('jumblah', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }
}
