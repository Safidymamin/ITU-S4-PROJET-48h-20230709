<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite_Sport extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Categorie_model');
		$this->load->model('Sport_model');
		$this->load->model('Regime_model');
    }
	
	public function index()
	{
		$data ['listeObjectif'] = $this->Categorie_model->getAllObjectif();
		$data['listePro'] = $this->Sport_model->getAllPro();
		$data['page_title'] = "Sports";
		$data['body'] = 'sports/activite_Sport'; 
		$this->load->view('template/index',$data);
		
	}
	public function inserer(){
		
		$objectif = $this->input->post('objectif');
		$designation = $this->input->post('jour');
		$description = $this->input->post('activite');
		$regime = new Sport_model($objectif,$designation,$description);
		$regime->createAliment();
		redirect("activite_Sport");
	}
	public function modifier(){
		$id = $this->input->post('nombre');
		$data = array(
            'categorieID' => $this->input->post('objectif'),
            'jour' => $this->input->post('jour'),
            'activite' => $this->input->post('activiter'),
        );
		$Sport_model = $this->Sport_model->update_Aliment($id,$data);
		redirect("activite_Sport");
	}
	public function supprimer(){
		$id = $this->input->get('nombre');
		$this->Sport_model->deleteAliment($id);
		redirect("activite_Sport");
	}
	
}
