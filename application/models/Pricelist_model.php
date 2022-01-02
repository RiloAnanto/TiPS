<?php

// note: buat querynya bisa cek di https://codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder
//                                 https://codeigniter.com/user_guide/database/results.html

class Pricelist_model extends CI_model{
    public function getAllPricelist(){
        
        return $query = $this->db->get('daftar_harga')->result_array(); //selain cara dibawah, bisa pake cara ini (tinggal tambah panah lagi) disebut chaining
        // $query = $this->db->get('daftar_harga')
        // return $query->result_array();
    }
}

?>