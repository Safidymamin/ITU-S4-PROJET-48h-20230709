<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function insertCode(){
		$this->checkSession();
		$this->load->model('user/user_model');
		$this->load->model('user/code_model');

        $code = $this->input->post('code');

        // Vérifier si le code existe dans la table 'code'
        $code_data = $this->code_model->get_by('code', $code);
        if ($code_data) {
            // Le code existe, procéder à la mise à jour de l'argent de l'utilisateur
            $user_id = $this->session->userdata('id_user');  // Supposons que vous utilisez les sessions pour stocker l'ID de l'utilisateur
            $user = $this->user_model->get_by('id_user', $user_id);

            if ($user) {
                $new_amount = $user->argent + $code_data->valeur;
                $this->user_model->update($user_id, array('argent' => $new_amount));

                // Supprimer le code de la table 'code'
                $this->code_model->delete($code_data->id_code);
				$data['success'] = "Votre compte a été crédité avec Succès.";
            } else {
                // L'utilisateur n'existe pas ou l'ID de l'utilisateur est incorrect
                // Gérer cette condition selon vos besoins
            }
        } else {
            // Le code n'existe pas
            // Gérer cette condition selon vos besoins
			$data['error'] = "Le code de recharge n'existe pas.";
        }

        // Rediriger vers une autre page ou afficher un message de succès
		$this->load->view("user/ajoutCode", $data);
	}

	public function ajoutCode()
	{
		$this->load->view('user/ajoutCode');
	}	

    public function checkSession(){
        if (!$this->session->userdata('id_user')) {
            redirect('authentification/');
        }
    }
    public function deconnection(){
		$this->session->sess_destroy();
		redirect('authentification/');
	}
	public function index()
	{
        $this->checkSession();
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get('user');
		$result = $query->result();
		$data['result'] = $result;
		$this->load->view('accueil', $data);
	}		
    
	
	
}
