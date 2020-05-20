<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produit extends CI_Controller
	{

		public function detail_produit($id)
		{
			$resultat["data"]=$this->crud_produits->produitID($id);
			$this->load->view('header');
			$this->load->view('detail_produit',$resultat);
			$this->load->view('footer');
		}

		public function liste_produits()
		{
			$resultat["data"] = $this->crud_produits->liste();
			$this->load->view('header');
			$this->load->view('produits',$resultat);
			$this->load->view('footer');
		}

		public function ajouter_produits()
		{
			$email = "/.+@.+\..+/";
			$base = "/^[a-zA-ZÀ-ú\-\s]*/";
			$chiffreEtLettre = "/^[a-zA-Z0-9_]+$/";
			$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
			$chiffre = "/[0-9]{1,9}/";
			$this->load->library('form_validation');

			if($this->input->post())
			{
				$ajout =$this->input->post();
				$this->form_validation->set_rules('nom','nom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('prenom','prenom',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('service','service',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('identifiant','identifiant',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('mdp','mdp',"required|regex_match[$mdp]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('matricule','matricule',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('email','email',"required|regex_match[$email]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('coeficient','coeficient',"required|regex_match[$chiffre]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					$resultat["personnel"] = $this->crud_produits->liste();
					$this->load->view('header');
					echo "error";
					$this->load->view('liste_produits',$resultat);
					$this->load->view('footer');
				}
				else
				{


					$data = array(
						'PER_NOM' => $ajout['nom'],
						'PER_PRENOM' => $ajout['prenom'],
						'PER_SERVICE' => $ajout['service'],
						'PER_IDENTIFIANT' => $ajout['identifiant'],
						'PER_MDP' => password_hash($ajout['mdp'], PASSWORD_DEFAULT),
						'PER_MATRICULE' => $ajout['matricule'],
						'PER_EMAIL' => $ajout['email'],
						'PER_COEFICIENT' => $ajout['coeficient'],
						'PER_CREATION' => date('Y-m-d')
					  );
					$this->crud_personnel->ajouter($data);
					redirect('personnel/liste_produits');
				}
			}
			else
			{ // 1er appel de la page: affichage du formulaire
				$resultat["personnel"] = $this->crud_personnel->liste();
				$this->load->view('header');
				$this->load->view('liste_produits',$resultat);
				$this->load->view('footer');
			}
		}
		public function modifier_produits($id)
		{
			$produit=$this->crud_produits->produitID($id);
			$resultat["data"]=$produit;
			if($this->input->post())
			{
				$base = "/^[a-zA-ZÀ-ú\-\s]*/";
				$chiffreEtLettre = "/^[a-zA-Z0-9_]+$/";
				$mdp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
				$chiffre = "/[0-9]{1,9}/";

				$this->form_validation->set_rules('libelle','libelle',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('marque','marque',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('reference','référence',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('categorie','catégorie',"required|regex_match[$base]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('description','description',"required|regex_match[$chiffreEtLettre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('prix','prix',"required|regex_match[$chiffre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_rules('stock','stock',"required|regex_match[$chiffre]",array('required' => 'Il faut un %s ','regex_match' => 'Il faut un %s '));
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

				if($this->form_validation->run() == FALSE)
				{
					echo "1";
					$this->load->view('header');
					$this->load->view('modification_produits',$resultat);
					$this->load->view('footer');
				}
				else
				{
					$ajout =$this->input->post();
					$data = array(
						'PRO_LIBELLE' => $ajout['libelle'],
						'PRO_MARQUE' => $ajout['marque'],
						'PRO_REF' => $ajout['reference'],
						'CAT_ID' => $ajout['categorie'],
						'PRO_DESCRIPTION' => $ajout['description'],
						'PRO_PRIX' => $ajout['prix'],
						'PRO_STOCK_PHYSIQUE' => $ajout['stock'],

					  );
					$this->crud_produits->modification($id,$data);
					redirect('produit/liste_produits');
				}
			}
			else
			{
				echo "2";
				$this->load->view('header');
				$this->load->view('modification_produits',$resultat);
				$this->load->view('footer');
			}
		}
		public function supprimer_produits($id)
		{
			$this->crud_produits->supprimer($id);
			redirect('produit/liste_produits');
		}
	}
?>