<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport_model extends CI_Model{

    public $id;
    public $objectif;
    public $jour;
    public $activite;
   
    public function __construct($b="",$c="",$e="") {
        parent::__construct();
        $this->load->database();
        $this->objectif = $b;
        $this->jour = $c;
        $this->activite = $e;
    }

    public function getAllPro(){
        $query = $this->db->query("select id_A, c.nomCategories as objectif, jour, activite from activiter as o
            left join categorie_objectif as c on o.categorieid = c.id_objectif");
        $result = $query->result_array();
        return $result;
    }

    public function createAliment(){
        $data = array(
            'id_A' => 'default',
            'categorieID' => $this->objectif,
            'Jour' => $this->jour,
            'activite' => $this->activite,
            
        );
        $this->db->insert('activiter',$data);
    }

    public function update_Aliment($id,$data){
        $this->db->where('id_A',$id);
        $this->db->update('activiter',$data);
    }

    public function deleteAliment($aliment){
        $this->db->where('id_A',$aliment);
        $this->db->delete('activiter');
    }
    
}