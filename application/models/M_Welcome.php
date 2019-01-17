<?php
class M_Welcome extends CI_Model{

    public function daftarkan($data){
        $this->db->insert('users',$data);
        
        $id_user = $this->db->get_where('users', $data)->row();

        $data_diri = array(
            'id_user'        => $id_user->id,
            'nama'           => '',
            'tanggal_lahir'  => '',
            'jk'             => '',
        );
        
        return $this->db->insert('data_diri', $data_diri);
    }    

    public function cekData($data){
        return $this->db->get_where('users',$data);
    }

    public function ambil_data_diri($id){
        $this->db->where('id', $id);
        return $this->db->get('data_diri');
    }

    public function inputDataDiri($data){
        $this->db->where('id', $this->session->userdata('user_id'));
        return $this->db->update('data_diri', $data);
    }
}
