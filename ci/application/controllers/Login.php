<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function connexion()
	{
		if($this->input->post())
		{
			$mail = false;
			$password = false;
			$email = "/.+@.+\..+/";
			$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
			$logs =$this->input->post();

			$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Email ou Mot de passe pas au bon format'));
			$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Email ou Mot de passe pas au bon format'));
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header');
				$this->load->view('connexion_client');
				$this->load->view('footer');
			}else {
				$data = $logs["email"];
				$utilisateur = $this->crud_login->email($data);

				foreach ($utilisateur as $row) {
					if ($utilisateur != false && password_verify($logs["mdp"], $row->CLI_MDP) == true) {
					$password = true;
					}
				}
			}
			if ( $password == true) {

				foreach ($utilisateur as $row) {
					$data = $row->CLI_ID;
					$this->session->set_userdata('connecter','oui');
					$this->session->set_userdata('id', $row->CLI_ID);
					$this->session->set_userdata('commercial', $row->PER_ID);
					$this->session->set_userdata('nom', $row->CLI_NOM);
					$this->session->set_userdata('prenom', $row->CLI_PRENOM);
					$this->session->set_userdata('mail', $row->CLI_MAIL);
					$this->session->set_userdata('mdp', $row->CLI_MDP);
					$this->session->set_userdata('ref', $row->CLI_REF);
					$this->session->set_userdata('type', $row->CLI_TYPE);
					$this->session->set_userdata('adresse', $row->CLI_ADRESSE_FACTURATION);
					$this->session->set_userdata('inscription', $row->CLI_DATE_INSCRIPTION);
					$this->session->set_userdata('coeficient', $row->CLI_COEFFICIENT);
					$this->session->set_userdata('ville', $row->CLI_VILLE);
					$this->session->set_userdata('code_postal', $row->CLI_CODE_POSTAL);
					if ($row->UTI_EMPLOYER != 1) {
						$this->session->set_userdata('panier', $this->crud_login->panier($data));
						$this->session->set_userdata('ancien_panier', $this->crud_login->ancien_panier($data));
					}else {
						$this->session->set_userdata('employer', $row->UTI_EMPLOYER);
						$this->session->set_userdata('service', $row->UTI_SERVICE);
					}
				}

				$this->load->view('header');
				redirect('/client/espace_personnelle', 'refresh');
				$this->load->view('footer');
			}else {
				$this->load->view('header');
				$this->load->view('connexion_client');
				$this->load->view('footer');
			}

		}else {
			$this->load->view('header');
			$this->load->view('connexion_client');
			$this->load->view('footer');
		}
	}
	/*public function connexion_employer()
	{
		if($this->input->post())
		{
			$mail = false;
			$password = false;
			$email = "/.+@.+\..+/";
			$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
			$identification = $this->input->post();

			$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Email ou Mot de passe pas au bon format'));
			$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Email ou Mot de passe pas au bon format'));
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header');
				$this->load->view('cotoi');
				$this->load->view('footer');
			}else {
				$data = $identification["email"];
				$employer = $this->crud_login->email_employer($data);

				foreach ($employer as $row) {
					if ($employer != false && password_verify($identification["mdp"], $row->PER_MDP) == true) {
					$password = true;
					}
				}
			}
			if ( $password == true) {
				foreach ($employer as $row) {
					$data = $row->CLI_ID;
					$this->session->set_userdata('connecter','oui');
					$this->session->set_userdata('id', $row->CLI_ID);
					$this->session->set_userdata('commercial', $row->PER_ID);
					$this->session->set_userdata('nom', $row->CLI_NOM);
					$this->session->set_userdata('prenom', $row->CLI_PRENOM);
					$this->session->set_userdata('mail', $row->CLI_MAIL);
					$this->session->set_userdata('mdp', $row->CLI_MDP);
					$this->session->set_userdata('ref', $row->CLI_REF);
					$this->session->set_userdata('type', $row->CLI_TYPE);
					$this->session->set_userdata('adresse', $row->CLI_ADRESSE_FACTURATION);
					$this->session->set_userdata('inscription', $row->CLI_DATE_INSCRIPTION);
					$this->session->set_userdata('coeficient', $row->CLI_COEFFICIENT);
					$this->session->set_userdata('ville', $row->CLI_VILLE);
					$this->session->set_userdata('code_postal', $row->CLI_CODE_POSTAL);
					$this->session->set_userdata('panier', $this->crud_login->panier($data));
					$this->session->set_userdata('ancien_panier', $this->crud_login->ancien_panier($data));
				}

				$this->load->view('header');
				redirect('/client/espace_personnelle', 'refresh');
				$this->load->view('footer');
			}else {
				$this->load->view('header');
				echo '<div class="alert alert-danger"></div>';
				$this->load->view('cotoi');
				$this->load->view('footer');
			}

		}else {
			$this->load->view('header');
			$this->load->view('cotoi');
			$this->load->view('footer');
		}
	}*/



	public function deconexion()
	{
		$this->session->sess_destroy();
		redirect('/acceuil/home', 'refresh');
	}

}