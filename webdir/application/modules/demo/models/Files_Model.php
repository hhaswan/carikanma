<?php
class Files_Model extends CI_Model {

    public function insert_file($nama_produk, $foto_produk)
    {
        $data = array(
            'nama_produk'      => $nama_produk,
            'foto_produk'      => $foto_produk
        );
        $this->db->insert('produk', $data);
        return $this->db->insert_id();
    }

    public function get_files()
{
    return $this->db->select()
            ->from('produk')
            ->get()
            ->result();
}

}
?>
