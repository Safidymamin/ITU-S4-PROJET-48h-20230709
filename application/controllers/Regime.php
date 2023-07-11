<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Regime_model');
		$this->load->model('Categorie_model');
		$this->load->model('Aliment_model');
    }
	
	public function index()
	{
		$data ['listeObjectif'] = $this->Categorie_model->getAllObjectif();
		$data ['listeRegime'] = $this->Categorie_model->getAllRegime();
		$data['listAll'] = $this->Aliment_model->getAllAliment();
		$data['listePro'] = $this->Regime_model->getAllPro();
		$data['page_title'] = "Regime";
		$data['body'] = 'Regime/regime'; 
		$this->load->view('template/index',$data);
		
	}
	public function inserer(){
		$this->load->model('Regime_model');
		$objectif = $this->input->post('objectif');
		$jour = $this->input->post('jour');
		$matin = $this->input->post('matin');
		$midi = $this->input->post('midi');
		$soir = $this->input->post('soir');
		$regimes = $this->input->post('regime');
		$regime = new Regime_model($objectif,$jour,$matin,$midi,$soir,$regimes);
		$regime->createAliment();
		redirect("regime");
	}
	public function modifier(){
		$id = $this->input->post('nombre');
		$data = array(
            'categorieID' => $this->input->post('objectif'),
            'Jour' => $this->input->post('jour'),
            'matin' => $this->input->post('matin'),
            'midi' => $this->input->post('midi'),
			'soir' => $this->input->post('soir'),
			'RegimeID' => $this->input->post('regime')
        );
		$regime_model = $this->Regime_model->update_Aliment($id,$data);
		redirect("regime");
	}
	public function supprimer(){
		$id = $this->input->get('nombre');
		$this->Regime_model->deleteAliment($id);
		redirect("regime");
	}
	
}
