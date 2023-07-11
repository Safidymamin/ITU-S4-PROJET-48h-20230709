<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

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
	
	public function verifyLogin(){
		$this->checkSession();
		$this->load->model('userModel');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->userModel->verify_credentials($email, $password);

        if ($user) {
			$userdata = array(
				'id_user' => $user->id_user,
				'username' => $user->username,
				'email' => $user->email,
				'user_level'=> $user->user_level
			);
			$this->session->set_userdata($userdata);
			redirect('user/');
			echo "User existant.";
        } else {
			echo "Ohhh";
        }
	}
	
	public function insertUser()
	{
		$this->checkSession();
		$this->load->model('userModel');

        $user = new UserModel();
        $user->username = $this->input->post('username');
        $user->lastname = $this->input->post('lastname');
        $user->firstname = $this->input->post('firstname');
        $user->email = $this->input->post('email');
        $user->phone = $this->input->post('phone');
        $user->password = $this->input->post('password');

        $user->insert_user($user);
		// Vérifier si l'insertion s'est bien déroulée
		if ($this->db->affected_rows() > 0) {
			echo "Insertion réussie !";
		} else {
			echo "Erreur lors de l'insertion.";
		}
	}
	public function login()
	{
		$this->checkSession();
        $this->load->view('authentification/login');
		
	}	
	public function inscription()
	{
		$this->checkSession();
		$this->load->view('authentification/inscription');
		
	}	
	public function index()
	{
		$this->checkSession();
		$this->load->view('authentification/login');
		
	}		
	public function checkSession(){
        if ($this->session->userdata('id_user')) {
            redirect('user/');
        }
    }
    
	
}
