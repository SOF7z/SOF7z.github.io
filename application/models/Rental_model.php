<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rental_model extends CI_model
{
    public function get_data($table)
    {

        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu` .*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu` 
                    ON `user_sub_menu`.`menu_id`= `user_menu`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    // public function ambil_id_admin($id){
    //     $hasil = $this->db->where('id_admin', $id)->get('makanan');
    //     if($hasil->num_rows() > 0 ){
    //         return $hasil->result();
    //     }else{
    //         return false;
    //     }
    // }

    // public function ambil_id_makanan($id){
    //     $hasil = $this->db->where('id_makanan', $id)->get('makanan');
    //     if($hasil->num_rows() > 0 ){
    //         return $hasil->result();
    //     }else{
    //         return false;
    //     }
    // }

    // public function ambil_id_minuman($id){
    //     $hasil = $this->db->where('id_minuman', $id)->get('minuman');
    //     if($hasil->num_rows() > 0 ){
    //         return $hasil->result();
    //     }else{
    //         return false;
    //     }
    // }

    // public function ambil_id_customer($id){
    //     $hasil = $this->db->where('id_customer', $id)->get('customer');
    //     if($hasil->num_rows() > 0 ){
    //         return $hasil->result();
    //     }else{
    //         return false;
    //     }
    // }

    // public function cek_login(){
    //     $username = set_value('username');
    //     $password = set_value('password');

    //     $result = $this->db
    //                         ->where('username',$username)
    //                         ->where('password',md5($password))
    //                         ->limit(1)
    //                         ->get('customer');

    //     if($result->num_rows() > 0 ){
    //         return $result->row();
    //     }else{
    //         return FALSE;
    //     }
    // }

    // public function update_password($where,$data,$table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table,$data);
    // }   

    // public function get_keyword($keyword){
    //     $this->db->select('*');
    //     $this->db->from('customer');
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('username', $keyword);
    //     $this->db->or_like('alamat', $keyword);
    //     $this->db->or_like('gender', $keyword);
    //     $this->db->or_like('no_telepon', $keyword);
    //     $this->db->or_like('password', $keyword);
    //     return $this->db->get()-result();

    // }

}
