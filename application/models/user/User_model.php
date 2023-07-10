<?php
class User_model extends CI_Model
{
    protected $table = 'user';

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update($this->table, $data);
    }

    public function get_by($column, $value)
    {
        $this->db->where($column, $value);
        return $this->db->get($this->table)->row();
    }
}
?>
