<?php

class UserModel extends CI_Model
{
    public $id_user;
    public $user_level;
    public $username;
    public $email;
    public $firstname;
    public $lastname;
    public $phone;
    public $argent;
    public $password;

    public function get_user_by_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('user');

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function verify_credentials($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function insert_user($data)
    {
        $this->argent = 0;
        $this->user_level = 5;
        $this->db->insert('user', $data);
    }

    // public withDraw_argent($id_user, $amount)
    // {
    //    $this->get_user_by_id($id_user);
    //    $new_vola = $this->argent - $amount;
    //    $this->db->set('argent', $new_vola);
       
    // }
}
