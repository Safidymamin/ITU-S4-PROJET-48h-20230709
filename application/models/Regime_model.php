<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_model extends CI_Model{

    public $id;
    public $objectif;
    public $jour;
    public $matin;
    public $midi;
    public $soir;
    public $regime;

    public function __construct($a="",$b="",$c="",$e="",$f="",$g="") {
        parent::__construct();
        $this->load->database();
        $this->objectif = $a;
        $this->jour = $b;
        $this->matin = $c;
        $this->midi = $e;
        $this->soir = $f;
        $this->regime = $g; 
    }
    
    public function getAllProWhere($id_Objectif){
        $query = $this->db->query("SELECT
        o.id_r,
        c.nomCategories as objectif,
        o.jour,
        a.nom as Repas_matin,
        b.nom as repas_midi,
        d.nom as repas_soir,
        r.nom as regime,
        (a.prix + b.prix + d.prix) as prix_total,
        pourcetage_poisson,
        pourcentage_viande,
        pourcentage_volaille
    FROM
        regimejournalier as o
        LEFT JOIN categorie_objectif as c ON o.categorieid = c.id_objectif
        LEFT JOIN aliment as a ON o.matin = a.id 
        LEFT JOIN aliment as b ON o.midi = b.id
        LEFT JOIN aliment as d ON o.soir = d.id
        LEFT JOIN CategorieRegime as r ON o.RegimeID = r.id_c
        WHERE categorieID = ".$id_Objectif."
        ORDER BY o.id_r ASC
    ");

        $result = $query->result_array();
        return $result;
    }


    public function getAllPro(){
        $query = $this->db->query("SELECT
        o.id_r,
        c.nomCategories as objectif,
        o.jour,
        a.nom as Repas_matin,
        b.nom as repas_midi,
        d.nom as repas_soir,
        r.nom as regime,
        (a.prix + b.prix + d.prix) as prix_total,
        pourcetage_poisson,
        pourcentage_viande,
        pourcentage_volaille
    FROM
        regimejournalier as o
        LEFT JOIN categorie_objectif as c ON o.categorieid = c.id_objectif
        LEFT JOIN aliment as a ON o.matin = a.id 
        LEFT JOIN aliment as b ON o.midi = b.id
        LEFT JOIN aliment as d ON o.soir = d.id
        LEFT JOIN CategorieRegime as r ON o.RegimeID = r.id_c
        ORDER BY o.id_r ASC;
    ");

        $result = $query->result_array();
        return $result;
    }

    public function createAliment(){
        $data = array(
            'id_r' => 'default',
            'categorieID' => $this->objectif,
            'Jour' => $this->jour,
            'matin' => $this->matin,
            'midi' => $this->midi,
            'soir' => $this->soir,
            'RegimeID' => $this->regime
            
        );
        $this->db->insert('regimejournalier',$data);
    }

    public function update_Aliment($id,$data){
        $this->db->where('id_aliment',$id);
        $this->db->update('regimejournalier',$data);
    }

    public function deleteAliment($aliment){
        $this->db->where('id_r',$aliment);
        $this->db->delete('regimejournalier');
    }
    
}