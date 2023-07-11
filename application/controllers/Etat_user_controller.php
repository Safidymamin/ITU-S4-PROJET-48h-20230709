<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Etat_user_controller extends CI_Controller {
        //  public $id_user=$_SESSION['id_user'];
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Etat_user');
        }

        public function index(){
            $taille=$this->input->post('taille');
            $poid=$this->input->post('poids');
            $id_user=$this->input->post('id_user');
            $this->Etat_user->insert_etat_user($id_user,$poid,$taille);
            // $this->$load->view('accueil');
            // $this->envoy_IMC($id_user);
        }


        public function envoy_IMC($id_user){
            $id_user=$this->id_user;
            // $user=$this->Etat_user->get_user_by_id($id_user);
            $IMCC=$this->Etat_user->calcule_IMC($id_user);
            $IMCT=$this->Etat_user->etat_IMC($id_user);
            $data=array(
                'IMC'=>$IMCC,
                'etat_IMC'=>$IMCT
            );
            $this->load->view('accueil',$data);
        }
    }
 ?>