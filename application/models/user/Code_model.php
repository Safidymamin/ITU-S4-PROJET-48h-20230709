<?php
    class Code_model extends CI_Model
    {
        protected $table = 'code';

        public function delete($id)
        {
            $this->db->where('id_code', $id);
            $this->db->delete($this->table);
        }

        public function get_by($column, $value)
        {
            $this->db->where($column, $value);
            return $this->db->get($this->table)->row();
        }
    }
?>