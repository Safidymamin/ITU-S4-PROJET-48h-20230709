<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model{


    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllRegime(){
        return $this->db->get('CategorieRegime')->result_array();
    }
    public function getAllObjectif(){
        return $this->db->get('categorie_objectif')->result_array();
    }

    
}