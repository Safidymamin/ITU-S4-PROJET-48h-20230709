<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aliment_model extends CI_Model{

    public $id_aliment;
    public $nom;
    public $prix;
    

    public function __construct($a ="", $b ="") {
        parent::__construct();
        $this->load->database();
        $this->nom = $a;
        $this->prix = $b;
    }

    public function getAllAliment(){
        return $this->db->get('aliment')->result_array();
    }

    public function createAliment(){
        $data = array(
            'id' => 'default',
            'nom' => $this->nom,
            'prix' => $this->prix,
            
        );
        $this->db->insert('aliment',$data);
    }

    public function update_Aliment($id,$data){
        $this->db->where('id',$id);
        $this->db->update('aliment',$data);
    }

    public function deleteAliment($aliment){
        $this->db->where('id',$aliment);
        $this->db->delete('aliment');
        return $this->db->affected_rows()>0;
    }
    
}