<?php
// application/controllers/Produits.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{
	public function inscription()
	{
		$email = "/.+@.+\..+/";
		$base = "/^[a-zA-ZÀ-ú\-\s]*/";
		$chiffreEtLettre = "/^[a-zA-Z0-9_ ]+$/";
		$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
		$chiffre = "/[0-9]{1,9}/";
		$this->load->library('form_validation');

		if($this->input->post())
		{
			$ajout =$this->input->post();
			$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('adresse','adresse',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s correct'));
			$this->form_validation->set_rules('type','type',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('ville','ville',"required|regex_match[$base]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s correct'));
			$this->form_validation->set_rules('code_postal','code postal',"required|regex_match[$chiffre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header');
				$this->load->view('inscription');
				$this->load->view('footer');
			}
			else
			{
				$chiffreRand = rand(1000,9999);
				$reference = "cliN".$chiffreRand ;
				/*$resultat = array($this->crud_client->liste());
				var_dump($resultat);
				foreach($resultat->CLI_REF as $value){

					if ($value == $reference) {
						$reference = $reference."8";
					}
				}*/


				if($ajout['type'] == "Professionnel")
				{
					$ajout['type'] = 1;
				}else{
					$ajout['type'] = 0;
				}

				$data = array(
					'CLI_NOM' => $ajout['nom'],
					'CLI_PRENOM' => $ajout['prenom'],
					'CLI_ADRESSE_FACTURATION' => $ajout['adresse'],
					'CLI_TYPE' => $ajout['type'],
					'CLI_MDP' => password_hash($ajout['mdp'], PASSWORD_DEFAULT),
					'CLI_REF' => $reference,
					'CLI_MAIL' => $ajout['email'],
					'CLI_VILLE' => $ajout['ville'],
					'CLI_CODE_POSTAL' => $ajout['code_postal'],
					'CLI_COEFFICIENT' => 1,
					'CLI_DATE_INSCRIPTION' => date('Y-m-d')
					);
				$this->crud_client->ajouter($data);
				redirect('client/espace_personnel');
			}
		}
		else
		{ // 1er appel de la page: affichage du formulaire
			$this->load->view('header');
			$this->load->view('inscription');
			$this->load->view('footer');
		}
	}
	public function modifier_client($id)
	{
		$email = "/.+@.+\..+/";
		$base = "/^[a-zA-ZÀ-ú\-\s]*/";
		$chiffreEtLettre = "/^[a-zA-Z0-9_ ]+$/";
		$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
		$chiffre = "/[0-9]{1,9}/";
		$this->load->library('form_validation');

		if($this->input->post())
		{
			$ajout =$this->input->post();
			$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('adresse','adresse',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s correct'));
			$this->form_validation->set_rules('type','type',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('ville','ville',"required|regex_match[$base]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s correct'));
			$this->form_validation->set_rules('code_postal','code postal',"required|regex_match[$chiffre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s correct'));
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header');
				$this->load->view('inscription');
				$this->load->view('footer');
			}
			else
			{
				if($ajout['type'] == "Professionnel")
				{
					$ajout['type'] = 1;
				}else{
					$ajout['type'] = 0;
				}

				$data = array(
					'CLI_NOM' => $ajout['nom'],
					'CLI_PRENOM' => $ajout['prenom'],
					'CLI_ADRESSE_FACTURATION' => $ajout['adresse'],
					'CLI_TYPE' => $ajout['type'],
					'CLI_MDP' => password_hash($ajout['mdp'], PASSWORD_DEFAULT),
					'CLI_MAIL' => $ajout['email'],
					'CLI_VILLE' => $ajout['ville'],
					'CLI_CODE_POSTAL' => $ajout['code_postal'],
					'CLI_COEFFICIENT' => 1,
					'CLI_DATE_INSCRIPTION' => date('Y-m-d')
					);
				$this->crud_client->modification($data);
				redirect('client/espace_personnel');
			}
		}
		else
		{ // 1er appel de la page: affichage du formulaire
			$this->load->view('header');
			$this->load->view('inscription');
			$this->load->view('footer');
		}
	}
	public function supprimer_client($id)
	{
		$this->crud_personnel->supprimer($id);
		redirect('client/inscription');
	}
	public function espace_personnelle()
	{
		$this->load->view('header');
		$this->load->view('espace_personnelle');
		$this->load->view('footer');
	}
	public function liste_client()
		{
			$resultat["client"] = $this->crud_client->liste();
			$this->load->view('header');
			$this->load->view('liste_client',$resultat);
			$this->load->view('footer');
		}
}

?>