<?php
    class Etat_user extends CI_Model{
        public $id_etat_user;
        public $id_user;
        public $poid;
        public $taille;



        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function insert_etat_user($id_user,$poid,$taille){
            $data=array(
                'id_user'=>$id_user,
                'poids'=>$poid,
                'taille'=>$taille
            );
            $this->db->insert('Etat_user',$data);
        }

        public function get_etat_user($id_user){
            $this->db->where('id_user',$id_user);
            $query=$this->db->get('Etat_user');

            
            if($query->num_rows()===1){
                return $query->row();
            }else{
                return false;
            }
        }

        public function calcule_IMC($id_user){
            $etat=$this->get_etat_user($id_user);
            $IMC=$etat['poids']/($etat['taille']*$etat['taille']+1);
            echo $id_user;
            var_dump($etat);
            return $IMC;
        }

        public function etat_IMC($id_user){
            $IMC=$this->calcule_IMC($id_user);
            if ($IMC<18.5) {
                return "Insuffisance pondérale ";
            }
            if ($IMC>=18.5 && $IMC<=24.9) {
                return "Poids normal";
                # code...
            }
            if($IMC>=25 && $IMC<=29.9){
                return "Surpoids";
            }
            if($IMC>=30 && $IMC<=34.9){
                return "Obésité modérée";
            }
            if($IMC>=35 && $IMC<=39.9){
                return "Obésité sévère";
            }
            if($IMC>=40){
                return "Obésité morbide";
            }
        }

    }
 ?>