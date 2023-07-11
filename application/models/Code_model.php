<?php
class Code_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($code, $valeur) {
        $data = array(
            'code' => $code,
            'valeur' => $valeur
        );
        $this->db->insert('code', $data);
        return $this->db->insert_id();
    }

    public function select_all() {
        $query = $this->db->get('code');
        return $query->result();
    }
}
?>
