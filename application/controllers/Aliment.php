<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aliment extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Aliment_model');
    }

	public function index()
	{
		$data['listAll'] = $this->Aliment_model->getAllAliment();
		$data['page_title'] = "Aliment";
		$data['body'] = 'aliment/Aliment'; 
		$this->load->view('template/index',$data);
		
	}
	public function inserer(){
		$objectif = $this->input->post('nom');
		$designation = $this->input->post('prix');
		$regime = new Aliment_model($objectif,$designation);
		$regime->createAliment();
		redirect("aliment");
	}
	public function modifier(){
		$id = $this->input->post('nombre');
		$data = array(
            'nom' => $this->input->post('nom'),
            'prix' => $this->input->post('prix')
        );
		$Aliment_model = $this->Aliment_model->update_Aliment($id,$data);
		redirect("aliment");
	}
	public function supprimer(){
		$id =$this->input->get('nombre');
		if($this->Aliment_model->deleteAliment($id)>0){
			redirect("aliment");
		}else{
			echo "Tsy mety";
		}
		
	}
	
}
