<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Code extends CI_Controller {

        public function save(){
            $this->checkSession();
            $this->load->model('code_model');
            $code=$this->input->post('code');
            $valeur=$this->input->post('valeur');
            $data['codes'] = $this->code_model->select_all();


            try {
                
            if ($code == "" || $valeur == "") {
                $data['body'] = 'code/code'; 
                $this->load->view('template/index',$data);
            }else{
                $this->code_model->insert($code, $valeur);
                $data['success'] = "Code enregistré avec succès.";
                $data['body'] = 'code/code'; 
                $this->load->view('template/index',$data);
            }
            } catch (Exception $e) {
                $data['error'] = "Erreur lors de l'enregistrement";
                $data['body'] = 'code/code'; 
                $this->load->view('template/index',$data);
            }
        }
        public function index(){
            $this->checkSession();
            $this->load->model('code_model');
            $data['codes'] = $this->code_model->select_all();
            $data['body'] = 'code/code'; 
		    $this->load->view('template/index',$data);
        }

        public function checkSession(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_SESSION['id_user'])) {
                redirect('authentification/');
            }
            else if ($_SESSION['id_user'] == 5) {
                redirect('user/');
            }
        }
    }
 ?>